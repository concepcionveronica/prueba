<?php
$nombre=$_POST["nombre"];
$clave=$_POST["clave"];

//print($nombre);
//echo $clave;
/*Incluye archivo de conexion*/
include 'conexion.php';

/*Abre conexion a BD*/
$conexion = conectar();
mysqli_set_charset($conexion, "utf8");

/**/
$sql = "INSERT INTO usuario (nombre,clave) VALUES ('$nombre','$clave')";   
if (mysqli_query($conexion, $sql)) {
      //echo "Agregado con éxito";
      header("Location: ../index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

 ?>