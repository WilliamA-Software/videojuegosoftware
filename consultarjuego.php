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
        <li><a href="index.php">Inicio</a></li>
        <li><a href="agregarjuego.php">Agregar Juegos</a></li>
        <li class="active"><a href="consultarjuego.php">Consultar Juegos</a></li>
        <li><a href="actualizarjuego.php">Actualizar Juegos</a></li>
        <li><a href="eliminarjuego.php">Eliminar Juegos</a></li>
        <li><a href="somos.php">Quienes Somos</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <h1>CONSULTAR VIDEOJUEGO</h1>
  <br>

  <center>
    <table>
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Genero</td>
          <td>Plataforma</td>
          <td>Desarrolladora</td>
          <td>Editora</td>
          <td>Fecha</td>
          <td>Descripcion</td>
          <td>Precio</td>
          <td>Estado</td>
        </tr>

        <?php
          include("conexion.php");
          $query = "SELECT * FROM juego";
          $resultado = $con->query($query);
          while ($row=$resultado->fetch_assoc()) {
          ?>

          <tr>
            <td><?php echo $row['Codigo']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Genero']; ?></td>
            <td><?php echo $row['Plataforma']; ?></td>
            <td><?php echo $row['Desarrolladora']; ?></td>
            <td><?php echo $row['Editora']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><a href="modificar.php?Codigo=<?php echo $row['Codigo']; ?>">Modificar</a></td>
            <td><a href="eliminar_proceso.php?Codigo=<?php echo $row['Codigo']; ?>">Eliminar</a></td>

          </tr>

          <?php

          }

          ?>
      </tbody>
    </table>
  </center>
</div><br>

<br>

<footer class="container-fluid text-center">
  <p>Copyright 2019 - Derechos Reservados</p>  

</footer>

</body>
</html>
