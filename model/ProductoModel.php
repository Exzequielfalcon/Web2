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

  function InsertarProducto($nombre,$año_lanzamiento,$precio){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre,rareza,pintada,precio,año_lanzamiento) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombre,$rareza,$pintada,$precio,$año_lanzamiento,$precio));
  }

  function BorrarProducto($idCategoria){

    $sentencia = $this->db->prepare( "delete from producto where id_categoria=?");
    $sentencia->execute(array($idCategoria));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }

  function GetTabla(){
      $sentencia =$this->db->prepare ("SELECT p.nombre, p.rareza, p.pintada, c.clase, p.anio_lanzamiento, p.precio FROM producto p, categoria c WHERE c.id_categoria = c.id_categoria");
      $sentencia->execute();
      $temp = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $temp;
  }
}


 ?>
