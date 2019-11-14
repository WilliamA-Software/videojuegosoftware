<!DOCTYPE html>
<html lang="en">
<head>
  <title>Videojuegos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Videojuegos</h1>      
    <p>WIN Gamers</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"> >> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="principal.php">Inicio</a></li>
        <li><a href="agregarjuego.php">Agregar Juegos</a></li>
        <li><a href="consultarjuego.php">Consultar Juegos</a></li>
        <li  class="active"><a href="actualizarjuego.php">Actualizar Juegos</a></li>
        <li><a href="eliminarjuego.php">Eliminar Juegos</a></li>
        <li><a href="somos.php">Quienes Somos</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <h1>AGREGAR VIDEOJUEGO</h1>

	<br>
	<center>
		
		<?php 

			$Codigo = $_REQUEST['Codigo'];
			include('conexion.php');

			$query="SELECT * FROM juego WHERE Codigo='$Codigo'";
			$resultado=$con->query($query);
			$row=$resultado->fetch_assoc();

		?>

	</center>

	<form action="modificar_proceso.php?Codigo=<?php echo $row['Codigo']; ?>" method="POST">	

		<br>
		<br>

		<div class="form-group">
		  <label for="Codigo">Codigo: </label>
		  <input type="text" required class="form-control" id="Codigo" name="Codigo" readonly value="<?php echo $row['Codigo']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Nombre">Nombre: </label>
		  <input type="text" required class="form-control" id="Nombre" name="Nombre" value="<?php echo $row['Nombre']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Genero">Genero: </label>
		  <input type="text" required class="form-control" id="Genero" name="Genero" value="<?php echo $row['Genero']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Plataforma">Plataforma: </label>
		  <input type="text" required class="form-control" id="Plataforma" name="Plataforma" value="<?php echo $row['Plataforma']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Desarrolladora">Desarrolladora: </label>
		  <input type="text" required class="form-control" id="Desarrolladora" name="Desarrolladora" value="<?php echo $row['Desarrolladora']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Editora">Editora: </label>
		  <input type="text" required class="form-control" id="Editora" name="Editora" value="<?php echo $row['Editora']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Fecha">Fecha: </label>
		  <input type="text" class="form-control" id="Fecha" name="Fecha" value="<?php echo $row['Fecha']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Descripcion">Descripcion: </label>
		  <input type="text" required class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $row['Descripcion']; ?>"/>
		</div>

		<div class="form-group">
		  <label for="Precio">Precio: </label>
		  <input type="text" required class="form-control" id="Precio" name="Precio" value="<?php echo $row['Precio']; ?>"/>
		</div>

		<p>SELECCIONE SU ESTADO</p>
		<div class="radio">
		  <label for="Estado"><input type="radio" name="Estado" value="Activo" checked >Activo</label>
		</div>

		<div class="radio">
		  <label for="Estado"><input type="radio" name="Estado" value="Inactivo">Inactivo</label>
		</div>

		<br>

		<input type="submit" class="btn btn-info" name="enviar" value="Agregar Videojuego">

	</form>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">POKEMON ESPADA / ESCUDO</div>
        <div class="panel-body"><img src="./images/pokemon.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Pokémon Espada y Escudo, son dos próximos videojuegos de rol desarrollados por Game Freak y publicados por Nintendo y The Pokémon Company para Nintendo Switch. Serán los primeros juegos de la octava generación de la serie principal de Pokémon.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">PES 2020</div>
        <div class="panel-body"><img src="./images/pes.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">eFootball Pro Evolution Soccer 2020 es un videojuego de simulación de fútbol desarrollado por PES Productions y publicado por Konami. Fue anunciado en el E3 2019 el 11 de junio de 2019.​</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">FORTNITE</div>
        <div class="panel-body"><img src="./images/fortnite.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor general de juego y las mecánicas.</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Copyright 2019 - Derechos Reservados</p>  

</footer>

</body>
</html>


