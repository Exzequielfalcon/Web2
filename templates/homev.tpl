<div class="col-lg-12 container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="text-white">Listado de items</h1>
      <br>
      <div class="container">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Clase</th>
              <th scope="col">Rareza</th>
              <th scope="col">Pintada</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Año</th>

            </tr>
          </thead>
          <tbody>

            <tr>
              <form method="post" action="buscarCategoria">
                <div class="form-group">
                   <label for="exampleFormControlSelect1">Selecciona la clase</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                     {foreach from=$Categoria item=cate}
                     <option class="dropdown-item" value="{$cate['id_categoria']}" name="categoria">{$cate['clase']}</a>
                       {/foreach}
                   </select>
                 </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <th scope="row">{$cate['id_categoria']}</th>
              <td>{$cate['clase']}</td>
              {foreach from=$Clase item=pro}
              if(isset($_POST["pintada"])){
              <td>{$pro['rareza']}</td>
              {if $pro['pintada']==0}
              <td>No</td>
              {/if}
              {if $pro['pintada']==1}
              <td>Si</td>
              {/if}
              <td>{$pro['nombre']}</td>
              <td>{$pro['precio']}</td>
              <td>{$pro['anio_lanzamiento']}</td>
              {/foreach}
            </tr>


          </tbody>
        </table>
      </div>
    </div>


    {include file="footer.tpl"}
