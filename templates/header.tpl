<!doctype html>
<html lang="en">

<head>
  <base href="//{$smarty.server.SERVER_NAME}/Proyectos/web2/">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>{$Titulo}</title>
</head>

<body>
  <img src="./images/header.jpg" class="img-fluid" alt="">
  <ul class="nav justify-content-end">
    {if !(isset($smarty.session.User))}
    <button class="admin" hidden="hidden" data="noadmin"  data-id="{$smarty.session.id_usuario}" data-nombre="{$smarty.session.User}"></button>
    {/if}
    {if (isset($smarty.session.User))}
    {if $smarty.session.admin == '1'}
    <button class="admin" hidden="hidden" data="admin"  data-id="{$smarty.session.id_usuario}" data-nombre="{$smarty.session.User}"></button>
    {else}
    <button class="admin" hidden="hidden" data="noadmin" data-nombre="{$smarty.session.User}" data-id="{$smarty.session.id_usuario}" ></button>
  {/if}
    <li class="nav-item">
      <a class="nav-link" href="homeadmin">Home</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="logout">Logout</a>
  </li>
  {if $smarty.session.admin === '1'}
  <li class="nav-item">
      <a class="nav-link" href="NewAdmin">Usuario</a>
    </li>
  {/if}
  {else}
  <li class="nav-item">
    <a class="nav-link" href="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="singup">Sing Up</a>
  </li>
  {/if}

</ul>
