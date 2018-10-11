{include file="Productos.tpl"}
<!DOCTYPE html>
<html lang="en">
<body>
  <div class="col-lg-12 container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="text-white">Parte de Productos</h1>
        <div class="container">
          <h2 class="text-warning">ITEM</h2>
          <form method="post" action="add">
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
            <button type="submit" class="btn btn-primary">Itemizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
