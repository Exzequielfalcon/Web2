{include file="header.tpl"}
<div class="row">
  <div class="col-5">
    <h1 class="text-white">Listado de items</h1>
    <br>
    <div class="container">
      <table class="table table-hover table-dark">
        <tbody>
          {foreach from=$Producto item=producto}
          <td class="d-none id_prod" data="{$producto['id_producto']}">{$producto['id_producto']}</td>
            <tr>
              <td class="text-danger font-weight-bold">Nombre</td>
              <td>{$producto['nombre']}</td>
            </tr>
            <tr>
              <td  class="text-danger font-weight-bold">Rareza</td>
              <td>{$producto['rareza']}</td>
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Pintada</td>
              {if $producto['pintada']==0}
              <td>No</td>
              {/if}
              {if $producto['pintada']==1}
              <td>Si</td>
              {/if}
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Precio</td>
              <td>${$producto['precio']}</td>
            </tr>
            <tr>
              <td class="text-danger font-weight-bold">Año</td>
              <td>{$producto['anio_lanzamiento']}</td>
            </tr>
            {/foreach}
          </tr>
        </tbody>
      </form>
      </table>
      <button type="button" class="refresh"name="refresh">Refresh</button>
      <section id="comentarios">
      </section>
      <section>
        {if ($smarty.session.User) != null}
        <form method="POST">
          <section class="mt-2 form-group">
            <input class=" form-control comentario inputcomen" placeholder="Comentario" type="text" name="" value="">
            <section class="form-group">
              <label for="exampleFormControlSelect1">Puntaje</label>
               <select class="form-control puntaje"  id="exampleFormControlSelect1">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>
               </select>
             </section>
          <section class="form-group mb-2">
            <button type="button" class="comentar"name="button">Subir Comentario</button>
          </section>
        </form>
        {/if}
      </section>
    </div>
  </div>
  <div class="col-7">
    {foreach from=$Imagen item=img}
    <div class="col-7">
      <img class="img-fluid" src="{$img['url']}" alt="">
    </div>
    {/foreach}
  </div>
</div>
{include file="footer.tpl"}
