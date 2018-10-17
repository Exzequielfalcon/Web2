<?php
require_once  "./view/SkinView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";
require_once  "SecuredController.php";

class SkinsController extends SecuredController
{
  private $view;
  private $ProductoModel;
  private $CategoriaModel;
  private $Titulo;
  private $SkinModel;

  function __construct()
  {
    parent::__construct();
    $this->view = new SkinView();
    $this->ProductoModel = new ProductoModel();
    $this->CategoriaModel = new CategoriaModel();
    $this->Titulo = "Rocket League";
    $this->Clase = $this->getCategoria();
  }

  function Home(){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $Tabla = $this->ProductoModel->GetTabla();
      $this->Clase = $this->getCategoria();
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $Tabla, $User, $this->Clase);
      }else{
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, $Tabla, null, $this->Clase);
      }
  }

  function HomeCategoria($Clase){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $Tabla = $this->ProductoModel->GetTabla();
      $this->Clase = $Clase;
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $Tabla, $User, $this->Clase);
      }else{
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, $Tabla, null, $this->Clase);
      }
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

   function BuscarCategoria(){
      $id = $_POST['categoria'];
      $Clase= $this->ProductoModel->getProductobyId($id);
      echo print_r($this->Clase);
      $this->HomeCategoria($Clase);
      //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homec');
  }

  function getCategoria(){
    $claseid = $this->CategoriaModel->getPrimerCategoria();
    $id = $claseid['id_categoria'];
    $clase= $this->ProductoModel->getProductobyId($id);
    return $clase;
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
