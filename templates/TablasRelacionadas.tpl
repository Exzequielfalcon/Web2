<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de Productos</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Rareza</th>
      <th scope="col">Pintada</th>
      <th scope="col">Clase</th>
      <th scope="col">Año De Lanzamiento</th>
      <th scope="col">Precio</th>

    </tr>
  </thead>
  <tbody>
    {foreach from=$Tabla item=fila}
    <tr>
      <td>{$fila['nombre']}</td>
      <td>{$fila['rareza']}</td>
      <td>{$fila['pintada']}</td>
      <td>{$fila['clase']}</td>
      <td>{$fila['anio_lanzamiento']}</td>
      <td>{$fila['precio']}</td>

    </tr>
    {/foreach}
  </tbody>
</table>
      </div>
</div>
