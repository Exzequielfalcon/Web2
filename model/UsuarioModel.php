<?php
/**
 *
 */
class UsuarioModel
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
  function GetUsuarios(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUsername($id){
    $sentencia = $this->db->prepare("SELECT usuario from usuario where id_usuario=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAllUsername(){
    $sentencia = $this->db->prepare( "select usuario from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUser($user){
       $sentencia = $this->db->prepare( "SELECT * from usuario where usuario=? limit 1");
       $sentencia->execute(array($user));
       return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }

  function InsertUsuario($usuario, $pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(usuario, pass) VALUES(?,?)");
    $sentencia->execute(array($usuario, $pass));
  }


  function NewAdmin($Admin, $id_usuario){
      $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
      $sentencia->execute(array($Admin, $id_usuario));
    }
}


 ?>
