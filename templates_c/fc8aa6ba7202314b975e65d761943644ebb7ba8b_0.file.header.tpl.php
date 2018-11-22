<?php
/* Smarty version 3.1.33, created on 2018-11-22 21:14:11
  from 'C:\xampp\htdocs\Proyectos\Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf70e13cd9e88_01221159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8aa6ba7202314b975e65d761943644ebb7ba8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web2\\templates\\header.tpl',
      1 => 1542917646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf70e13cd9e88_01221159 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
  <base href="//<?php echo $_SERVER['SERVER_NAME'];?>
/Proyectos/web2/">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</title>
</head>

<body>
  <img src="./images/header.jpg" class="img-fluid" alt="">
  <ul class="nav justify-content-end">
    <?php if (!(isset($_SESSION['User']))) {?>
    <button class="admin" hidden="hidden" data="noadmin"  data-id="<?php echo $_SESSION['id_usuario'];?>
" data-nombre="<?php echo $_SESSION['User'];?>
"></button>
    <?php }?>
    <?php if ((isset($_SESSION['User']))) {?>
    <?php if ($_SESSION['admin'] == '1') {?>
    <button class="admin" hidden="hidden" data="admin"  data-id="<?php echo $_SESSION['id_usuario'];?>
" data-nombre="<?php echo $_SESSION['User'];?>
"></button>
    <?php } else { ?>
    <button class="admin" hidden="hidden" data="noadmin" data-nombre="<?php echo $_SESSION['User'];?>
" data-id="<?php echo $_SESSION['id_usuario'];?>
" ></button>
  <?php }?>
    <li class="nav-item">
      <a class="nav-link" href="homeadmin">Home</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="logout">Logout</a>
  </li>
  <?php if ($_SESSION['admin'] === '1') {?>
  <li class="nav-item">
      <a class="nav-link" href="NewAdmin">Usuario</a>
    </li>
  <?php }?>
  <?php } else { ?>
  <li class="nav-item">
    <a class="nav-link" href="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="singup">Sing Up</a>
  </li>
  <?php }?>

</ul>
<?php }
}
