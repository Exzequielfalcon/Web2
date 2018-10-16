<div class="col-lg 4 container-fluid">
    <div class="row">
        <h1 class="text-white">Parte de Producto</h1>
        <div class="container">
          <h2 class="text-warning">ITEM</h2>
          <form method="post" action="addProducto">
          <div class="form-group">
              <label class="violet" for="descripcionForm">Nombre</label>
              <input type="text" class="form-control" id="descripcionForm" name="nombre">
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
       <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
       <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
     </div>
          <button type="submit" class="btn btn-primary">Itemizar</button>
          </form>
        </div>
    </div>
  </div>
