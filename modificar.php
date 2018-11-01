
<?php

require('modelo/class.coneccion.php');
require('modelo/class.consultas.php');
require('controlador/seleccionarAlumno.php');
?>


<!DOCTYPE html>
<html>
<head>
	   <link rel="stylesheet" href="css/bootstrap.min.css" />
	<title></title>
	   <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div class="justify-content-center row">
			<div class="col-md-12">
				<h1 class="display-4">Modificar Paciante
                     <hr class="bg-info">
					</h1>
				   
				<div class="from-group row">
					
				
                   <?php

                 seleccionar();

                  ?>
		</div>
		</div>
	</div>
	 <div class="badge badge-danger"><a class="text-white" href="verAlumnos.php"> Regresar <a/> <div/> 
  </div>



</body>
    <script src="js/pooper.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>