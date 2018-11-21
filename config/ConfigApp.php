<?php
define('ADMINHOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homeadmin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'SkinsController#Home',
      'home' =>'SkinsController#Home',
      'homeadmin'=> 'AdminController#Home',
      'addProducto'=> 'AdminController#InsertarProducto',
      'addCategoria' =>'AdminController#InsertarCategoria',
      'borrar'=> 'AdminController#BorrarProducto',
      'borrarCategoria' => 'AdminController#BorrarCategoria',
      'modificarProducto' => 'AdminController#HomeModificarProducto',
      'modificarCategoria' => 'AdminController#HomeModificarCategoria',
      'updateProducto'=> 'AdminController#ModificarProducto',
      'updateCategoria'=> 'AdminController#ModificarCategoria',
      'login' => 'LoginController#login',
      'verificarLogin'=> 'LoginController#verificarLogin',
      'logout'=> 'LoginController#logout',
      'singup' => 'RegisterController#singup',
      'agregar' => 'RegisterController#InsertUsuario',
      'buscarCategoria' => 'SkinsController#BuscarCategoria',
      'buscarCategoriaAdm' => 'AdminController#BuscarCategoria',
      'vermas'=>'SkinsController#VerMas',
      'vermasadmin'=>'AdminController#VerMas',
      'NewAdmin'=>'UsuarioController#MostrarUser',
      'borrarImagen' => 'AdminController#BorrarImagen',
      'quitarPermiso' => 'UsuarioController#quitarPermiso',
      'darPermiso' => 'UsuarioController#darPermiso'
    ];

}

 ?>
