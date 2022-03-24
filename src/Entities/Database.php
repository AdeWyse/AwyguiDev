<?php

namespace bp\source\Entities;

use bp\source\Entities\User;
use bp\source\Entities\Post;
use PDO;

class Database
{
    private $db;

    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = $this->ConnectDatabase();
    }

    private function ConnectDatabase(){
        $host = '127.0.0.1';
        $database = 'awygui';
        $user = 'root';
        $password = '';
        $port = '3306';
        $charset = 'utf8mb4';

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$database;charset=$charset;port=$port";
        try{
            $db = new PDO($dsn, $user, $password, $options);
        }catch( PDOException $e){
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $db;

    }

    public function getUsers(){
       $users = $this->db->query("SELECT * FROM user");
       $usersObj = array();
       foreach ($users->fetchAll() as $id => $user){
          $usersObj[$id] = new User($user['username'], $user['password'], $user['name'], $user['permissions']);
       }
       return $usersObj;
    }

    public function getUser($username){
        $users = $this->db->query("SELECT * FROM user");
        foreach ($users->fetchAll() as $user){
            if($user['username'] === $username){
                return new User($user['username'], $user['password'], $user['name'], $user['permissions']);
            }
        }
        return null;
    }

    public function getPosts(){
        $posts = $this->db->query("SELECT * FROM post");
        $postsObj = array();
        foreach ($posts->fetchAll() as $id => $post){
            $postsObj[$id] = new Post($post['id'], $post['title'], $post['content'], $post['mainImage'], $post['user']);
        }
        return $postsObj;
    }

    public function getPost($id){
        $posts = $this->db->query("SELECT * FROM post");
        foreach ($posts->fetchAll() as $post){
            if($post['id'] === $id){
                return new Post($post['id'], $post['title'], $post['content'], $post['mainImage'], $post['user']);;
            }
        }
        return null;
    }

    public function setPost(Post $post){
        $data = [
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'mainImage' => $post->getMainImage(),
            'user' => $post->getUser()->getUsername(),
        ];
        $sql = "INSERT INTO post (title, content, mainImage, user) VALUES (:title, :content, :mainImage, :user)";
        $stmt= $this->db->prepare($sql);
        $stmt->execute($data);

    }
}
