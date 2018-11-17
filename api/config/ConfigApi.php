<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'skins#GET'=> 'CategoriaApiController#getCategorias',
      'skins#DELETE'=> 'CategoriaApiController#deleteCategoria',
      'skins#POST'=> 'CategoriaApiController#InsertCategoria',
      'skins#PUT'=> 'CategoriaApiController#setCategoria'
    ];

}

 ?>
