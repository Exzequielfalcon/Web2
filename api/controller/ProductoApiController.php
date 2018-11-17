<?php

require_once "Api.php";
require_once "./../model/ProductoModel.php";

class ProductoApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ProductoModel();
  }

  function getProductos($param = null){

    if(isset($param)){
        $id = $param[0];
        $arreglo = $this->model->getCategoriabyId($id);
        $data = $arreglo;
    }else{
      $data = $this->model->getCategoria();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteCategoria($param = null){
    if(count($param) == 1){
        $id = $param[0];
        $r =  $this->model->BorrarCategoria($id);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertCategoria($param = null){

    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarCategoria($objetoJson->clase);

    return $this->json_response($r, 200);
  }

  function setCategoria($param = null){
    if(count($param) == 1){
      $idTarea = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->model->ModificarCategoria($idTarea, $objetoJson->clase);
      return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>
