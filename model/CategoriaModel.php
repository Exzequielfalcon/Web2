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
      $sentencia = $this->db->prepare( "select * from categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


function InsertarCategoria($clase){

  $sentencia = $this->db->prepare("INSERT INTO categoria(clase) VALUES(?)");
  $sentencia->execute(array($clase));
}

function BorrarCategoria($param){
  $this->CategoriaModel->BorrarCategoria($param[0]);
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

function CompletarCategoria($param){
  $this->CategoriaModel->CompletarCategoria($param[0]);
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

}
function InsertarCategoriaa(){
  $this->SkinModel->InsertarCategoria($clase);
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}
}
?>
