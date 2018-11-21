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

  function darPermiso($param){
     $Admin= 1;
     $this->model->NewAdmin($Admin, $param[0]);
     header(ADMINHOME);
   }

   function quitarPermiso($param){
     $Admin= 0;
     $this->model->NewAdmin($Admin, $param[0]);
     header(ADMINHOME);

   }
  }
 ?>
