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
    $sentencia = $this->db->prepare("SELECT * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategoriaId($id){
    $sentencia = $this->db->prepare("SELECT * from producto where id_categoria=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function VerMas($param){
    $id = $param;
    $sentencia = $this->db->prepare("SELECT * from producto where id_producto=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function BorrarProducto($idProducto){
    $sentencia = $this->db->prepare( "DELETE from producto where id_producto=?");
    $sentencia->execute(array($idProducto));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function getProductobyId2($id){
    $sentencia = $this->db->prepare("SELECT * from producto where id_producto=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, rareza, precio, anio_lanzamiento,pintada,id_categoria) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria));
}

function ModificarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto){
  $sentencia = $this->db->prepare("UPDATE producto set nombre = ?, rareza = ?, precio = ?, anio_lanzamiento = ?, pintada = ?, id_categoria = ? where id_producto=?");
  $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto));
}

}


 ?>
