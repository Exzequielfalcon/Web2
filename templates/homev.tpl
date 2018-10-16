<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de items</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Clase</th>
      <th scope="col">Rareza</th>
      <th scope="col">Pintada</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Año</th>

    </tr>
  </thead>
  <tbody>

    <tr>
      <select name="id_categoria">
            {foreach from=$Categoria item=cate}

              <option value="{$cate['id_categoria']}">{$cate['clase']}</option>

              {/foreach}
          </select>
      <th scope="row">{$cate['id_categoria']}</th>
      <td>{$cate['clase']}</td>
      {foreach from=$Producto item=pro}
      <td>{$pro['rareza']}</td>
      {if $pro['pintada']==0}
      <td>No</td>
      {/if}
      {if $pro['pintada']==1}
      <td>Si</td>
      {/if}
      <td>{$pro['nombre']}</td>
      <td>{$pro['precio']}</td>
      <td>{$pro['anio_lanzamiento']}</td>
      {/foreach}
    </tr>


  </tbody>
</table>
      </div>
</div>


{include file="footer.tpl"}
