{include file="header.tpl"}
<div class="row">
<div class="col-lg-12">
    <div class="container-fluid">
      <h1 class="text-white">Modificar Producto</h1>
      <h2 class="text-warning">ITEM</h2>
      <form method="post" action="addProducto">
        <div class="form-group">
          <p>print</p>
          <label class="violet" for="descripcionForm" >Nombre {$Producto['nombre']}</label>
          <input type="text" class="form-control" id="descripcionForm" name="nombre" placeholder="{$Producto['nombre']}">
        </div>
        <div class="form-group">
          <label class="text-success" for="tituloForm">Rareza</label>
          <input type="text" class="form-control" id="tituloForm" name="rareza">
        </div>
        <div class="form-group">
          <label class="text-success" for="tituloForm">Precio</label>
          <input type="text" class="form-control" id="tituloForm" name="precio">
        </div>
        <div class="form-group">
          <label class="violet" for="descripcionForm">Año</label>
          <input type="text" class="form-control" id="descripcionForm" name="anio_lanzamiento">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="completadaForm" name="pintada">
          <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
        </div>
        <select name="id_categoria">
          {foreach from=$Categoria item=cate}

          <option value="{$cate['id_categoria']}">{$cate['clase']}</option>

          {/foreach}
        </select>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
    </div>
  </div>
</div>
{include file="footer.tpl"}
