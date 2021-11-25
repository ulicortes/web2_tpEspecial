
<div class="contenedorbusquedaavanzada">

  <form class="form_ba" method="POST" action="ordenar">
      <div>
        <select class="form-select" name="busqueda" value="{$criterio}">  
        
          <option value="precioascendente" {if "precioascendente" == $criterio} selected{/if}> De menor a mayor precio</option>
          <option value="preciodescendente" {if "preciodescendente" == $criterio} selected{/if}> De mayor a menor precio</option>
          <option value="disponible" {if "disponible" == $criterio} selected{/if}> Disponible </option>       
        </select>
      </div>
      <button type="submit" class="btn btn-success mb-5 w-100">Ordenar habitaciones</button>
      
  </form>

  <form class="form_ba" method="POST" action="busquedaavanzada">
      <div >
        <label>Precio maximo<input type="number" class="form-control" id="preciomax" name="preciomax"></label>
        <label>Capacidad minima<input type="number" class="form-control" id="capminima" name="capminima"></label>

      </div>
      <button type="submit" class="btn btn-success mb-5 w-100">Buscar habitaciones</button>
  </form>

</div>
