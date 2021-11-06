<?php

require_once 'libs/Router.php';
require_once 'Controllers/ApiComentariosController.php';
//require_once 'Controller/ApiUserController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiComentariosController', 'obtenerComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'obtenerComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertarComentario');
$router->addRoute('comentarios/:ID', 'PUT', 'ApiComentariosController', 'actualizarComentario');


//$router->addRoute('users/:ID', 'GET', 'ApiUserController', 'obtenerUsuario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
