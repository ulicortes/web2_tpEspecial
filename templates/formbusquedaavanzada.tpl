

<form class="row g-3 mt-5" method="POST" action="ordenar">
    <div class="col-md-8">
      <select class="form-select" name="busqueda" value="{$criterio}">  
      
        <option value="precioascendente" {if "precioascendente" == $criterio} selected{/if}> De menor a mayor precio</option>
        <option value="preciodescendente" {if "preciodescendente" == $criterio} selected{/if}> De mayor a menor precio</option>
        <option value="disponible" {if "disponible" == $criterio} selected{/if}> Disponible </option>       
      </select>
    </div>
      <button type="submit" class="btn btn-success mb-5 w-25">Ordenar habitaciones</button>
    </div>
</form>

<form class="row g-3 mt-5" method="POST" action="busquedaavanzada">
    <div class="col-md-8">
      <label>Precio maximo<input type="number" class="form-control" id="preciomax" name="preciomax"></label>
      <label>Capacidad minima<input type="number" class="form-control" id="capminima" name="capminima"></label>

    </div>
      <button type="submit" class="btn btn-success mb-5 w-25">Buscar habitaciones</button>
    </div>
</form>

