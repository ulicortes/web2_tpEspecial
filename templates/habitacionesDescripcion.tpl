{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center mt-5 mb-5">
    <h2 class="titulos">{$titulo} perteneciente a {$nombreHotel}</h2>
    <div class="d-flex flex-column  w-50">
        <h5 class="mt-2"><span class="negrita">Direccion: </span>{$habitacion->Descripcion}</h5>
        <h5 class="mt-2"><span class="negrita">Cantidad de camas: </span>{$habitacion->Cantidad_camas}</h5>
        <h5 class="mt-2"><span class="negrita">Capacidad: </span>{$habitacion->Capacidad}</h5>
        <h5 class="mt-2"><span class="negrita">Precio: $</span>{$habitacion->Precio}</h5>
        <h5 class="mt-2"><span class="negrita">Disponible: </span>
            {if $habitacion->Disponible == '1'}
                Disponible
            {else}
                No disponible
            {/if}
        </h5>
        {if $usuario != ''}
            <a href="delete-habitacion/{$habitacion->ID_HABITACION}"><button class="btn btn-success my-2">Borrar</button></a>
            <a href="form-habitacion/{$habitacion->ID_HABITACION}">
              <button class="btn-editar btn btn-success my-2">Editar</button>
            </a>
        {/if}
    </div>
</div>
{include file='templates/footer.tpl'}