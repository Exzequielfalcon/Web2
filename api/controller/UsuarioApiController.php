<?php

require_once "Api.php";
require_once "./../model/UsuarioModel.php";

class UsuarioApiController extends Api{

  private $model;

  function __construct(){
    parent::__construct();
    $this->model = new UsuarioModel();
  }

  function getUsuarios($param=null){
    if(isset($param)){
        $id = $param[0];
        $arreglo = $this->model->getUsername($id);
        $data = $arreglo;
    }else{
      $data = $this->model->getAllUsername();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }
}

  ?>
