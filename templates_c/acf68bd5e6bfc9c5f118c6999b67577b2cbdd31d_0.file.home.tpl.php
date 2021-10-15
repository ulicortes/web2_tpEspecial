<?php
/* Smarty version 3.1.39, created on 2021-10-15 20:46:43
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6169cc93d8a2d4_42010960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf68bd5e6bfc9c5f118c6999b67577b2cbdd31d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\home.tpl',
      1 => 1634323477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6169cc93d8a2d4_42010960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active altura">
      <img src="./images/gale1_tandil.jpeg" class="d-block w-100 imagenhome" alt="piedra movediza Tandil">
      <div class="carousel-caption d-none d-md-block titulo">
        <h5 id="h5tandil">Conocé Tandil!</h5>
        <p>Encontrá el alojamiento que buscas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/lago-dique-del-fuerte-3.jpg" class="d-block w-100 imagenhome" alt="Lago del fuerte">
    </div>
    <div class="carousel-item">
      <img src="./images/LUGARES_TANDIL_03.jpg" class="d-block w-100 imagenhome" alt="Monumento a Don Quijote">
    </div>
  </div>
  <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon carouselcolor" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon carouselcolor" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container" style="height: 80%;">
<div class="separador">
<h5> Sobre nosotros</h5>
</div>
<p> Fundado en 2011, Alquileres Tandil es un sitio creado para que los viajeros encuentren dónde hospedarse y para que los propietarios publiquen sus inmuebles y hoteles. </p>
<p>Aquella persona que busca alquilar una casa, departamento, apart, cabaña , hotel o bungalow en Tandil, podrá hacerlo de manera fácil y rápida, encontrando las mejores ofertas publicadas. Para el propietario interesado en alquilar su vivienda, Alquileres Tandil ofrece el espacio ideal para dar máxima visibilidad a sus avisos y conseguir un gran número de consultas.</p>
<p>Además, contamos con la mejor atención personalizada las 24 horas del día para ofrecer a nuestros clientes el mejor servicio. </p>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
