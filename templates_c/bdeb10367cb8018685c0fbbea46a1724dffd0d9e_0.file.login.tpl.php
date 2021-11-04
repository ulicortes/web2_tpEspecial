<?php
/* Smarty version 3.1.39, created on 2021-11-04 01:46:00
  from 'C:\xampp\htdocs\proyectos\WEB2\tpespecialFinal\tpespecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61832d48cae436_08990477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdeb10367cb8018685c0fbbea46a1724dffd0d9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\tpespecialFinal\\tpespecial\\templates\\login.tpl',
      1 => 1635986754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61832d48cae436_08990477 (Smarty_Internal_Template $_smarty_tpl) {
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
