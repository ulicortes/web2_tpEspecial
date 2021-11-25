{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center mt-5 mb-5">
    <h2 class="titulos">{$titulo} perteneciente a {$nombreHotel}</h2>
    <div class="d-flex flex-column  w-50">
        <h5 class="mt-2"><span class="negrita">Descripcion: </span>{$habitacion->Descripcion}</h5>
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

{include file="templates/comentarios.tpl"}
  {if !empty($smarty.session.usuario)}
    <div>
        <form id="form" class="comentarios_div" method="POST">            
                            
            <div class="col-md-12">
                    <label class="form-label">Comentario</label>
                    <textarea rows="4" class="form-control" id="inputcomentario" name="comentario"></textarea>
                    <label>Puntaje</label>
                    <div class="clasificacion">
                        <input id="radio1" class="radiocomentario" type="radio" name="estrellas" value="5">
                        <label class="puntaje" for="radio1">★</label>
                        <input id="radio2" class="radiocomentario" type="radio" name="estrellas" value="4">
                        <label class="puntaje" for="radio2">★</label>
                        <input id="radio3" class="radiocomentario" type="radio" name="estrellas" value="3">
                        <label class="puntaje" for="radio3">★</label>
                        <input id="radio4" class="radiocomentario" type="radio" name="estrellas" value="2">
                        <label class="puntaje" for="radio4">★</label>
                        <input id="radio5" class="radiocomentario" type="radio" name="estrellas" value="1">
                        <label class="puntaje" for="radio5">★</label>
                    </div>
            </div>   
             
            <input type="number" class="form-control" id="inputidhabitacion" value="{$habitacion->ID_HABITACION}" name="ID_HABITACION" hidden> 
            <input type="number" class="form-control" id="inputidusuario" value ="{$smarty.session.id}" name="id_usuario" hidden>            
            <div class="col-md-12 my-2">
                <button type="submit" class="btn btn-success" id="enviarComentario">Enviar comentario</button>
                <h3 id="error"></h3>
            </div>
            
        </form>
    </div>
    {/if}
<script src="Javascript/apicomentarios.js" type="text/javascript"></script>
{include file='templates/footer.tpl'}