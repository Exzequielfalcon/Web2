<?php

define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'SkinsController#Home',
      'home'=> 'SkinsController#Home',
      'homec' => 'SkinsController#HomeCategoria',
      'addProducto'=> 'SkinsController#InsertarProducto',
      'addCategoria' =>'SkinsController#InsertarCategoria',
      'borrar'=> 'SkinsController#BorrarProducto',
      'borrarCategoria' => 'SkinsController#BorrarCategoria',
      'modificarProducto' => 'SkinsController#HomeModificarProducto',
      'updateProducto'=> 'SkinsController#ModificarProducto',
      'login' => 'LoginController#login',
      'verificarLogin'=> 'LoginController#verificarLogin',
      'logout'=> 'LoginController#logout',
      'singup' => 'RegisterController#singup',
      'agregar' => 'UsuarioController#agregar',
      'buscarCategoria' => 'SkinsController#BuscarCategoria',
      'vermas'=>'SkinsController#VerMas'
    ];

}

 ?>
