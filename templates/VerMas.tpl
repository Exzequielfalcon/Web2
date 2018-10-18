{include file="header.tpl"}
<div class="row">
  <div class="col-lg-12">
    <h1 class="text-white">Listado de items</h1>
    <br>
    <div class="container">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Rareza</th>
            <th scope="col">Pintada</th>
            <th scope="col">Precio</th>
            <th scope="col">Año</th>
          </tr>
        </thead>
        <tbody>
          <form method="post" action="vermas">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Selecciona la clase</label>
              <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                {foreach from=$Categoria item=cate}
                <option class="dropdown-item" value="{$cate['id_categoria']}" name="categoria">{$cate['clase']}</a>
                  {/foreach}
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>
          <tr>
            {foreach from=$Producto item=producto}
            <td>{$producto['nombre']}</td>
            <td>{$producto['rareza']}</td>
            {if $producto['pintada']==0}
            <td>No</td>
            {/if}
            {if $producto['pintada']==1}
            <td>Si</td>
            {/if}
            <td>{$producto['precio']}</td>
            <td>{$producto['anio_lanzamiento']}</td>

            {/foreach}

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
