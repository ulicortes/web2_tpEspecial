{include file='templates/header.tpl'}
<div class="d-flex flex-column align-items-center">
    <h1 class="titulos">Usuarios</h1> 
        <div class="w-50 p-3 text-center">
            {foreach from=$usuarios item=$usuario}
              <div class="my-4">                
                    <h2>{$usuario->Usuario}</h2>            
                    <h4>{if $usuario->Admin == '1'}
                             Administrador
                        {else}
                             NO Administrador
                        {/if}
                    </h4>             
                    <a href="delete-usuario/{$usuario->id_usuario}"><button class="btn btn-success">Borrar</button></a>
                    <a href="modificarpermiso/{$usuario->id_usuario}"><button class="btn-editar btn btn-success">Cambiar permiso</button></a>
               
              </div>    
            {/foreach}
        </div>
</div>
{include file='templates/footer.tpl'}