<?php
class RegisterView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarRegister($message = ''){
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Titulo',"Sing Up"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->display('templates/singup.tpl');
  }
}

 ?>
