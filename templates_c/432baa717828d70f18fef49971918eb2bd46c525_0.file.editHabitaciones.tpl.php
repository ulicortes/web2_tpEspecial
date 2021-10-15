<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:47:40
  from '/opt/lampp/htdocs/tpespecial/templates/editHabitaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a57c602ca3_57072547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '432baa717828d70f18fef49971918eb2bd46c525' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/editHabitaciones.tpl',
      1 => 1634248059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a57c602ca3_57072547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <form class="row g-3 mt-5" action="editar-habitacion/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <div class="col-md-8">
      <select class="form-select" name="id-hotel">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
          <option 
          <?php if ($_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL == $_smarty_tpl->tpl_vars['idHotel']->value) {?>
            selected
          <?php }?>
          value=<?php echo $_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL;?>
><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Nombre_hotel;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="inputDireccion" name="nombre-habitacion" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
    </div>
    <div class="col-6">
      <label for="inputDescripcion" class="form-label">Descripcion</label>
      <input type="textarea" class="form-control" id="inputTelefono" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
">
    </div>
    <div class="col-md-2">
      <label for="inputCantCamas" class="form-label">Cantidad de camas</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="cant-camas" value="<?php echo $_smarty_tpl->tpl_vars['cantCamas']->value;?>
">
    </div>
    <div class="col-md-2">
      <label for="inputCapacidad" class="form-label">Capacidad</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="capacidad" value="<?php echo $_smarty_tpl->tpl_vars['capacidad']->value;?>
">
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Precio</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
">
    </div>
    <div class="col-md-2">
      <label for="">Disponible</label>
      <label for="disponible">Si</label><input type="radio" name="disponible" id="" value="1"   <?php if ($_smarty_tpl->tpl_vars['disponible']->value == 1) {?>
        checked  <?php }?>>
      <label for="disponible">No</label><input type="radio" name="disponible" id="" value="0" <?php if ($_smarty_tpl->tpl_vars['disponible']->value == 0) {?>
        checked  <?php }?>> 
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success mb-5">Editar habitacion</button>
    </div>
  </form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



   <?php }
}
