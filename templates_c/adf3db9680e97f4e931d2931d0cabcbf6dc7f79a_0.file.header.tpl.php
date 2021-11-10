<?php
/* Smarty version 3.1.39, created on 2021-11-10 23:37:22
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618c49a2d66b76_02069587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adf3db9680e97f4e931d2931d0cabcbf6dc7f79a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\header.tpl',
      1 => 1636583822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618c49a2d66b76_02069587 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light -sm|-md|-lg|-xl|-xxl">
  <div class="container-fluid">
    <h1 class="navbar-brand">Alquileres Tandil</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hoteles">Ver hoteles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="habitaciones">Ver habitaciones</a>
            </li>
            <?php if (empty($_SESSION['usuario'])) {?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registro">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login">Login</a>
              </li>
            <?php } else { ?>
              <li>
                <a class="nav-link active" aria-current="page" href="logout">Logout</a>
              </li>
              <li>
                <a class="nav-link active" aria-current="page">Hola <?php echo $_SESSION['usuario'];?>
</a>
              </li>
                <?php if ($_SESSION['role'] == "1") {?>
                  <li>
                    <a class="nav-link active" aria-current="page" href="verusuarios">Ver usuarios</a>
                  </li>
                <?php }?>
            <?php }?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="busqueda-avanzada">Busqueda avanzada</a>
            </li>

        </ul> 
        <form class="d-flex" action="buscar-hotel" method="POST">
            <input class="form-control me-2" type="search" name="buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar hotel</button>
      </form>  
    </div>
  </div>
</nav>
<?php }
}
