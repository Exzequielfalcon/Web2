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

  function InsertarTarea($titulo,$descripcion,$completada){

    $sentencia = $this->db->prepare("INSERT INTO categoria(clase, rareza, pintada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function BorrarTarea($idTarea){

    $sentencia = $this->db->prepare( "delete from categoria where id=?");
    $sentencia->execute(array($idTarea));
  }

  function CompletarTarea($id_tarea){

    $sentencia = $this->db->prepare( "update categoria set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
  }
}


 ?>
