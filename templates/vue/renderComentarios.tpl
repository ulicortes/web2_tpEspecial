{literal}

<div id="comentarios-vue">
    <h3 class="titulos">Comentarios</h3>
    <div id="comentarios">
    <ul class="list-group">
        <li v-for="comentario in comentarios" class="list-group-item">
            <span v-if="comentario.Admin == 1"><a :data-id="comentario.id_comentario" class="btn btn-success" href="#">eliminar</a></span>
            <span><h4>{{ comentario.Nombre_del_usuario }}</h4></span><p>{{ comentario.comentario }}</p>
        </li> 
    </ul>
    </div>   
</div>

{/literal}