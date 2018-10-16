<?php
require('libs/Smarty.class.php');
/**
 *
 */
class SkinView
{

  function Mostrar($Titulo, $Categoria, $Producto, $Tabla, $User){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Categoria',$Categoria);
    $smarty->assign('Producto',$Producto);
    $smarty->assign('Tabla',$Tabla);
    $smarty->assign('User',$User);
    //$smarty->debugging = true;
    $smarty->display('templates/home.tpl');
  }
}

 ?>
