<?php
require('libs/Smarty.class.php');
/**
 *
 */
class SkinView
{

  function Mostrar($Titulo, $Categoria, $Producto){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Categoria',$Categoria);
    $smarty->assign('Producto',$Producto);

    //$smarty->debugging = true;
    $smarty->display('templates/home.tpl');
  }
}

 ?>
