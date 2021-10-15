<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:10:12
  from '/opt/lampp/htdocs/tpespecial/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61689cb445b243_37520349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94f61b74e5c2e76c370ccb45312d643eb9f36d31' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/login.tpl',
      1 => 1634245781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61689cb445b243_37520349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center margin">
    <h4><?php echo $_smarty_tpl->tpl_vars['respuesta']->value;?>
</h4>
    <form action="verificar" method="POST" class="form-row align-items-center w-25 mb-5">
        <div class="mb-6 text-center">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario">
        </div>
        <div class="mb-3 text-center">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña">
        </div>
        <div class="btn-posdition">
          <button type="submit" class="btn btn-success col-md-12">Enviar</button>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
