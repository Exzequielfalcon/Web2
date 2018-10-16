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
  function InsertarProducto($nombre, $rareza, $precio, $año_lanzamiento){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, rareza, precio, anio_lanzamiento) VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento));
}

  function BorrarProducto($idProducto){

    $sentencia = $this->db->prepare( "delete from producto where id_categoria=?");
    $sentencia->execute(array($idCategoria));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }

  function GetTabla(){
      $sentencia =$this->db->prepare ("SELECT p.nombre, p.rareza,  p.precio, p.pintada, p.anio_lanzamiento, c.clase FROM producto p, categoria c WHERE c.id_categoria = c.id_categoria");
      $sentencia->execute();
      $temp = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $temp;
  }
}


 ?>
