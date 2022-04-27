<?php

$routes = [
    '' => bp\source\Controller\Home::class,
    '/home' => bp\source\Controller\Home::class,
    '/login' => bp\source\Controller\Login::class,
    '/management' => bp\source\Controller\Management::class,
    '/newPost' => bp\source\Controller\NewPost::class,
    '/newProject' => bp\source\Controller\NewProject::class,
    '/contact' => bp\source\Controller\Contact::class,
    '/post' => bp\source\Controller\Post::class,
    '/posts' => bp\source\Controller\Posts::class,
    '/about' => bp\source\Controller\About::class,
];

return $routes;
