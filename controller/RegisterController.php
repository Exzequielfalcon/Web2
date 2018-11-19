  <?php
  require_once  "./view/UsuarioView.php";
  require_once  "./view/RegisterView.php";
  require_once  "./model/UsuarioModel.php";
  require_once "SecuredController.php";
  require_once "LoginController.php";

  class RegisterController extends SecuredController
  {
    private $view;
    private $model;
    private $Titulo;
    private $login;

    function __construct()
    {
      $this->view = new RegisterView();
      $this->model = new UsuarioModel();
      $this->Titulo = "Lista de Usuario";
      $this->login = new LoginController();
    }

    function singup(){
      $this->view->mostrarRegister();
    }

    function InsertUsuario(){
      //Si no estan vacios
      if((!empty($_POST['usuario'])) && (!empty($_POST['pass']))){
         //Guardo todo los parametros que me envian desde el formulario
         $Usuario = $_POST['usuario'];
         $pass = $_POST['pass'];
         $db_User = $this->model->GetUser($Usuario);
         if($db_User==null){
            //Encripto la contraseña con bcrypt
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            //Le pido al modelo que me agregue al usuario
            $this->model->InsertUsuario($Usuario, $hash);
            $this->login->loginAfterSingUp($Usuario, $pass);
         }else{
           $this->view->mostrarRegister('El usuario ya existe elige otro');
         }
      }else{
        //Si entro acá es porque algun campo no esta lleno
        $this->view->mostrarRegister('Todos los campos deben estar llenos');
      }
    }
  }

   ?>
