<?php
/* Smarty version 3.1.39, created on 2021-11-10 23:20:18
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\habitacionesDescripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618c45a217e467_12421617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b45b212ea833fd5c4fa7881f10b2dd016c45da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\habitacionesDescripcion.tpl',
      1 => 1636582697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618c45a217e467_12421617 (Smarty_Internal_Template $_smarty_tpl) {
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

<div>
    <h3 class="titulos">Comentarios</h3>
    <div id="comentarios">
       
    </div>
</div>
  <?php if (!empty($_SESSION['usuario'])) {?>
    <div>
    <form action="api/comentarios/<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
" method="POST">            
                         
                <div class="col-md-8">
                      <label class="form-label">Comentario</label>
                      <textarea rows="4" class="form-control" id="inputcomentario" name="comentario"></textarea>
                </div>        
                <input type="number" class="form-control" id="inputidhabitacion" value="<?php echo $_smarty_tpl->tpl_vars['habitacion']->value->ID_HABITACION;?>
" name="ID_HABITACION" hidden> 
                <input type="number" class="form-control" id="inputidusuario" value ="($smarty.session.id)" name="id_usuario" hidden>            
               
                <div class="col-md-12 my-2">
                    <button type="submit" class="btn btn-success">Enviar comentario</button>
                </div>
              </form>
    </div>
    <?php }
echo '<script'; ?>
 src="Javascript/apicomentarios.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
