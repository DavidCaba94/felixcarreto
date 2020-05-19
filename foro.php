<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
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
<section id="menu-c">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        
                        <a class="navbar-caption" href="/">FÉLIX CARRETO</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                      <li class="nav-item">
                        <a class="nav-link link" href="/">INICIO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="featured">NOVEDADES</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="portfolio">GALERÍA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="literatura">LITERATURA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="musica">MÚSICA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="about">SOBRE MI</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="foro">FORO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link" href="contacto">CONTACTO</a>
                      </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">https://mobirise.com/</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-x" style="background-image: url(assets/images/foto4.jpg);">

  <div style="margin-top: 15%; margin-left: 20%; width: 60%;">
  <h2 style="color: white;">Deja tu opinión</h2>
    <div style="width: 100%; display: inline-block;">
      <form name="formulario" method="post" action="comentario">
        <input type="text" class="form-control" name="nombre" placeholder="*Nombre (Obligatorio)" style="margin-top: 2px;">
        <input type="text" class="form-control" name="email" placeholder="*Email (Obligatorio)" style="margin-top: 2px;">
        <textarea class="form-control" rows="5" name="comentario" placeholder="*Comentario (Obligatorio)" style="margin-top: 2px;"></textarea>
        <button type="submit" id="enviar" class="btn btn-success" style="margin-top: 2px; background-color: #56D06E;">Enviar</button>
      </form>
    </div>
  </div>

  <div style="margin-top: 5%; margin-left: 20%; width: 60%;">

    <?php
      $conexion = mysqli_connect('db5000417476.hosting-data.io','dbu578774','Felixcarreto2020!','dbs399394'); 
      $tabla = mysqli_query($conexion,"SELECT * FROM comentarios ORDER BY id DESC;"); 
      if (!$tabla) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }
      while ($registro = mysqli_fetch_array($tabla))  {   
      ?> 
       
        <div class="media">
          <div class="media-left">
            <img src="assets/images/user.png" class="media-object" style="width: 60px;">
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color: white;"><?php echo $registro['nombre']; ?></h4>
            <p style="color: white;"><?php echo $registro['comentario']; ?></p>
          </div>
        </div>
        <hr style="background-color: white;">
      <?php 
      } 
      mysqli_free_result($tabla); 
      mysqli_close($conexion); 
    ?>

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