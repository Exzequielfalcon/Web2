<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de Categoria</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Clase</th>

    </tr>
  </thead>
  <tbody>
    {foreach from=$Categoria item=cate}
    <tr>

      <th scope="row">{$cate['clase']}</th>
  </tbody>
</table>
      </div>
</div>
