<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'agregar'=> 'TareasController#InsertTarea',
      'borrar'=> 'TareasController#BorrarTarea',
      'completada'=> 'TareasController#CompletarTarea'
    ];

}

 ?>
