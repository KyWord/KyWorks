<?php 

require('../modelo/class.coneccion.php');
require('../modelo/class.consultas.php');

$mensaje = null;

$nombre= $_POST ['nombre'];
$correo=$_POST ['correo'];
$carrera=$_POST ['carrera'];
$matricula=$_POST['matricula'];

if(strlen($nombre) >0 && strlen($correo) >0 && strlen($carrera) >0 && strlen($matricula) >0)
{
 $consultas = new consultas();
  $mensaje = $consultas->insertarAlumno($nombre,$correo,$carrera,$matricula);
        
			
             $pagina = "../contacto.html";
      Redirect($pagina);
           
}else{


	echo " por favor completa todos los campos";

}


echo $mensaje;
function Redirect($pagina)
{
   header("Location: ".$pagina."", true, 301);
exit();
}



?>


