{include file="header.tpl"}
{include file="ourhome.tpl"}
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
    {foreach from=$Categoria item=cate}
    <tr>

      <th scope="row">{$cate['id_categoria']}</th>
      <td>{$cate['clase']}</td>
      <td>{$cate['rareza']}</td>
      {if $cate['pintada']==0}
      <td>No</td>
      {/if}
      {if $cate['pintada']==1}
      <td>Si</td>
      {/if}
      {/foreach}
      {foreach from=$Producto item=pro}
      <td>{$pro['nombre']}</td>
      <td>{$pro['precio']}</td>
      <td>{$pro['año_lanzamiento']}</td>
      {/foreach}
    </tr>


  </tbody>
</table>
      </div>
</div>


{include file="footer.tpl"}
