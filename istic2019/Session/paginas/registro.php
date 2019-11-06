<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>lowraider</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <body>

   <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Mexico_road_sign_estacionamiento.svg/1024px-Mexico_road_sign_estacionamiento.svg.png" width=50 height=50><img src="https://www.logolynx.com/images/logolynx/cc/cc7870cf8dca735bd9872c4845939519.jpeg" width=200 height=150><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Mexico_road_sign_estacionamiento.svg/1024px-Mexico_road_sign_estacionamiento.svg.png" width=50 height=50>

      <form action="../funciones/hacerRegistro.php" class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        


        <h1 class="h3 mb-3 font-weight-normal">Registro</h1>

      </div>     
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese Usuario" required autofocus>
        <input type="password" name="contraseña" class="form-control" placeholder="Ingrese Contraseña" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      
    </form> 

    </main>

    <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>