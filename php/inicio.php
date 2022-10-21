<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (isset($_SESSION['user'])){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/mh.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    
    <title>GBM-Media Hosting</title>
  </head>
  <body>
    <div class="container">
      <!-- Inicio SideBar -->
      <!-- Fin SideBar -->
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
          <?php include('../layouts/header01.html'); ?>          
        </div>
      </div>
    </br>
      <div class="row">
        <div class="col-2 col-sm-3 col-md-4 col-lg-4">
        </div>
        <div class="col-8 col-sm-6 col-md-4 col-lg-4">
          <form method="post" action="salir.php" name="logout">
          <?php echo $_SESSION['user']; ?>
          <button type="submit" name="enviar" class="btn btn-primary">Salir</button>
          </form>
        </div>
        <div class="col-2 col-sm-3 col-md-4 col-lg-4">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
          <?php include('../layouts/footer01.html'); ?>          
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>
<?php
} else {
  echo "Favor inicie sesi&oacute;n!!!"; 
}
?>