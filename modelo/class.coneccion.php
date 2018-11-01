<?php


 class Conexion
  {

    private static $user= "root";
    private static $pass= "";
    private static $host= "localhost";
    private static $db="prueba";
  	
    public static function get_conexion(){
  		
         return new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user,self::$pass);

  	}
  }


  ?>