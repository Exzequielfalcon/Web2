<?php
require_once "CategoriaModel.php";
require_once "ProductoModel.php";

class SkinModel{
  private $categoria;
  private $productos;

  function __construct(){
    $this->categorias = new CategoriaModel();
    $this->productos  = new ProductoModel();
  }



function InsertarCategoria(){
  $clase = $_POST["clase"];
  $this->categorias->InsertarCategoria($clase);

}
function subirImagen($imagen){
  $destino_final = 'images/' . uniqid() . '.jpg';
  move_uploaded_file($imagen, $destino_final);
  return $destino_final;
}
function insertImagenes($id_producto,$rutaTempImagenes){
  foreach ($rutaTempImagenes as $path) {
    $destino = 'images/' . uniqid() . '.jpg';
    move_uploaded_file($path, $destino);
    $sentencia = $this->db->prepare("INSERT INTO imagenes(id_producto, url) VALUES(?,?)");
    $sentencia->execute(array($id_producto,$destino));
  }
}

  }
 ?>
