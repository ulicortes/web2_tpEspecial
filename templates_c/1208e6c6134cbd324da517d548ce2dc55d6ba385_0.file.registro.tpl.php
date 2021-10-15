<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:31:48
  from '/opt/lampp/htdocs/tpespecial/templates/registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616893b43b6f25_54665272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1208e6c6134cbd324da517d548ce2dc55d6ba385' => 
    array (
      0 => '/opt/lampp/htdocs/tpespecial/templates/registro.tpl',
      1 => 1634243507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616893b43b6f25_54665272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex flex-column align-items-center mb-4 mt-3">
    <h3>Registrate!</h3>
    <form action="enviar-registro" method="POST" class="w-25">
        <div class="row text-center">
          <div class="mb-3 col-md-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" required>
          </div>
          <div class="mb-3 col-md-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" required>
          </div>
        </div>
        
        <div class="mb-3 row text-center">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3 row text-center">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" required>
        </div>
        <div class="mb-3 row text-center">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" required>
        </div>
        <button type="submit" class="btn btn-success col-md-12">Enviar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
