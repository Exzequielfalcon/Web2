<?php

/**
 *
 */
class TareasView
{

  function Mostrar($Titulo, $Tareas){

   ?>

    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title><?php echo $Titulo ?></title>
      </head>
      <body>
        <h1><?php echo $Titulo ?></h1>

        <div class="container">
          <ul class="list-group">
          
            <?php
                foreach($Tareas as $tarea){
                  if($tarea['completada'] == 1){
                    echo '<li class="list-group-item"><s>'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrar/'.$tarea['id'].'">BORRAR</a></li>';
                  }else{
                    echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'<a href="borrar/'.$tarea['id'].'">BORRAR</a> | <a href="completada/'.$tarea['id'].'">COMPLETADA</a></li>';
                  }
                }
             ?>

          </ul>
        </div>


        <div class="container">
          <h2>Formulario</h2>
          <form method="post" action="agregar">
            <div class="form-group">
              <label for="tituloForm">Titulo</label>
              <input type="text" class="form-control" id="tituloForm" name="tituloForm">
            </div>
            <div class="form-group">
              <label for="descripcionForm">Descripcion</label>
              <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
              <label class="form-check-label" for="completadaForm">Completada?</label>
            </div>
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
          </form>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>

  <?php
  }
}

 ?>
