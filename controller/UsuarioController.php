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
      $Usuarios = $this->model->GetUsuarios();
      $this->view->MostrarUser($this->Titulo, $Usuarios);
  }

  function NuevoAdm(){
     if(isset($_POST['admin'])){
       $admin =  1;
     }else{
       $admin =  0;
     }
     $id_usuario=$this->model->getUser($_SESSION['User']);
     $this->model->NewAdmin($admin, $id_usuario);
   }
  }
 ?>
