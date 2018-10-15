<?php
require_once "CategoriaModel.php";
require_once "ProductoModel.php";

class SkinModel{
  private $categoria;
  private $productos;

  function __construct(){
    $this->categorias = new CategoriaModel();
    $this->productos  = new ProductoModel();
  }



function InsertarCategoria(){
  $clase = $_POST["clase"];
  $this->categorias->InsertarCategoria($clase);

}


  }
 ?>
