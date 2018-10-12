<?php
require_once  "./view/SkinView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";
require_once  "./model/SkinModel.php";

class SkinsController
{
  private $view;
  private $ProductoModel;
  private $CategoriaModel;
  private $Titulo;
  private $SkinModel;

  function __construct()
  {
    $this->view = new SkinView();
    $this->ProductoModel = new ProductoModel();
    $this->CategoriaModel = new CategoriaModel();
    $this->SkinModel = new SkinModel();
    $this->Titulo = "Rocket League";
  }

  function Home(){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $Tabla = $this->ProductoModel->GetTabla();
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $Tabla);
  }

  function InsertarSkin(){
    $rareza = $_POST["rareza"];
    $clase = $_POST["clase"];
    $nombre = $_POST["nombre"];
    $año_lanzamiento = $_POST["anio_lanzamiento"];
    $precio = $_POST["precio"];
    if(isset($_POST["pintada"])){
      $pintada = 1;
    }else{
      $pintada = 0;
    }
    $this->SkinModel->InsertarSkin($nombre,$año_lanzamiento,$precio,$clase,$rareza,$pintada);
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
