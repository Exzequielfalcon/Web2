<?php
require('libs/Smarty.class.php');
/**
 *
 */
class SkinView
{

  function Mostrar($Titulo, $Categoria, $Producto, $Tabla, $User, $Clase){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Categoria',$Categoria);
    $smarty->assign('Producto',$Producto);
    $smarty->assign('Tabla',$Tabla);
    $smarty->assign('Clase',$Clase);
    $smarty->assign('User',$User);

    //$smarty->debugging = true;
    print_r($User);
    $smarty->display('templates/home.tpl');
  }
}

 ?>
