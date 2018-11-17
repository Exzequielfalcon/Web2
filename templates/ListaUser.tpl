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
                  <th scope="col">¿Tiene Permisos?</th>


                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$Usuarios item=usuario}
                 <tr>
                  <td>{$usuario['usuario']}</td><td>{$usuario['admin']}</td><td> <form class="form" action="NewAdmin" method="post">
                    <button type="submit" class="btn btn-primary" id="admin">Dar Permisos</button></td>
                  </form>

                </tr>
                 {/foreach}
              </tbody>
            </table>
           </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
{include file="footer.tpl"}
