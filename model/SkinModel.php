<?php
require_once "CategoriaModel.php";
require_once "ProductoModel.php";

class SkinModel{
  private $c;
  private $p;

  function __construct(){
    $this->c = new CategoriaModel();
    $this->p  = new ProductoModel();
  }

  function InsertarSkin($nombre,$año_lanzamiento,$precio,$clase,$rareza,$pintada){
    $this->p->InsertarProducto($nombre,$año_lanzamiento,$precio);
    $this->c->InsertarCategoria($clase,$rareza,$pintada);
  }
}


 ?>
