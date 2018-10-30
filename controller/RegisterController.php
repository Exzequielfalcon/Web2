<?php
require_once  "./view/UsuarioView.php";
require_once  "./view/RegisterView.php";
require_once  "./model/UsuarioModel.php";
require_once "SecuredController.php";

class RegisterController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new RegisterView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function singup(){
    $this->view->mostrarRegister();
  }

  function InsertUsuario(){
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    $this->model->InsertUsuario($usuario,$hash);
    session_start();
    $_SESSION["User"] = $User;
    header("Location:".homeadmin);
}
    function agregar(){
      if(isset($_POST['usuarioId'])){
        $lenght = strlen($_POST['usuarioId']);
            //Guardo todos lo sparametros que me envian desdde el formulario
            $usuario = $_POST["usuario"];
            $pass = $_POST["pass"];
            //Encripto la contraseña con bcrypt
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            //le pido al modelo que me agregue al usuario
            $this->model->InsertarUsuario($usuario,$hash);
            header("Location:".HOME);
      }
    }

}

 ?>
