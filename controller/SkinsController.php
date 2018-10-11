<?php
require_once  "./view/SkinView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";

class SkinsController
{
  private $view;
  private $ProductoModel;
  private $CategoriaModel;
  private $Titulo;

  function __construct()
  {
    $this->view = new SkinView();
    $this->ProductoModel = new ProductoModel();
    $this->CategoriaModel = new CategoriaModel();

    $this->Titulo = "Rocket League";
  }

  function Home(){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $Tabla = $this->ProductoModel->GetTabla();
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $Tabla);
  }

  function InsertarCategoria(){
    $titulo = $_POST["rareza"];
    $clase = $_POST["clase"];
    if(isset($_POST["pintada"])){
      $completada = 1;
    }else{
      $completada = 0;
    }
    $this->CategoriaModel->InsertarCategoria($titulo,$clase,$completada);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarProducto($param){
    $this->ProductoModel->BorrarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function CompletarProducto($param){
    $this->ProductoModel->CompletarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}
 ?>
