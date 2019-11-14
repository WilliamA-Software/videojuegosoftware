<?php
	
	include("conexion.php");

 	$Codigo = $_REQUEST['Codigo'];
 	

 	$query = "DELETE FROM juego WHERE Codigo='$Codigo'";

 	if (!mysqli_query($con,$query)) {
 	 	echo "No ha eliminado";
 	}
 	else{
 		echo "Dato eliminado";
 	} 

 	header("refresh:2; url=agregarjuego.php");
?>



 	

