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
  private $SESSION;
  function __construct()
  {
    $this->view = new SkinView();
    $this->ProductoModel = new ProductoModel();
    $this->CategoriaModel = new CategoriaModel();
    $this->Titulo = "Rocket League";
    $this->Clase = $this->getCategoria();
    $this->SESSION = session_start();

  }

  function Home(){
      $SESSION;

      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $this->Clase = $this->getCategoria();
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, null, $this->Clase);
      }

  function HomeCategoria($Clase){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $this->Clase = $Clase;
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $User, $this->Clase);
      }else{
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, null, $this->Clase);
      }
  }

  function VerMas($param){
    $Categoria = $this->CategoriaModel->getCategoria();
    $Producto = $this->ProductoModel->VerMas($param[0]);
    $Imagen = $this->ProductoModel->getImagenes($param[0]);
    $this->view->VerMas("Ver Más", $Producto, $Categoria, $param, $Imagen);
  }
   function BuscarCategoria(){
      $id = $_POST['categoria'];
      $Clase= $this->ProductoModel->getCategoriaId($id);
      $this->HomeCategoria($Clase);
  }

  function getCategoria(){
    $claseid = $this->CategoriaModel->getPrimerCategoria();
    $id = $claseid['id_categoria'];
    $clase= $this->ProductoModel->getCategoriaId($id);
    return $clase;
  }


function agregarImagen(){
  $id_producto = $_POST["id_producto"];
  $rutaTempImagenes = $_FILES['url']['tmp_name'];
  header(HOME);

}
}
 ?>
