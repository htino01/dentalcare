<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/mh.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <title>DentalCare El Salvador</title>
  </head>
  <body style="background-color:#3D3D3D;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
          <?php include('layouts/header.html'); ?>          
        </div>
      </div>
    </br>
      <div class="row">
        <div class="col-2 col-sm-3 col-md-4 col-lg-4">
        </div>
        <div class="col-8 col-sm-6 col-md-4 col-lg-4">
          <form method="post" action="php/login.php" name="login" id="form">
            <div class="mb-3">
              <label for="usuario" class="form-label text-gray">Usuario:</label>
              <input type="text" class="form-control" name="usuario" id="usuario" required>
            </div>
            <div class="mb-3">
              <label for="contrasena" class="form-label text-gray">Contraseña:</label>
              <input type="password" class="form-control" name="contrasena" id="contrasena" required>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Ingresar</button><br><br>
          </form>
        </div>
        <div class="col-2 col-sm-3 col-md-4 col-lg-4">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 text-center">
          <?php include('layouts/footer.html'); ?>          
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>