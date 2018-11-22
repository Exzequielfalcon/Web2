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

   function getImagenes($id){
     $sentencia = $this->db->prepare("SELECT * from imagenes where id_producto=?");
     $sentencia->execute(array($id));
     return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }

   function getComentarios($id_producto=null){
     if (isset($id_producto)) {
       $sentencia = $this->db->prepare("SELECT * from comentario where id_producto=?");
       $sentencia->execute(array($id_producto));
     } else{
       $sentencia = $this->db->prepare("SELECT * from comentario");
       $sentencia->execute();
     }
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
   }

   function BorrarImagen($id){
     $sentencia = $this->db->prepare( "DELETE from imagenes where id_imagen=?");
     $sentencia->execute(array($id));
   }

   function BorrarComentario($id_comentario){
     $sentencia = $this->db->prepare( "DELETE from comentario where id_comentario=?");
     $sentencia->execute(array($id_comentario));
   }

   function getProductobyId($id){
     $sentencia = $this->db->prepare("SELECT * from producto where id_producto=?");
     $sentencia->execute(array($id));
     return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }

   function InsertarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria){
     $sentencia = $this->db->prepare("INSERT INTO producto(nombre, rareza, precio, anio_lanzamiento,pintada,id_categoria) VALUES(?,?,?,?,?,?)");
     $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria));
   }

   function InsertarImagen($url, $id_producto){
     $sentencia = $this->db->prepare("INSERT INTO imagenes(url, id_producto) VALUES(?,?)");
     $sentencia->execute(array($url, $id_producto));
   }

   function InsertComentario($comentario, $puntaje, $id_producto, $user){
     $sentencia = $this->db->prepare("INSERT INTO comentario (comentario, puntaje, id_producto, id_usuario) VALUES (?,?,?,?)");
     $sentencia->execute(array($comentario, $puntaje, $id_producto, $user));
   }

   function ModificarProducto($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto){
     $sentencia = $this->db->prepare("UPDATE producto set nombre = ?, rareza = ?, precio = ?, anio_lanzamiento = ?, pintada = ?, id_categoria = ? where id_producto=?");
     $sentencia->execute(array($nombre, $rareza, $precio, $año_lanzamiento, $pintada,$id_categoria, $id_producto));
   }



 }


 ?>
