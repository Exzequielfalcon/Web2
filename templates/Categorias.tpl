<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de Categoria</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Pintada</th>
      <th scope="col">Clase</th>

    </tr>
  </thead>
  <tbody>
    {foreach from=$Categoria item=cate}
    <tr>

      <th scope="row">{$cate['id_categoria']}</th>
      {if $cate['pintada']==0}
      <td>No</td>
    {/if}
    {if $cate['pintada']==1}
    <td>Si</td>
    {/if}
      <td>{$cate['clase']}</td>
    {/foreach}
  </tbody>
</table>
      </div>
</div>
