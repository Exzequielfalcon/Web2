<?php
/**
 *
 */
class CategoriaModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=skin_rocket;charset=utf8'
    , 'root', '');
  }

  function getCategoria(){
      $sentencia = $this->db->prepare( "SELECT * from categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategoriabyId($id){
    $sentencia = $this->db->prepare("SELECT * from categoria where id_categoria=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function ModificarCategoria($id_categoria, $clase){
    $sentencia = $this->db->prepare("update categoria set clase = ? where id_categoria=?");
    $sentencia->execute(array($clase, $id_categoria));
  }


function InsertarCategoria($clase){

  $sentencia = $this->db->prepare("INSERT INTO categoria(clase) VALUES(?)");
  $sentencia->execute(array($clase));
}

function getPrimerCategoria(){
  $sentencia = $this->db->prepare("SELECT * FROM categoria LIMIT 1");
  $sentencia->execute();
  return $sentencia->fetch(PDO::FETCH_ASSOC);
}

function BorrarCategoria($idCategoria){
  $sentencia = $this->db->prepare( "DELETE from producto where id_categoria=?");
  $sentencia->execute(array($idCategoria));
  $sentencia = $this->db->prepare( "DELETE from categoria where id_categoria=?");
  $sentencia->execute(array($idCategoria));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

function InsertarCategoriaa(){
  $this->SkinModel->InsertarCategoria($clase);
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}
}
?>
