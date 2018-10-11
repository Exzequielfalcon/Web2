{include file="Productos.tpl"}
<!DOCTYPE html>
<html lang="en">
<body>
  <div class="col-lg 12 container-fluid">

    <div class="row">
        <h1 class="text-white">Parte de Items</h1>
        <div class="container">
          <h2 class="text-warning">ITEM</h2>
          <form method="post" action="add">
            <div class="form-group">
              <div class="form-group">
                <label class="violet" for="descripcionForm">Nombre</label>
                <input type="text" class="form-control" id="descripcionForm" name="nombre">
              </div>
              <label class="text-success" for="tituloForm">Precio</label>
              <input type="text" class="form-control" id="tituloForm" name="precio">
            </div>
            <div class="form-group">
              <label class="violet" for="descripcionForm">Año</label>
              <input type="text" class="form-control" id="descripcionForm" name="anio_lanzamiento">
            </div>
            {include file="CategoriaAdm.tpl"}
          </form>
        </div>
    </div>
  </div>
</body>
</html>
