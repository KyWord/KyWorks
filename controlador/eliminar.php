<?php
require('../modelo/class.coneccion.php');
require('../modelo/class.consultas.php');

if(isset($_GET ['nombre']))
{
  $nombre= $_GET['nombre'];
  $consultas= new Consultas();
  $mensaje = $consultas-> eliminarAlumno($nombre);
  echo $mensaje;
  echo"<div><a href ='../verAlumnos.php'>Volver a Pacientes Registrados</a></div>";

}


?>