<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-white">Listado de Items</h1>
      <br>
      <div class="container">
        <select class="form-control" id="exampleFormControlSelect1" name="categoria">
          {foreach from=$Categoria item=cate}
          <option class="dropdown-item" value="{$cate['id_categoria']}" name="categoria">{$cate['clase']}</a>
            {/foreach}
        </select>
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre </th>
      <th scope="col">Rareza</th>
      <th scope="col">Pintada</th>
      <th scope="col">Precio</th>
      <th scope="col">Año De Lanzamiento</th>
      <th scope="col">Clase</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$Producto item=fila}
    <tr>
      <td>{$fila['nombre']}</td>
      <td>{$fila['rareza']}</td>
      <td>{$fila['pintada']}</td>
      <td>{$fila['precio']}</td>
      <td>{$fila['anio_lanzamiento']}</td>
      {foreach from=$Categoria item=fila}
      <td>{$fila['clase']}</td>
      {/foreach}
      {/foreach}


      {if (isset($smarty.session.User))}
      <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Borrar</a></td> -->
      <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Modificar</a></td> -->
      {/if}
    </tr>
    <td><a class="float-right" href="vermas/{$Tabla['id_categoria']}">Ver Mas</a></td> -->

  </tbody>
</table>
      </div>
</div>
