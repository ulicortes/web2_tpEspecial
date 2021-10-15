{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center margin">
    <h4>{$respuesta}</h4>
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
{include file='templates/footer.tpl'}