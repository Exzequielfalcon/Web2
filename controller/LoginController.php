<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";
require_once  "./controller/SecuredController.php";

class LoginController
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

  function loginAfterSingUp($User, $pass){
      session_start();
      $_SESSION["User"] = $User;
      header("Location:".homeadmin);
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
              $_SESSION["admin"] = $db_User[0]["admin"];
              $_SESSION["id_usuario"] = $db_User[0]["id_usuario"];
              header("Location:".homeadmin);
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
