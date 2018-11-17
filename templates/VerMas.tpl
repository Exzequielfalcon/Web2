{include file="header.tpl"}
<div class="row">
  <div class="col-3">
    <h1 class="text-white">Listado de items</h1>
    <br>
    <div class="container">
      <table class="table table-hover table-dark">
        <thead>
          <tr>

          </tr>
        </thead>

        <tbody>
          {foreach from=$Producto item=producto}
            <tr>
              <td class="text-danger font-weight-bold">Nombre</td>
              <td>{$producto['nombre']}</td>
            </tr>
            <tr>
              <td  class="text-danger font-weight-bold">Rareza</td>
              <td>{$producto['rareza']}</td>
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Pintada</td>
              {if $producto['pintada']==0}
              <td>No</td>
              {/if}
              {if $producto['pintada']==1}
              <td>Si</td>
              {/if}
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Precio</td>
              <td>${$producto['precio']}</td>
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Año</td>
              <td>{$producto['anio_lanzamiento']}</td>
            </tr>
            {/foreach}

          </tr>
        </tbody>
      </form>
      </table>
    </div>
  </div>
  <div class="col-9">

    {foreach from=$Producto item=pro}
    <img src="{$pro['imagen']}" alt="">
    {/foreach}
  </div>
</div>
