<?php

namespace Admin\Model\Post;

use \Engine\Core\DB\ActiveRecord;

class Post
{
    const IMAGE_DIR_MASK = ROOT_DIR . '/../content/uploads/post/%d';
    const IMAGE_MIME = ['image/png', 'image/gif', 'image/jpeg'];

    protected $table = 'post';
    private $id;
    private $title;
    private $content;
    private $reg_date;
    private $image;

    use ActiveRecord;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getRegDate()
    {
        return $this->reg_date;
    }

    /**
     * @param mixed $reg_date
     */
    public function setRegDate($reg_date)
    {
        $this->reg_date = $reg_date;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}