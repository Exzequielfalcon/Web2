<?php
require('libs/Smarty.class.php');
/**
 *
 */
class TareasView
{

  function Mostrar($Titulo, $Tareas){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Tareas',$Tareas);
    //$smarty->debugging = true;
    $smarty->display('templates/home.tpl');
  }
}

 ?>
