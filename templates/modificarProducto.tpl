{include file="header.tpl"}
<!-- {$Producto|@print_r} -->
<div class="row">
<div class="col-lg-12">
    <div class="container-fluid">
      <h1>Modificar producto {$Producto[0]['nombre']} </h1>
      <h2 class="text-warning">ITEM</h2>
      <form method="post" action="{$home}/updateProducto" enctype="multipart/form-data" target="_self">
        <input type="hidden" class="form-control" id="idForm" name="id_producto" value="{$Producto[0]['id_producto']}">
        <div class="form-group">
          <label class="violet" for="descripcionForm" >Nombre</label>
          <input type="text" class="form-control" id="descripcionForm" name="nombre" value="{$Producto[0]['nombre']}">
        </div>
        <div class="form-group">
          <label class="text-success" for="tituloForm">Rareza</label>
          <input type="text" class="form-control" id="tituloForm" name="rareza" value="{$Producto[0]['rareza']}">
        </div>
        <div class="form-group">
          <label class="text-success" for="tituloForm">Precio</label>
          <input type="number" class="form-control" id="tituloForm" name="precio"  value="{$Producto[0]['precio']}">
        </div>
        <div class="form-group">
          <label class="violet" for="descripcionForm" >Año</label>
          <input type="number" class="form-control" id="descripcionForm" name="anio_lanzamiento" value="{$Producto[0]['anio_lanzamiento']}">
        </div>
        <div class="form-group">
          <label for="imagenes[]">Imágenes</label>
          <input type="file" class="form-control-file respuestas" id="url[]" placeholder="" name="url[]" multiple>
          </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="completadaForm" name="pintada">
          <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
        </div>
        <div class="separateDiv">
          <select name="id_categoria">
            {foreach from=$Categoria item=cate}

            <option value="{$cate['id_categoria']}">{$cate['clase']}</option>

            {/foreach}
          </select>

        </div>

        {foreach from=$Imagen item=img}
        <div class="col-3 separateDiv">
          <img class="img-fluid separateDiv" src="{$img['url']}" alt="">

          <button type="button" class="btn btn-danger nonDecoration" ><a href="borrarImagen/{$img['id_imagen']}">Eliminar</a></button>
        </div>
        {/foreach}
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
    </div>
  </div>
</div>
{include file="footer.tpl"}
