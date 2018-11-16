<?php
require_once  "./view/UsuarioView.php";
require_once  "./view/RegisterView.php";
require_once  "./model/UsuarioModel.php";
require_once "SecuredController.php";
require_once "LoginController.php";

class RegisterController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;
  private $login;

  function __construct()
  {
    $this->view = new RegisterView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
    $this->login = new LoginController();
  }

  function singup(){
    $this->view->mostrarRegister();
  }

  function InsertUsuario(){
      if(isset($_POST['usuario'])){
            //Guardo todos lo sparametros que me envian desdde el formulario
            $usuario = $_POST["usuario"];
            $pass = $_POST["pass"];
            //Encripto la contraseña con bcrypt
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            //le pido al modelo que me agregue al usuario
            $this->model->InsertUsuario($usuario,$hash);
            $this->login->loginAfterSingUp($usuario, $pass);
            header("Location:".homeadmin);
      }
    }

}

 ?>
