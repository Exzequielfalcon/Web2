{include file="header.tpl"}
 <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>USERS</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Admin</th>
                  <th scope="col">¿Dar Permisos?</th>


                </tr>
              </thead>
              <tbody id="tablaTour" class="text-danger">
                {foreach from=$Usuarios item=usuario}
                 <tr>
                   {if !($usuario['usuario'] == $smarty.session.User)}
                  <td>{$usuario['usuario']}</td>
                  {if $usuario['admin']==1}
                  <td>Si</td>
                  <td><button type="submit" class="btn btn-primary" id="admin"><a href="quitarPermiso/{$usuario['id_usuario']}">Quitar Permisos</a></button></td>
                  {else}
                  <td>No</td>
              <td><button type="submit" class="btn btn-primary" id="admin"><a href="darPermiso/{$usuario['id_usuario']}">Dar Permisos</a></button></td>
                  {/if}
                  {/if}
                </tr>
                 {/foreach}
              </tbody>
            </table>
           </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
{include file="footer.tpl"}
