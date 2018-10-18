<?php
require('libs/Smarty.class.php');
/**
 *
 */
class SkinView
{
    function __construct()
    {
      $this->smarty = new Smarty();
    }


  function Mostrar($Titulo, $Categoria, $Producto, $Tabla, $User, $Clase){
    $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->smarty->assign('Categoria',$Categoria);
    $this->smarty->assign('Producto',$Producto);
    $this->smarty->assign('Tabla',$Tabla);
    $this->smarty->assign('Clase',$Clase);
    $this->smarty->assign('User',$User);

    //$smarty->debugging = true;
    $this->smarty->display('templates/home.tpl');
  }

  function MostrarModificarProducto($Titulo, $Producto, $Categoria){
    $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->smarty->assign('Producto',$Producto);
    $this->smarty->assign('Categoria',$Categoria);
    $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->smarty->display('templates/modificarProducto.tpl');
}
}

 ?>
