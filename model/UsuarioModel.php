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

  function GetUsuario(){

      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertUsuario($usuario, $pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(usuario, pass) VALUES(?,?)");
    $sentencia->execute(array($usuario, $pass));
  }

  function GetUser($User){
      $sentencia = $this->db->prepare( "select * from usuario where usuario=? limit 1");
      $sentencia->execute(array($User));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function NewAdmin($Admin){
      $sentencia = $this->db->prepare("INSERT INTO usuario(admin) VALUES(?)");
      $sentencia->execute(array($Admin));
    }
}


 ?>
