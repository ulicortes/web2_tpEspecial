{include file='templates/header.tpl'}

  <form class="row g-3 mt-5" method="POST" action="editar-habitacion/{$id}">
    <div class="col-md-8">
      <select class="form-select" name="id-hotel">
        {foreach from=$hoteles item=$hotel}
          <option 
          {if $hotel->ID_HOTEL == $idHotel}
            selected
          {/if}
          value={$hotel->ID_HOTEL}>{$hotel->Nombre_hotel}</option>
        {/foreach}
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="inputDireccion" name="nombre-habitacion" value="{$nombre}">
    </div>
    <div class="col-6">
      <label for="inputDescripcion" class="form-label">Descripcion</label>
      <input type="textarea" class="form-control" id="inputTelefono" name="descripcion" value="{$descripcion}">
    </div>
    <div class="col-md-2">
      <label for="inputCantCamas" class="form-label">Cantidad de camas</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="cant-camas" value="{$cantCamas}">
    </div>
    <div class="col-md-2">
      <label for="inputCapacidad" class="form-label">Capacidad</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="capacidad" value="{$capacidad}">
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Precio</label>
      <input type="number" class="form-control" id="inputPuntuacion" name="precio" value="{$precio}">
    </div>
    <div class="col-md-2">
      <label for="">Disponible</label>
      <label for="disponible">Si</label><input type="radio" name="disponible" id="" value="1"   {if $disponible==1}
        checked  {/if}>
      <label for="disponible">No</label><input type="radio" name="disponible" id="" value="0" {if $disponible==0}
        checked  {/if}> 
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success mb-5">Editar habitacion</button>
    </div>
  </form>

{include file='templates/footer.tpl'}



   