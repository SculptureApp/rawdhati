<?php

define('ROOT', dirname(__DIR__) . '/');

require ROOT . 'app/App.php';

App::autoload();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}

if($page === 'home'){
    $controller = new \App\Controller\HomeController();
    $controller->index();
}elseif($page === 'class'){
    $controller = new \App\Controller\ClasseController();
    $controller->index();
}elseif($page === 'kid'){
    $controller = new \App\Controller\KidController();
    $controller->index();
}elseif($page === 'share'){
    $controller = new \App\Controller\ShareController();
    $controller->index();
}

