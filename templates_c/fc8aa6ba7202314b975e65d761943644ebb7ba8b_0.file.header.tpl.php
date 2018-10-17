<?php
/* Smarty version 3.1.33, created on 2018-10-17 16:24:31
  from 'C:\xampp\htdocs\Proyectos\Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7461f364e66_87217461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8aa6ba7202314b975e65d761943644ebb7ba8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web2\\templates\\header.tpl',
      1 => 1539786269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc7461f364e66_87217461 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
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
    <li class="nav-item">
      <a class="nav-link" href="home">Home</a>
    </li>
    <?php if ((isset($_SESSION['User']))) {?>
  <li class="nav-item">
    <a class="nav-link" href="logout">Logout</a>
  </li>
  <?php } else { ?>
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
