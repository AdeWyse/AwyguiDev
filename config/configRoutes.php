<?php

$routes = [
    '' => bp\source\Controller\Home::class,
    '/home' => bp\source\Controller\Home::class,
    '/login' => bp\source\Controller\Login::class,
    '/management' => bp\source\Controller\Management::class,
];

return $routes;
