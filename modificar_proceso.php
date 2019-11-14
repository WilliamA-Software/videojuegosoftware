<?php
	
	include("conexion.php");

 	$Codigo = $_REQUEST['Codigo'];
 	$Nombre = $_POST['Nombre'];
 	$Genero = $_POST['Genero'];
 	$Plataforma = $_POST['Plataforma'];
 	$Desarrolladora = $_POST['Desarrolladora'];
 	$Editora = $_POST['Editora'];
 	$Fecha = $_POST['Fecha'];
 	$Descripcion = $_POST['Descripcion'];
 	$Precio = $_POST['Precio'];
 	$Estado = $_POST['Estado'];

 	$query = "UPDATE juego SET Nombre = '$Nombre', Genero = '$Genero', Plataforma = '$Plataforma', Desarrolladora = '$Desarrolladora',Editora = '$Editora',Fecha = '$Fecha', Descripcion = '$Descripcion',Precio = '$Precio',Estado = '$Estado' WHERE Codigo='$Codigo'";

 	if (!mysqli_query($con,$query)) {
 	 	echo "No ha insertado";
 	}
 	else{
 		echo "Dato insertado";
 	} 

 	header("refresh:2; url=agregarjuego.php");
?>



 	

