<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'categoria#GET'=> 'CategoriaApiController#getCategorias',
      'categoria#DELETE'=> 'CategoriaApiController#deleteCategoria',
      'categoria#POST'=> 'CategoriaApiController#InsertCategoria',
      'categoria#PUT'=> 'CategoriaApiController#setCategoria',
      'producto#GET'=> 'ProductoApiController#getProductos'
    ];

}

 ?>
