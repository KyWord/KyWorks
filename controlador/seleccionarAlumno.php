<?php



function seleccionar ()
{

  if(isset($_GET['nombre']))
  {
    $consultas = new Consultas();
    $nombre = $_GET['nombre'];
    $filas = $consultas->cargarAlumno($nombre);


    foreach ($filas as $fila) {
    	echo '
      



   
       <form class="col-12" action="controlador/modificarAlumno.php" method="POST">
       
       <label for="nombre" class="form-control col-12"> Matricula del Paciente:'.$fila['nombre'].'</label>
      <hr class="bg-primary">
      
      <br/>
       <label for="correo" class="form-control-label">Direccion de correo</label>
       
       <input type="email" name="correo"  class="form-control" value="'.$fila['email'].'">

       

       <label for="correo" class="form-control-label">Nombre</label>
       
       <input type="text" name="carrera" class="form-control"  value="'.$fila['carrera'].'" >

       
       <label for="correo" class="form-control-label">Apellido</label>
       
       <input type="text" name="matricula" class="form-control" value="'.$fila['matricula'].'"  >
       
       <input type="hidden" name="nombre"   value="'.$nombre.'">
       <br>
       <div class="row"> 
         <input  class="btn btn-danger" type="submit" value="Modificar Paciente">
        
       <div/>
       
       
       
       </form>
  

         ';

    	
       }// fin foreach

    

    }//fin if


}//fin funcion





?>
