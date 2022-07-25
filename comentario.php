<?php

      $nombre=$_POST['nombre'];

      $email=$_POST['email'];

      $comentario=$_POST['comentario'];

	  $check=$_POST['check'];


	  if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["comentario"]) || !$check) {
			echo '<script type="text/javascript">
					alert("Lo sentimos, no se ha insertado su comentario. Todos los campos son obligatorios");
				</script>';
	  } else {
			$conexion = mysqli_connect('db5000417476.hosting-data.io','dbu578774','Felixcarreto2020!','dbs399394'); 

			mysqli_query($conexion,"INSERT INTO comentarios (nombre,email,comentario) VALUES ('".$nombre."','".$email."','".$comentario."')");
	
			mysqli_close($conexion); 
	  }

?>



<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="generator" content="Mobirise v3.12.1, mobirise.com">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="assets/images/pluma.png" type="image/x-icon">

	<meta name="description" content="Página del escritor, fotógrafo y cantante Félix Carreto Martín">

	<title>Félix Carreto</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

	<link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">

	<link rel="stylesheet" href="assets/tether/tether.min.css">

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/dropdown/css/style.css">

	<link rel="stylesheet" href="assets/animate.css/animate.min.css">

	<link rel="stylesheet" href="assets/theme/css/style.css">

	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  </head>

<body>

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-x" style="background-image: url(assets/images/foto4.jpg);">

	<div style="margin-top: 20%; margin-left: 40%; width: 20%; text-align: center;">

		<h1 id="mensaje-confirm" style="color: white;">Gracias por dejar tu opinión</h1>

		<form name="formulario" method="post" action="foro.php">

	        <button type="submit" id="enviar" class="btn btn-success" style="margin-top: 2px; background-color: #56D06E;">Volver al foro</button>

      	</form>

	</div>

</section>

	<script src="assets/web/assets/jquery/jquery.min.js"></script>

	<script src="assets/tether/tether.min.js"></script>

	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/smooth-scroll/smooth-scroll.js"></script>

	<script src="assets/dropdown/js/script.min.js"></script>

	<script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>

	<script src="assets/viewport-checker/jquery.viewportchecker.js"></script>

	<script src="assets/jarallax/jarallax.js"></script>

	<script src="assets/theme/js/script.js"></script>



  

  <input name="animation" type="hidden">



</body>

</html>