{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <form method="post" action="agregar">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuario" id="usuarioId"  placeholder="Enter email">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="passwordId" placeholder="Password">
      </div>
      <div class="">

        {$Message}
      </div>
      <button type="submit" class="btn btn-primary">Sing Up</button>
    </form>
    </div>

{include file="footer.tpl"}
