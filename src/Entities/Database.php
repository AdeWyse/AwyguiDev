<?php

namespace bp\source\Entities;

use bp\source\Entities\Post;
use bp\source\Entities\Message;
use bp\source\Entities\User;
use bp\source\Entities\Project;
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
        $host = 'sql5.freesqldatabase.com';
        $database = 'sql5488168';
        $user = 'sql5488168';
        $password = 'd38eMRxMmJ';
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
        return new Post($id, "The post doesn't exist", 'Are you sure you are on the right place?', null, null);
    }

    public function setPost(Post $post){
        $data = [
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'mainImage' => $post->getMainImage(),
            'user' => $post->getUser(),
        ];
        $sql = "INSERT INTO post (title, content, mainImage, user) VALUES (:title, :content, :mainImage, :user)";
        $stmt= $this->db->prepare($sql);
        return $stmt->execute($data);

    }

    public function getProjects(){
        $projects = $this->db->query("SELECT * FROM project");
        $projectsObj = array();
        foreach ($projects->fetchAll() as $id => $project){
            $projectsObj[$id] = new Project($project['id'], $project['title'], $project['content'], $project['mainImage']);
        }
        return $projectsObj;
    }

    public function getProject($id){
        $projects = $this->db->query("SELECT * FROM project");
        foreach ($projects->fetchAll() as $project){
            if($project['id'] === $id){
                return new Project($project['id'], $project['title'], $project['content'], $project['mainImage']);
            }
        }
        return null;
    }

    public function setProject(Project $project){
        $data = [
            'title' => $project->getTitle(),
            'content' => $project->getContent(),
            'mainImage' => $project->getMainImage(),
        ];
        $sql = "INSERT INTO project (title, content, mainImage) VALUES (:title, :content, :mainImage)";
        $stmt= $this->db->prepare($sql);
        return $stmt->execute($data);

    }

    public function getMessages(){
        $messages = $this->db->query("SELECT * FROM message");
        $messagesObj = array();
        foreach ($messages->fetchAll() as $id => $message){
            $messageObj[$id] = new Message($message['id'], $message['name'], $message['email'], $message['subject'], $message['content']);
        }
        return $messagesObj;
    }

    public function getMessage($id){
        $messages = $this->db->query("SELECT * FROM message");
        foreach ($messages->fetchAll() as $message){
            if($message['id'] === $id){
                return new Message($message['id'], $message['name'], $message['email'], $message['subject'], $message['content']);
            }
        }
        return null;
    }

    public function setMessage(Message $message){
        $data = [
            'name' => $message->getName(),
            'email' => $message->getEmail(),
            'subject' => $message->getSubject(),
            'content' => $message->getContent(),
        ];
        $sql = "INSERT INTO message (name, email, subject, content) VALUES (:name, :email, :subject, :content)";
        $stmt= $this->db->prepare($sql);
        return $stmt->execute($data);

    }
}
