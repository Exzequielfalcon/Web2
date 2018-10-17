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
    $sentencia = $this->db->prepare("select * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getProductobyId($id){
    $sentencia = $this->db->prepare("select * from producto where id_categoria=$id");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, rareza, precio, anio_lanzamiento,pintada,id_categoria) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria));
}

  function GetTabla(){
      $sentencia =$this->db->prepare ("SELECT p.nombre, p.rareza,  p.precio, p.pintada, p.anio_lanzamiento, c.clase FROM producto p, categoria c WHERE c.id_categoria = c.id_categoria");
      $sentencia->execute();
      $temp = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $temp;
  }
}


 ?>
