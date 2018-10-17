<div class="col-lg-5">
<div class="container-fluid">
  <h1 class="text-white">Categorias</h1>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">Clase</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Categoria item=fila}
        <tr>
          <td>{$fila['clase']}</td>
          <td><a class="float-right" href="borrarCategoria/{$fila['id_categoria']}">Borrar</a></td>
          <td><a class="float-right" href="borrar/{$Tabla['id_categoria']}">Modificar</a></td>
        </tr>
        {/foreach}
      </tbody>
  </div>
</div>
</div>
