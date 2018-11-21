{include file="header.tpl"}
<div class="row">
<div class="col-lg-12">
    <div class="container-fluid">
      <h1>Modificar producto {$Categoria[0]['clase']} </h1>
      <h2 class="text-warning">ITEM</h2>
      <form method="post" action="{$home}/updateCategoria">
        <input type="hidden" class="form-control" id="idForm" name="id_categoria" value="{$Categoria[0]['id_categoria']}">
        <div class="form-group">
          <label class="violet" for="descripcionForm" >Nombre</label>
          <input type="text" class="form-control" id="descripcionForm" name="clase" value="{$Categoria[0]['clase']}">
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
    </div>
  </div>
</div>
{include file="footer.tpl"}
