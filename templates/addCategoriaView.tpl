<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-white">Listado de Categoria </h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
<thead>
  <tr>

    <th scope="col">Clase</th>


  </tr>
</thead>
  <tbody>
{foreach from=$Tabla item=fila}
<tr>
  <td>{$fila['clase']}</td>
   <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Borrar</a></td>
   <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Modificar</a></td>
</tr>
{/foreach}
</tbody>
</div>
</div>
</div>
</div>
