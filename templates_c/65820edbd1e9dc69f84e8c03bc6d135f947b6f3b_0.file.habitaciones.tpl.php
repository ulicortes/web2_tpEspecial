<?php
/* Smarty version 3.1.39, created on 2021-11-10 23:49:03
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\habitaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618c4c5fb4cfb7_22622923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65820edbd1e9dc69f84e8c03bc6d135f947b6f3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\habitaciones.tpl',
      1 => 1636584538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formbusquedaavanzada.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618c4c5fb4cfb7_22622923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/formbusquedaavanzada.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['habitaciones']->value)) {?>
        <div class="w-50 p-3 text-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['habitaciones']->value, 'habitacion');
$_smarty_tpl->tpl_vars['habitacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['habitacion']->value) {
$_smarty_tpl->tpl_vars['habitacion']->do_else = false;
?>
              <div class="my-4">
                <a href="habitacion/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
">
                    <h2><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->Nombre_habitacion;?>
</h2>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
                    <a href="delete-habitacion/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
"><button class="btn btn-success">Borrar</button></a>
                    <a href="form-habitacion/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
"><button class="btn-editar btn btn-success">Editar</button></a>
                <?php }?>
              </div>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
            <h3 class="titulos">Agregar habitacion</h3>
            <div class="d-flex flex-column align-items-center w-50">
              <form action="agregar-habitacion" method="POST">
                <div class="row">
                  <label class="form-label">Elegir hotel</label>
                  <select class="form-select" name="id-hotel">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
                          <option value=<?php echo $_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL;?>
><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Nombre_hotel;?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                
                <div class="row">
                  <div class="col-md-8">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="inputDireccion" name="nombre-habitacion">
                  </div>
                  <div class="col-md-4">
                      <label class="form-label">Cantidad de camas</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="cant-camas">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                      <label class="form-label">Descripcion</label>
                      <textarea rows="4" class="form-control" id="inputTelefono" name="descripcion"></textarea>
                  </div>
                  <div class="col-md-2">
                      <label class="form-label">Capacidad</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="capacidad">
                  </div>
                  <div class="col-md-2">
                      <label class="form-label">Disponible</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="disponible">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <label class="form-label">Precio</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="precio">
                  </div>
                </div>
                <div class="col-md-12 my-2">
                    <button type="submit" class="btn btn-success">Agregar habitacion</button>
                </div>
              </form>
            </div> 
        <?php }?>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
