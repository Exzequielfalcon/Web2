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
  private $SkinModel;

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

  function InsertarProducto(){
      $nombre = $_POST["nombre"];
      $rareza = $_POST["rareza"];
      $precio = $_POST["precio"];
      $año_lanzamiento = $_POST["anio_lanzamiento"]; 
      if(isset($_POST["pintada"])){
        $pintada = 1;
      }else{
        $pintada = 0;
      }
      $id_categoria = $_POST['id_categoria'];
      $this->ProductoModel->InsertarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function InsertarCategoria(){
    $clase= $_POST["clase"];
    $this->CategoriaModel->InsertarCategoria($clase);
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
