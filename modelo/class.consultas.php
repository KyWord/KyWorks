<?php 

class Consultas
{

	private $conexion;

	public function __construct()
	{
		$this->conexion = Conexion::get_conexion();
	}

	
	public function insertarAlumno($arg_nombre,$arg_email,$arg_carrera,$arg_matricula)
	{
		// $modelo= new Conexion();
		
		$sql="insert into datos(nombre ,email,carrera,matricula) values(:nombre,:email,:carrera,:matricula)";
		$statement = $this->conexion->prepare($sql);
		$statement->bindParam(':nombre',$arg_nombre);
		$statement->bindParam(':email',$arg_email);
		$statement->bindParam(':carrera',$arg_carrera);
		$statement->bindParam(':matricula',$arg_matricula);	
		if(!$statement){
			return "Error al crear el registro";


		}else{

			$statement->execute();
			return "registro creado correctamente";
			
     
		}
	}

    public function cargarAlumnos()
	{
         $rows =null ;
         // $modelo = new Conexion();
         // $conexion = Conexion::get_conexion();
         $sql= "select * from datos";
         $statement = $this->conexion->prepare($sql);
         $statement -> execute();
         while ($result =$statement ->fetch()){
         	$rows[] = $result;
         }

         return $rows;
	}


	public function eliminarAlumno($arg_nombre)
	{
       $sql= "delete from datos where nombre = :nombre";
       $statement = $this->conexion->prepare($sql);
       $statement->bindParam(':nombre',$arg_nombre);
       if(!$statement)
       {
       	return"Error al eliminar al paciente";

       }else{
       	$statement->execute();
       	return "Paciente eliminado exitosamente";
       }
    }
     


     public function  buscarAlumnos ($arg_nombre)
    {
     	$rows =null ;
         // $modelo = new Conexion();
         // $conexion = Conexion::get_conexion();
     	 $nombre = "%".$arg_nombre."%";
         $sql= "select * from datos where nombre like :nombre";
         $statement = $this->conexion->prepare($sql);
         $statement->bindParam(":nombre", $nombre);
         $statement -> execute();
         while ($result =$statement ->fetch()){
         	$rows[] = $result;
         }

         return $rows;
    }


    public function cargarAlumno ($arg_nombre)
    {
    	 $rows =null ;
         // $modelo = new Conexion();
         // $conexion = Conexion::get_conexion();
         $sql= "select * from datos where nombre= :nombre";
         $statement = $this->conexion->prepare($sql);
         $statement->bindParam(":nombre",$arg_nombre);
         $statement -> execute();
         while ($result =$statement ->fetch()){
         	$rows[] = $result;
         }

         return $rows;
        


    }
    public function modificarAlumno ($arg_campo,$arg_valor,$arg_nombre) 
    {
    	$sql= "update datos set $arg_campo = :valor where nombre = :nombre";
    	$statement = $this->conexion->prepare($sql);
    	$statement->bindParam(':valor',$arg_valor);
		  $statement->bindParam(':nombre',$arg_nombre);	
       if(!$statement){
       	return "error al modificar al Paciente";
       }else{
 
         $statement->execute();
         return "Paciente modificado  exitosamente";

       }


    }	
}


 