<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:25:51
  from '/opt/lampp/htdocs/tpespecial/templates/hoteles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168ae6f3f3317_00749773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1dfbbfb1a04d8b3546ec82a9916ece8b9502284' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/hoteles.tpl',
      1 => 1634250348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168ae6f3f3317_00749773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <?php if (is_array($_smarty_tpl->tpl_vars['hoteles']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoteles']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
            <div class="w-25 p-3 text-center">
                <a href="habitaciones/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL;?>
">
                    <h2><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Nombre_hotel;?>
</h2>
                </a>
                <h4><span class="negrita">Direccion: </span><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Direccion;?>
</h4>
                <h4><span class="negrita">Telefono: </span><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Telefono;?>
</h4>
                <h4><span class="negrita">Puntuacion: </span><?php echo $_smarty_tpl->tpl_vars['hotel']->value->Puntuacion;?>
</h4>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
                    <a href="delete-hotel/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL;?>
"><button class="btn btn-success">Borrar</button></a>
                    <a href="form/<?php echo $_smarty_tpl->tpl_vars['hotel']->value->ID_HOTEL;?>
"><button class="btn-editar btn btn-success">Editar</button></a>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
            <div class="d-flex flex-column align-items-center w-50">
                <h3 class="titulos">Agregar hotel</h3>
                <form action="agregar-hotel" class="form-row align-items-center w-100">
                    <div class="row text-center">
                      <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="inputNombre" name="nombre">
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Direccion</label>
                          <input type="text" class="form-control" id="inputDireccion" name="direccion">
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-6">
                          <label for="inputAddress" class="form-label">Telefono</label>
                          <input type="number" class="form-control" id="inputTelefono" name="telefono">
                      </div>
                      <div class="col-md-6">
                          <label for="inputZip" class="form-label">Puntuacion</label>
                          <input type="number" class="form-control" id="inputPuntuacion" name="puntuacion">
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-6">
                        <label for="inputZip" class="form-label">Cantidad de habitaciones</label>
                        <input type="number" class="form-control" id="inputPuntuacion" name="cant-habitaciones">
                      </div>
                    </div>
                    <div class="col-md-3 my-2">
                      <button type="submit" class="btn btn-success">Agregar hotel</button>
                    </div>
                </form>
            </div>
        <?php }?>
    <?php } else { ?>
        <div>
            <a href="habitaciones/<?php echo $_smarty_tpl->tpl_vars['hoteles']->value->ID_HOTEL;?>
">
                <h2><?php echo $_smarty_tpl->tpl_vars['hoteles']->value->Nombre;?>
</h2>
            </a>
            <h4><span class="negrita">Direccion:</span><?php echo $_smarty_tpl->tpl_vars['hoteles']->value->Direccion;?>
</h4>
            <h4><span class="negrita">Telefono:</span><?php echo $_smarty_tpl->tpl_vars['hoteles']->value->Telefono;?>
</h4>
            <h4><span class="negrita">Puntuacion:</span><?php echo $_smarty_tpl->tpl_vars['hoteles']->value->Puntuacion;?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
                <a href="delete-hotel/<?php echo $_smarty_tpl->tpl_vars['hoteles']->value->ID_HOTEL;?>
"><button>Borrar</button></a>
                <a href="form/<?php echo $_smarty_tpl->tpl_vars['hoteles']->value->ID_HOTEL;?>
"><button class="btn-editar">Editar</button></a>
            </div>
        <?php }?>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
