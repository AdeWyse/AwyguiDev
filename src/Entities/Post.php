<?php
 namespace bp\source\Entities;

 class Post{
     private int $id;
     private string $title;
     private string $content;
     private string $mainImage;
     private User $user;
     /**
      * @param int $id
      * @param string $title
      * @param string $content
      * @param string $mainImage
      * @param User $user
      */
     public function __construct($id, string $title, string $content, string $mainImage, User $user)
     {
         if($id != null){
             $this->id = $id;
         }
         $this->title = $title;
         $this->content = $content;
         $this->mainImage = $mainImage;
         $this->user = $user;
     }

     /**
      * @return int
      */
     public function getId(): int
     {
         return $this->id;
     }

     /**
      * @param int $id
      */
     public function setId(int $id): void
     {
         $this->id = $id;
     }

     /**
      * @return string
      */
     public function getTitle(): string
     {
         return $this->title;
     }

     /**
      * @param string $title
      */
     public function setTitle(string $title): void
     {
         $this->title = $title;
     }

     /**
      * @return string
      */
     public function getContent(): string
     {
         return $this->content;
     }

     /**
      * @param string $content
      */
     public function setContent(string $content): void
     {
         $this->content = $content;
     }

     /**
      * @return string
      */
     public function getMainImage(): string
     {
         return $this->mainImage;
     }

     /**
      * @param string $mainImage
      */
     public function setMainImage(string $mainImage): void
     {
         $this->mainImage = $mainImage;
     }
     
     /**
      * @return string
      */
     public function getUser(): User
     {
         return $this->user;
     }

     /**
      * @param string $user
      */
     public function setUser(string $user): void
     {
         $this->user = $user;
     }


 }
