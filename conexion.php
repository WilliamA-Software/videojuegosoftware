<?php
	$hostname = "localhost";
	$user = "root";
	$pass = "";

	$con = mysqli_connect('localhost','root','');

	 	if (!$con) {
	 		echo "No conectado al servidor";
	 	}

	 	if (!mysqli_select_db($con,'videojuegos')) {
	 		echo "Base de datos no seleccionada";
	 	}
?>



 	

 