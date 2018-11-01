<?php 


require('../modelo/class.coneccion.php');
require('../modelo/class.consultas.php');

   $mensaje = null;
   $consultas = new Consultas();
   $nombre = $_POST['nombre'];
   $email = $_POST['correo'];
   $carrera = $_POST['carrera'];
   $matricula = $_POST['matricula'];
  


  if(strlen($nombre) > 0 && strlen($email) > 0 && strlen($carrera) > 0 && strlen($matricula) > 0 )
  {

    $mensaje=$consultas->modificarAlumno("nombre",$nombre,$nombre);
    $mensaje=$consultas->modificarAlumno("email",$email,$nombre);
    $mensaje=$consultas->modificarAlumno("carrera",$carrera,$nombre);
    $mensaje=$consultas->modificarAlumno("matricula",$matricula,$nombre);
    echo $mensaje;
    echo "<div> <a href = '../verAlumnos.php'>Ver Pacientes</a> </div> ";
  }else{


  	echo "todos los campos son requeridos";
  }



 ?>