<?php
/* Smarty version 3.1.39, created on 2021-10-14 01:10:48
  from '/opt/lampp/htdocs/tpespecial/templates/editHoteles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61676778798d71_55154371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41d5ee32455a3c57fb603d0b4663d13cc1f33dc' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/editHoteles.tpl',
      1 => 1634130901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61676778798d71_55154371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="row g-3" action="editar-hotel/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputDireccion" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="inputTelefono" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Puntuacion</label>
    <input type="text" class="form-control" id="inputPuntuacion" name="puntuacion" value="<?php echo $_smarty_tpl->tpl_vars['puntuacion']->value;?>
">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Cantidad de habitaciones</label>
    <input type="text" class="form-control" id="inputPuntuacion" name="cantHabitaciones" value="<?php echo $_smarty_tpl->tpl_vars['cantHabitaciones']->value;?>
">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Editar hotel</button>
  </div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
