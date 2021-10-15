<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:45:40
  from '/opt/lampp/htdocs/tpespecial/templates/habitacionesDescripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a504ee2176_03811857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bdb3a4718e947744bcadf7ca0e309db9c57417b' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/habitacionesDescripcion.tpl',
      1 => 1634247938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a504ee2176_03811857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center mt-5 mb-5">
    <h2 class="titulos"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 perteneciente a <?php echo $_smarty_tpl->tpl_vars['nombreHotel']->value;?>
</h2>
    <div class="d-flex flex-column  w-50">
        <h5 class="mt-2"><span class="negrita">Direccion: </span><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->Descripcion;?>
</h5>
        <h5 class="mt-2"><span class="negrita">Cantidad de camas: </span><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->Cantidad_camas;?>
</h5>
        <h5 class="mt-2"><span class="negrita">Capacidad: </span><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->Capacidad;?>
</h5>
        <h5 class="mt-2"><span class="negrita">Precio: $</span><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->Precio;?>
</h5>
        <h5 class="mt-2"><span class="negrita">Disponible: </span>
            <?php if ($_smarty_tpl->tpl_vars['habitacion']->value->Disponible == '1') {?>
                Disponible
            <?php } else { ?>
                No disponible
            <?php }?>
        </h5>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value != '') {?>
            <a href="delete-habitacion/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
"><button class="btn btn-success my-2">Borrar</button></a>
            <a href="form-habitacion/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
">
              <button class="btn-editar btn btn-success my-2">Editar</button>
            </a>
        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
