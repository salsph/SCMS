<?php

namespace Admin\Model\Post;

use \Engine\Model;

class PostRepository extends Model
{
    public function getPosts(){
        $sql = $this->query_builder->select()->from('post')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

    public function addPost($params){
        $post = new Post();
        $post->setTitle($params['title']);
        $post->setContent($params['content']);
        return $post->save();
    }

    public function getPost($id){
        $post = new Post($id);
        return $post->findOne();
    }

    public function updatePost($params){
        $post = new Post($params['id']);
        $post->setTitle($params['title']);
        $post->setContent($params['content']);
        if (isset($params['image'])){

        }
        $post->save();
    }

    public function deletePost($params){
        $id = $params['id'];
        $sql = $this->query_builder->delete()->from('post')->where('id', $id)->sql();
        return $this->db->execute($sql, $this->query_builder->getValues());
    }


}