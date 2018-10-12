<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-white">Listado de Productos</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
<thead>
  <tr>
    <th scope="col">Nombre </th>
    <th scope="col">Rareza</th>
    <th scope="col">Pintada</th>
    <th scope="col">Precio</th>
    <th scope="col">Año De Lanzamiento</th>



  </tr>
</thead>
  <tbody>
{foreach from=$Tabla item=fila}
<tr>
  <td>{$fila['nombre']}</td>
  <td>{$fila['rareza']}</td>
  <td>{$fila['pintada']}</td>
  <td>{$fila['precio']}</td>
  <td>{$fila['anio_lanzamiento']}</td>

   <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Borrar</a></td> -->
  <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Modificar</a></td> -->
</tr>
{/foreach}
</tbody>
</div>
</div>
</div>
</div>
