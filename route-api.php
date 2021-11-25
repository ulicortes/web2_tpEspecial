<?php

require_once 'libs/Router.php';
require_once 'Controllers/ApiComentariosController.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$router = new Router();

$router->addRoute('comentarios', 'GET', 'ApiComentariosController', 'obtenerComentarios');
$router->addRoute('comentario/:ID', 'GET', 'ApiComentariosController', 'obtenerComentario');
$router->addRoute('comentario/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertarComentario');


$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
