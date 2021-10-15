{include file='templates/header.tpl'}

<form class="row g-3" action="editar-hotel/{$id}">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{$nombre}">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputDireccion" name="direccion" value="{$direccion}">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="inputTelefono" name="telefono" value="{$telefono}">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Puntuacion</label>
    <input type="text" class="form-control" id="inputPuntuacion" name="puntuacion" value="{$puntuacion}">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Cantidad de habitaciones</label>
    <input type="text" class="form-control" id="inputPuntuacion" name="cantHabitaciones" value="{$cantHabitaciones}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Editar hotel</button>
  </div>
</form>

{include file='templates/footer.tpl'}

