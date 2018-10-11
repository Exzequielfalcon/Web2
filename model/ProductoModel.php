<?php
/**
 *
 */
class ProductoModel
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

  function getProducto(){
    $sentencia = $this->db->prepare( "select * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($titulo,$descripcion,$completada){

    $sentencia = $this->db->prepare("INSERT INTO producto(clase, rareza, pintada) VALUES(?,?,?)");
    $sentencia->execute(array($titulo,$descripcion,$completada));
  }

  function BorrarProducto($idTarea){

    $sentencia = $this->db->prepare( "delete from categoria where id_categoria=?");
    $sentencia->execute(array($idTarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }

  function CompletarProducto($id_tarea){

    $sentencia = $this->db->prepare( "update categoria set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
  function GetTabla(){
  $sentencia =$this->db->prepare ("SELECT c.nombre, c.rareza, c.pintada, c.clase, p.anio_lanzamiento, p.precio FROM producto p, categoria c WHERE c.id_categoria = p.id_producto");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
