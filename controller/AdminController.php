<?php
require_once  "./view/SkinView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/CategoriaModel.php";
require_once  "SecuredController.php";

class AdminController extends SecuredController
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
      $this->Clase = $this->getCategoria();
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto, $User, $this->Clase);
      }else{
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, $Tabla, null, $this->Clase);
      }
  }

  function HomeCategoria($Clase){
      $Categoria = $this->CategoriaModel->getCategoria();
      $Producto = $this->ProductoModel->getProducto();
      $this->Clase = $Clase;
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto,$User, $this->Clase);
      }else{
        $this->view->Mostrar($this->Titulo,$Categoria, $Producto, null, $this->Clase);
      }
  }

  function HomeModificarProducto($param){
    $Categoria = $this->CategoriaModel->getCategoria();
    $Producto = $this->ProductoModel->getProductobyId($param[0]);
    $Imagen = $this->ProductoModel->getImagenes($param[0]);
    $this->view->MostrarModificarProducto("Modificar producto", $Producto, $Categoria, $Imagen);
  }

  function HomeModificarCategoria($param){
    $Categoria = $this->CategoriaModel->getCategoriabyId($param[0]);
    $this->view->MostrarModificarCategoria("Modificar categoria", $Categoria);
  }

  function VerMas($param){
    $Categoria = $this->CategoriaModel->getCategoria();
    $Producto = $this->ProductoModel->VerMas($param[0]);
    $Imagen = $this->ProductoModel->getImagenes($param[0]);
    if(isset($_SESSION["User"])){
      $User = $_SESSION["User"];
      $this->view->VerMas("Ver Más", $Producto, $Categoria, $param, $Imagen);
      header("Location:" . '/homeadmin/VerMas/', $param);
    }else {
      $this->view->VerMas("Ver Más", $Producto, $Categoria, $param, $Imagen);
      header("Location:" . '/home/VerMas/',$param);
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
      header(ADMINHOME);
  }

  function ModificarCategoria(){
    $id_categoria = $_POST['id_categoria'];
    $clase = $_POST['clase'];
    $this->CategoriaModel->ModificarCategoria($id_categoria, $clase);
    header(ADMINHOME);
  }

  // //function ModificarProducto(){
  //     $id_producto = $_POST['id_producto'];
  //     $nombre = $_POST["nombre"];
  //     $rareza = $_POST["rareza"];
  //     $precio = $_POST["precio"];
  //     $año_lanzamiento = $_POST["anio_lanzamiento"];
  //     if(isset($_POST["pintada"])){
  //       $pintada = 1;
  //     }else{
  //       $pintada = 0;
  //     }
  //     $imagen = $_POST["imagen"];
  //     if(isset($imagen)){
  //       $this->ProductoModel->InsertarImagen($imagen, $id_producto);
  //     }
  //     $id_categoria = $_POST['id_categoria'];
  //     $this->ProductoModel->ModificarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto);
  //     header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homeadmin');
  // }
  function ModificarProducto(){
      $id_producto = $_POST['id_producto'];
      $nombre = $_POST["nombre"];
      $rareza = $_POST["rareza"];
      $precio = $_POST["precio"];
      $año_lanzamiento = $_POST["anio_lanzamiento"];
      $rutaTempImagenes = $_FILES['url']['tmp_name'];
      if(isset($_POST["pintada"])){
        $pintada = 1;
      }else{
        $pintada = 0;
      }
      $id_categoria = $_POST['id_categoria'];
      $this->ProductoModel->ModificarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto);
      $this->ProductoModel->InsertarImagen($id_producto,$rutaTempImagenes);
      header(ADMINHOME);
  }
  function BorrarImagen($param){
    $this->ProductoModel->BorrarImagen($param[0]);
    header(ADMINHOME);
  }

   function BuscarCategoria(){
      $id = $_POST['categoria'];
      $Clase= $this->ProductoModel->getCategoriaId($id);
      $this->HomeCategoria($Clase);
      if(isset($_SESSION["User"])){
        $User = $_SESSION["User"];
      header(ADMINHOME. '/buscarCategoria');
      }else {
      header(HOME. '/buscarCategoria');

      }
  }

  function getCategoria(){
    $claseid = $this->CategoriaModel->getPrimerCategoria();
    $id = $claseid['id_categoria'];
    $clase= $this->ProductoModel->getCategoriaId($id);
    return $clase;
  }

  function InsertarCategoria(){
    $clase= $_POST["clase"];
    $this->CategoriaModel->InsertarCategoria($clase);
    header(ADMINHOME);

}
  function BorrarCategoria($param){
    $this->CategoriaModel->BorrarCategoria($param[0]);
    header(ADMINHOME);
}
  function BorrarProducto($param){
    $this->ProductoModel->BorrarProducto($param[0]);
    header(ADMINHOME);
  }


}

 ?>
