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

  function MostrarUser(){
      $Usuarios = $this->model->GetUser();
      $this->view->MostrarUser($this->Titulo, $Usuarios);
  }
  function agregar(){
    //Si no estan vacios
    if((!empty($_POST['usuario'])) && (!empty($_POST['pass']))){
       //Guardo todo los parametros que me envian desde el formulario
       $Usuario = $_POST['usuario'];
       $pass = $_POST['pass'];
       $db_User = $this->model->GetUser($User);
       if(empty($db_User)){
          //Encripto la contraseña con bcrypt
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          //Le pido al modelo que me agregue al usuario
          $this->model->InsertarUsuario($Usuario, $hash);
          header(LOGIN);
       }else{
         $this->UsuarioView->signUp('El usuario ya existe elige otro');
       }
    }else{
      //Si entro acá es porque algun campo no esta lleno
      $this->UsuarioView->signUp('Todos los campos deben estar llenos');
    }
  }

  function NuevoAdm(){
     if(isset($_POST['admin'])){
       $admin =  1;
     }else{
       $admin =  0;
     }
     $this->model->NewAdmin($admin);
   }
  }
 ?>
