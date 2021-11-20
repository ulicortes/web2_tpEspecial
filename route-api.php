<?php

require_once 'libs/Router.php';
require_once 'Controllers/ApiComentariosController.php';
//require_once 'Controller/ApiUserController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiComentariosController', 'obtenerComentarios');
$router->addRoute('comentario/:ID', 'GET', 'ApiComentariosController', 'obtenerComentario');
$router->addRoute('comentario/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertarComentario');
$router->addRoute('comentario/:ID', 'PUT', 'ApiComentariosController', 'editarComentario');


//$router->addRoute('users/:ID', 'GET', 'ApiUserController', 'obtenerUsuario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
