<?php
	function conectar(){
		$servername = "localhost";
		$database = "prueba";
		$username = "root";
		$password = "";
		
	    $conexion = mysqli_connect($servername, $username, $password, $database) 
	        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

	    return $conexion;
	}
	function desconectar($conexion){
	    $close = mysqli_close($conexion) 
	        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

	    return $close;
	}
 ?>