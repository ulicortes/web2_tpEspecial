{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos">{$titulo}</h1>
    {if $hoteles|is_array}
        {foreach from=$hoteles item=$hotel}
            <div class="w-25 p-3 text-center">
                <a href="habitaciones/{$hotel->ID_HOTEL}">
                    <h2>{$hotel->Nombre_hotel}</h2>
                </a>
                <h4><span class="negrita">Direccion: </span>{$hotel->Direccion}</h4>
                <h4><span class="negrita">Telefono: </span>{$hotel->Telefono}</h4>
                <h4><span class="negrita">Puntuacion: </span>{$hotel->Puntuacion}</h4>
                {if $usuario != ''}
                    <a href="delete-hotel/{$hotel->ID_HOTEL}"><button class="btn btn-success">Borrar</button></a>
                    <a href="form/{$hotel->ID_HOTEL}"><button class="btn-editar btn btn-success">Editar</button></a>
                {/if}
            </div>
        {/foreach}
        {if $usuario != ''}
            <div class="d-flex flex-column align-items-center w-50">
                <h3 class="titulos">Agregar hotel</h3>
                <form action="agregar-hotel" method="POST" class="form-row align-items-center w-100">
                    <div class="row text-center">
                      <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Nombre</label>
                          <input type="text" class="form-control" id="inputNombre" name="nombre">
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Direccion</label>
                          <input type="text" class="form-control" id="inputDireccion" name="direccion">
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-6">
                          <label for="inputAddress" class="form-label">Telefono</label>
                          <input type="number" class="form-control" id="inputTelefono" name="telefono">
                      </div>
                      <div class="col-md-6">
                          <label for="inputZip" class="form-label">Puntuacion</label>
                          <input type="number" class="form-control" id="inputPuntuacion" name="puntuacion">
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-6">
                        <label for="inputZip" class="form-label">Cantidad de habitaciones</label>
                        <input type="number" class="form-control" id="inputPuntuacion" name="cant-habitaciones">
                      </div>
                    </div>
                    <div class="col-md-3 my-2">
                      <button type="submit" class="btn btn-success">Agregar hotel</button>
                    </div>
                </form>
            </div>
        {/if}
    {else}
        <div>
            <a href="habitaciones/{$hoteles->ID_HOTEL}">
                <h2>{$hoteles->Nombre}</h2>
            </a>
            <h4><span class="negrita">Direccion:</span>{$hoteles->Direccion}</h4>
            <h4><span class="negrita">Telefono:</span>{$hoteles->Telefono}</h4>
            <h4><span class="negrita">Puntuacion:</span>{$hoteles->Puntuacion}</h4>
            {if $usuario != ''}
                <a href="delete-hotel/{$hoteles->ID_HOTEL}"><button>Borrar</button></a>
                <a href="form/{$hoteles->ID_HOTEL}"><button class="btn-editar">Editar</button></a>
            </div>
        {/if}
    {/if}
</div>
{include file='templates/footer.tpl'}