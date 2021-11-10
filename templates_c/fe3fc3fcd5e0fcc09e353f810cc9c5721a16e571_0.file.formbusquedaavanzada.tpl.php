<?php
/* Smarty version 3.1.39, created on 2021-11-11 00:08:11
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\formbusquedaavanzada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618c50dbaaef57_47278088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe3fc3fcd5e0fcc09e353f810cc9c5721a16e571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\formbusquedaavanzada.tpl',
      1 => 1636585663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618c50dbaaef57_47278088 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="row g-3 mt-5" method="POST" action="busquedaavanzada">
    <div class="col-md-8">
      <select class="form-select" name="busqueda">       
        <option value="precioascendente"> De menor a mayor precio</option>
        <option value="preciodescendente"> De mayor a menor precio</option>
        <option value="disponible"> Disponible </option>       
      </select>
    </div>
      <button type="submit" class="btn btn-success mb-5 w-25">Buscar habitaciones</button>
    </div>
  </form>

<?php }
}
