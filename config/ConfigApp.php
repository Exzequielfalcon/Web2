<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'agregar'=> 'TareasController#InsertarSkin',
      'borrar'=> 'TareasController#BorrarSkin',
      'completada'=> 'TareasController#CompletarSkin',
      'login' => 'LoginController#login',
      'tareas'=> 'LoginController#verificarLogin',
      'logout'=> 'LoginController#logout'
    ];

}

 ?>
