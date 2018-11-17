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
        $arreglo = $this->model->getProductobyId($id);
        $data = $arreglo;
    }else{
      $data = $this->model->getProducto();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function deleteProducto($param = null){
    if(count($param) == 1){
        $id = $param[0];
        $r =  $this->model->BorrarProducto($id);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertProducto($param = null){

    $o = $this->getJSONData();
    $r = $this->model->InsertarProducto($o->nombre, $o->rareza, $o->precio, $o->anio_lanzamiento, $o->pintada,$o->id_categoria);

    return $this->json_response($r, 200);
  }

  function setProducto($param = null){
    if(count($param) == 1){
      $id = $param[0];
      $o = $this->getJSONData();
      $r = $this->model->ModificarProducto($o->nombre, $o->rareza, $o->precio, $o->anio_lanzamiento, $o->pintada,$o->id_categoria, $id);
      return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>
