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

    {if (isset($smarty.session.User))}
    <div class="d-lg-none">
      <input type="number" name="useradmin" value="1">
    </div>
    <li class="nav-item">
      <a class="nav-link" href="homeadmin">Home</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="logout">Logout</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="NewAdmin">Usuario</a>
    </li>
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
