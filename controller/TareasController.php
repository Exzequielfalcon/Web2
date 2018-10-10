<?php
require_once  "./view/TareasView.php";
require_once  "./model/TareasModel.php";

class TareasController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
    $this->Titulo = "Rocket League";
  }

  function Home(){
      $Categoria = $this->model->getCategoria();
      $Producto = $this->model->getProducto();
      $this->view->Mostrar($this->Titulo, $Categoria, $Producto);
  }

  function InsertarSkin(){
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];

    if(isset($_POST["completadaForm"])){
      $completada = 1;
    }else{
      $completada = 0;
    }

    $this->model->InsertarSkin($titulo,$descripcion,$completada);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarSkin($param){
    $this->model->BorrarSkin($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function CompletarSkin($param){
    $this->model->CompletarSkin($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}

 ?>
