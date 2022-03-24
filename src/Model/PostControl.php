<?php

namespace bp\source\Model;

use bp\source\Entities\Post;
use bp\source\Entities\Database;

class PostControl
{
    private $db ;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function createNewPost(){
        if($this->setPostOnDb($this->getPostFromForm())){
            return true;
        }else{
            return false;
        }
    }

    public function getPostFromForm(){
        $title =  $_POST['title'];
        $content = $_POST['content'];
        $mainImage = $_POST['mainImage'];
        $userName = $_SESSION['username'];
        $user = $this->db->getUser($userName);

        $post = new Post(null, $title, $content, $mainImage, $user);
        return $post;
    }

    public function getPostFromDb(){

    }

    public function getPostsFromDb(){

    }

    public function setPostOnDb(Post $post){

        if($this->db->setPost($post)){
            return true;
        }else{
            return false;
        }

    }
}
