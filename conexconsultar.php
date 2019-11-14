<?php
	
	include("conexion.php");

 	$Codigo = $_POST['Codigo'];
 	$Nombre = $_POST['Nombre'];
 	$Genero = $_POST['Genero'];
 	$Plataforma = $_POST['Plataforma'];
 	$Desarrolladora = $_POST['Desarrolladora'];
 	$Editora = $_POST['Editora'];
 	$Fecha = $_POST['Fecha'];
 	$Descripcion = $_POST['Descripcion'];
 	$Precio = $_POST['Precio'];
 	$Estado = $_POST['Estado'];

 	$sql = "SELECT * FROM juego";

 	if (!mysqli_query($con,$sql)) {
 	 	echo "No ha consultado";
 	}
 	else{
 		echo "Datos";
 	} 

 	header("refresh:2; url=index.php");
?>