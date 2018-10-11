<?php

define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'add'=> 'TareasController#InsertarSkin',
      'borrar'=> 'TareasController#BorrarSkin',
      'completada'=> 'TareasController#CompletarSkin',
      'login' => 'LoginController#login',
      'verificarLogin'=> 'LoginController#verificarLogin',
      'logout'=> 'LoginController#logout',
      'singup' => 'RegisterController#singup',
      'agregar' => 'RegisterController#agregar'
    ];

}

 ?>
