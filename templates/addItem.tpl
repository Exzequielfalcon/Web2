
  <div class="col-lg 12 container-fluid">

    <div class="row">
        <h1 class="text-white">Parte de Items</h1>
        <div class="container">
          <h2 class="text-warning">ITEM</h2>
          <form method="post" action="addSkin">
              <div class="form-group">
                <label class="violet" for="descripcionForm">Nombre</label>
                <input type="text" class="form-control" id="descripcionForm" name="nombre">
              </div>
              <label class="text-success" for="tituloForm">Precio</label>
              <input type="text" class="form-control" id="tituloForm" name="precio">
            <div class="form-group">
              <label class="violet" for="descripcionForm">Año</label>
              <input type="text" class="form-control" id="descripcionForm" name="año_lanzamiento">
            </div>
            <div class="form-group">
              <label class="text-success" for="tituloForm">Rareza</label>
              <input type="text" class="form-control" id="tituloForm" name="rareza">
            </div>
            <div class="form-group">
              <label class="violet" for="descripcionForm">Clase</label>
              <input type="text" class="form-control" id="descripcionForm" name="clase">
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
