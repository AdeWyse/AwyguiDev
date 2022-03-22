<?php

$routes = [
    '' => bp\source\Controller\Home::class,
    '/home' => bp\source\Controller\Home::class,
    '/login' => bp\source\Controller\Login::class,
];

return $routes;
