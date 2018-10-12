<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de Productos</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Venta</th>
      <th scope="col">Año</th>

    </tr>
  </thead>
  <tbody>
    {foreach from=$Producto item=skin}
    <tr>
      <td>{$skin['precio']}</td>
      <td>{$skin['anio_lanzamiento']}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
      </div>
</div>
