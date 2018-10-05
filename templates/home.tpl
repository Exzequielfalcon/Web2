{include file="header.tpl"}
{include file="ourhome.tpl"}
<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-5">
      <h1 class="text-white">Listado de items</h1>
      <br>
      <div class="container">
        <ul class="list-group">
          {foreach from=$Tareas item=tarea}
          {if $tarea['pintada'] == 1}
          <li class="list-group-item">{$tarea['clase']} ----- {$tarea['rareza']} -- Pintado<a class="float-right" href="borrar/{$tarea['id_categoria']}">BORRAR</a></li>
          {else}
          <li class="list-group-item">{$tarea['clase']} ----- {$tarea['rareza']}<a class="float-right" href="borrar/{$tarea['id_categoria']}"> BORRAR</a>
            <p class="float-right">|</p> <a class="float-right" href="completada/{$tarea['pintada']}"> COMPLETADA</a>
          </li>
          {/if}
          {/foreach}
        </ul>
      </div>
      <div class="container">
        <h2 class="text-warning">ITEM</h2>
        <form method="post" action="agregar">
          <div class="form-group">
            <label class="text-success" for="tituloForm">Clase</label>
            <input type="text" class="form-control" id="tituloForm" name="tituloForm">
          </div>
          <div class="form-group">
            <label class="violet" for="descripcionForm">Rareza</label>
            <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
            <label class="form-check-label text-danger" for="completadaForm">Pintada?</label>
          </div>
          <button type="submit" class="btn btn-primary">Itemizar</button>
        </form>
      </div>
    </div>


    <div class="col-lg-5">
      <h1 class="text-white">Listado de items</h1>
      <br>
      <div class="container">
        <ul class="list-group">
          {foreach from=$Tareas item=tarea}
          {if $tarea['pintada'] == 1}
          <li class="list-group-item">{$tarea['clase']} ----- {$tarea['rareza']} -- Pintado<a class="float-right" href="borrar/{$tarea['id_categoria']}">BORRAR</a></li>
          {else}
          <li class="list-group-item">{$tarea['clase']} ----- {$tarea['rareza']}<a class="float-right" href="borrar/{$tarea['id_categoria']}"> BORRAR</a>
            <p class="float-right">|</p> <a class="float-right" href="completada/{$tarea['pintada']}"> COMPLETADA</a>
          </li>
          {/if}
          {/foreach}
        </ul>
      </div>

      <div class="container">
        <h2 class="text-warning">ITEM</h2>
        <form method="post" action="agregar">
          <div class="form-group">
            <label class="text-success" for="tituloForm">Clase</label>
            <input type="text" class="form-control" id="tituloForm" name="tituloForm">
          </div>
          <div class="form-group">
            <label class="violet" for="descripcionForm">Rareza</label>
            <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
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
</div>


{include file="footer.tpl"}
