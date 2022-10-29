<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/mh.css">
    <title>DentalCare El Salvador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'navbar.php'; ?>

    <div class="container text-center">
      <div class="row">
        <div class="col">&nbsp</div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-1"></div>
        <div class="col-md-6 col-sm-10">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" align="center">
                <img src="../img/local01.jpg" class="d-block w-75 h-75 rounded" alt="...">
              </div>
              <div class="carousel-item" align="center">
                <img src="../img/local02.jpg" class="d-block w-75 h-75 rounded" alt="...">
              </div>
              <div class="carousel-item" align="center">
                <img src="../img/local03.gif" class="d-block w-75 h-75 rounded" alt="...">
              </div>
            </div>
          </div>
        <div class="col-md-3 col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col">&nbsp</div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-1"></div>
        <div class="col-md-6 col-sm-10">
          <h3>
            DentalCare
            <small class="text-muted">Bienestar & Salud</small>
            <br><br>
            <font size="4"><p><i>Dental Care</i> es líder en tecnología especializada para efectuar tratamientos dentales. Utilizamos sistemas inteligentes y odontología digital para lograr resolver las necesidades bucodentales de nuestros pacientes de una manera eficiente y cómoda.</p></font>
          </h3>
        <div class="col-md-3 col-sm-1"></div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>