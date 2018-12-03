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

    function Mostrar($Titulo, $Categoria, $Producto, $User, $Clase){
      $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->smarty->assign('Categoria',$Categoria);
      $this->smarty->assign('Producto',$Producto);
      $this->smarty->assign('Clase',$Clase);
      $this->smarty->assign('User',$User);
      //$smarty->debugging = true;
      $this->smarty->display('templates/home.tpl');
    }

    function MostrarModificarProducto($Titulo, $Producto, $Categoria, $Imagen){
      $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->smarty->assign('Producto',$Producto);
      $this->smarty->assign('Categoria',$Categoria);
      $this->smarty->assign('Imagen',$Imagen);
      $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$smarty->debugging = true;

      $this->smarty->display('templates/modificarProducto.tpl');
  }
   function MostrarModificarCategoria($Titulo, $Categoria){
    $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->smarty->assign('Categoria',$Categoria);
    $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->smarty->display('templates/modificarCategoria.tpl');
  }
    function VerMas($Titulo, $Producto, $Categoria, $param, $Imagen){
      $this->smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->smarty->assign('Producto',$Producto);
      $this->smarty->assign('Categoria',$Categoria);
      $this->smarty->assign('Imagen',$Imagen);
      $this->smarty->assign('vermas',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$smarty->debugging = true;
      $this->smarty->display('templates/VerMas.tpl');
    }

    function ListaUser($Titulo, $Usuarios){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Usuarios',$Usuarios);
      $this->smarty->assign('NewAdmin',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->smarty->display('templates/ListaUser.tpl');

    }
  }
 ?>
