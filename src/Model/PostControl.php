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
        $user = $_SESSION['username'];

        $post = new Post(null, $title, $content, $mainImage, $user);
        return $post;
    }

    public function getPostFromDb(int $idPost): Post{
        $post = $this->db->getPost($idPost);

        return $this->createJSON($post);
    }

    public function getPostsFromDb(){
        $posts = $this->db->getPosts();

        return $this->createJSON($posts);

    }

    public function setPostOnDb(Post $post){

        if($this->db->setPost($post)){
            return true;
        }else{
            return false;
        }

    }

    public function createJSON($object){
        return json_encode($object);
    }
}
