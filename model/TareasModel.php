<?php
/**
 *
 */
class TareasModel
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

  function GetTareas(){
      $sentencia = $this->db->prepare( "select * from categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarSkin($titulo,$descripcion,$completada){

    $sentencia = $this->db->prepare("INSERT INTO categoria(clase, rareza, pintada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function BorrarSkin($idTarea){

    $sentencia = $this->db->prepare( "delete from categoria where id=?");
    $sentencia->execute(array($idTarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }

  function CompletarSkin($id_tarea){

    $sentencia = $this->db->prepare( "update categoria set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}


 ?>
