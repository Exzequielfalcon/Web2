<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
require_once "SecuredController.php";

class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }



  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];


    $this->model->InsertarUsuario($nombre,$pass);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

    function agregar(){
      if(isset($_POST['usuario'])){
        $lenght = strlen($_POST['usuario']);
          if ($lenght >0){
            //Guardo todos lo sparametros que me envian desdde el formulario
          $usuario = $_POST['usuario'];
          $pass = $_POST['pass'];
          //Encripto la contraseña con bcrypt
          $hash = password_hash($pass,PASSWORD_DEFAULT);
          //le pido al modelo que me agregu al usuario
          $this->UsuarioModel->insert($usuario,$pass);
          header("Location:".HOME);
        }
      }
    }

}

 ?>
