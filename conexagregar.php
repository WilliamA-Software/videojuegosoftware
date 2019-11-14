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

 	$sql = "INSERT INTO juego (Codigo,Nombre,Genero,Plataforma,Desarrolladora,Editora,Fecha,Descripcion,Precio,Estado) VALUES ('$Codigo','$Nombre','$Genero','$Plataforma','$Desarrolladora','$Editora','$Fecha','$Descripcion','$Precio','$Estado')";

 	if (!mysqli_query($con,$sql)) {
 	 	echo "No ha insertado";
 	}
 	else{
 		echo "Dato insertado";
 	} 

 	header("refresh:2; url=agregarjuego.php");
?>



 	

