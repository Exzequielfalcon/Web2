<!DOCTYPE html>
  <div class="row">
      <div class="container">
        <form method="post" action="add">
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
