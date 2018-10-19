{include file="header.tpl"}
<div class="row">
  <div class="col-lg-12">
    <h1 class="text-white">Listado de items</h1>
    <br>
    <div class="container">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Rareza</th>
            <th scope="col">Pintada</th>
            <th scope="col">Precio</th>
            <th scope="col">Año</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            {foreach from=$Producto item=producto}
            <td>{$producto['nombre']}</td>
            <td>{$producto['rareza']}</td>
            {if $producto['pintada']==0}
            <td>No</td>
            {/if}
            {if $producto['pintada']==1}
            <td>Si</td>
            {/if}
            <td>${$producto['precio']}</td>
            <td>{$producto['anio_lanzamiento']}</td>

            {/foreach}

          </tr>
        </tbody>
      </form>
      </table>
    </div>
  </div>
</div>
