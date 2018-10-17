<?php
require_once  "./view/SkinView.php";
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

    $this->view = new SkinView();
    $this->UsuarioModel = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }
  function agregar(){
    //Si no estan vacios
    if((!empty($_POST['usuario'])) && (!empty($_POST['pass']))){
       //Guardo todo los parametros que me envian desde el formulario
       $Usuario = $_POST['usuario'];
       $pass = $_POST['pass'];
       $db_User = $this->UsuarioModel->GetUser($User);
       if(empty($db_User)){
          //Encripto la contraseña con bcrypt
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          //Le pido al modelo que me agregue al usuario
          $this->UsuarioModel->InsertarUsuario($Usuario, $hash);
          header(LOGIN);
       }else{
         $this->UsuarioView->signUp('El usuario ya existe elige otro');
       }
    }else{
      //Si entro acá es porque algun campo no esta lleno
      $this->UsuarioView->signUp('Todos los campos deben estar llenos');
    }
  }

}

 ?>
