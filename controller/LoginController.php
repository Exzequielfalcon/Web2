<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";
require_once  "./controller/SecuredController.php";

class LoginController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }
  function InsertUsuario(){
    if(isset($_POST['usuarioId'])){
      $lenght = strlen($_POST['usuarioId']);
        if ($lenght >0){
          //Guardo todos lo sparametros que me envian desdde el formulario
          $usuario = $_POST['usuarioId'];
          $pass = $_POST['passwordId'];
          //Encripto la contraseña con bcrypt
          $hash = password_hash($pass,PASSWORD_DEFAULT);
          //le pido al modelo que me agregu al usuario
          $this->UsuarioModel->insert($usuario,$pass);
          header("Location:".HOME);
      }
    }
  }
  function verificarLogin(){
      $User = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $db_User = $this->model->getUser($User);
      if(isset($db_User)){
          if (password_verify($pass, $db_User[0]["pass"])){
              //mostrar lista de tareas
              session_start();
              $_SESSION["User"] = $User;
              header("Location:".HOME);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usario");
      }

  }


}

 ?>
