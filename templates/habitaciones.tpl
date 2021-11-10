{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos">{$titulo}</h1>
    {include file='templates/formbusquedaavanzada.tpl'}
    {if $habitaciones|is_array}
        <div class="w-50 p-3 text-center">
            {foreach from=$habitaciones item=$habitacion}
              <div class="my-4">
                <a href="habitacion/{$habitacion->ID_HABITACION}">
                    <h2>{$habitacion->Nombre_habitacion}</h2>
                </a>
                {if $usuario != ''}
                    <a href="delete-habitacion/{$habitacion->ID_HABITACION}"><button class="btn btn-success">Borrar</button></a>
                    <a href="form-habitacion/{$habitacion->ID_HABITACION}"><button class="btn-editar btn btn-success">Editar</button></a>
                {/if}
              </div>    
            {/foreach}
        </div>
        {if $usuario != ''}
            <h3 class="titulos">Agregar habitacion</h3>
            <div class="d-flex flex-column align-items-center w-50">
              <form action="agregar-habitacion" method="POST">
                <div class="row">
                  <label class="form-label">Elegir hotel</label>
                  <select class="form-select" name="id-hotel">
                      {foreach from=$hoteles item=$hotel}
                          <option value={$hotel->ID_HOTEL}>{$hotel->Nombre_hotel}</option>
                      {/foreach}
                  </select>
                </div>
                
                <div class="row">
                  <div class="col-md-8">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="inputDireccion" name="nombre-habitacion">
                  </div>
                  <div class="col-md-4">
                      <label class="form-label">Cantidad de camas</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="cant-camas">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                      <label class="form-label">Descripcion</label>
                      <textarea rows="4" class="form-control" id="inputTelefono" name="descripcion"></textarea>
                  </div>
                  <div class="col-md-2">
                      <label class="form-label">Capacidad</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="capacidad">
                  </div>
                  <div class="col-md-2">
                      <label class="form-label">Disponible</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="disponible">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <label class="form-label">Precio</label>
                      <input type="number" class="form-control" id="inputPuntuacion" name="precio">
                  </div>
                </div>
                <div class="col-md-12 my-2">
                    <button type="submit" class="btn btn-success">Agregar habitacion</button>
                </div>
              </form>
            </div> 
        {/if}
    {/if}
</div>
{include file='templates/footer.tpl'}