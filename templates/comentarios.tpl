
<div>
    <h3 class="titulos">Comentarios</h3>
    <input type="number" class="form-control" id="habitacion" value="{$habitacion->ID_HABITACION}" name="habitacion" hidden>
    {if !empty($smarty.session.role)}
    <input type="number" name="rol" value="{$smarty.session.role}" id="rol" hidden>
    {else}
    <input type="number" name="rol" value="5" id="rol" hidden>
    {/if}
    <div id="comentarios">

    </div>   
</div>
