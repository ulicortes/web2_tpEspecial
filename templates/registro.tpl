{include file='templates/header.tpl'}
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
{include file='templates/footer.tpl'}