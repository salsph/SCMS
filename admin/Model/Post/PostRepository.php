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


}