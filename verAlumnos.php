<?php

require('modelo/class.coneccion.php');
require('modelo/class.consultas.php');
require('controlador/cargar.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Pacientes Registrados</title>
   <link rel="stylesheet" href="css/bootstrap.min.css" />	
</head>
<body>

     <div class="container">
     <div class=" justify-content-center row">

        <h3 class="display-4"> Pacientes Registrados</h3>
     </div>

     </div>
    <br>

    <div class="container">

        
        <div class="justify-content-center row">
        


           
    
         

            <form>

            <div class="form-group"> 
            <div class="row">

            <input type="text" name="buscar" class="form-control col-6">
            <input type="submit" value="buscar" class="btn btn-secondary col-6" >
	        </div>
           </div>
           </form>
             </div>
         </div>
	<?php             

    if(isset($_GET['buscar']))
    {
     buscar($_GET['buscar']);
    } else{

	  cargar();  
    }
?>
<div class="container">
    <div class="row">
         <div class=" badge badge-success"> <a href="index.html" class="text-white" > Cerrar Sesion </a></div>
    </div>
   
</div>


       <script src="js/pooper.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


