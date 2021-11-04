<?php
/* Smarty version 3.1.39, created on 2021-11-04 01:30:03
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6183298b9645a8_16973835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aa92148c892fd565aa96d4b731ad0a77df05651' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\usuarios.tpl',
      1 => 1635985801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6183298b9645a8_16973835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos">Usuarios</h1> 
        <div class="w-50 p-3 text-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
              <div class="my-4">                
                    <h2><?php echo $_smarty_tpl->tpl_vars['usuario']->value->Usuario;?>
</h2>            
                    <h4><?php if ($_smarty_tpl->tpl_vars['usuario']->value->Admin == '1') {?>
                             Administrador
                        <?php } else { ?>
                             NO Administrador
                        <?php }?>
                    </h4>             
                    <a href="delete-usuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button class="btn btn-success">Borrar</button></a>
                    <a href="modificarpermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button class="btn-editar btn btn-success">Cambiar permiso</button></a>
               
              </div>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
