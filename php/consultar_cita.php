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
    <?php include 'navbar.php' ?>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h3>CITAS PROGRAMADAS</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div class="col-lg-6 col-sm-10">
          <form>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1"></th>
                  <td>Paola Hernández</td>
                  <td>31-10-2022</td>
                  <td>01:30 p.m.</td>
                </tr>
                <tr>
                  <th scope="row">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2"></th>
                  <td>Edgard Merchez</td>
                  <td>05-11-2022</td>
                  <td>09:00 a.m.</td>
                </tr>
                <tr>
                  <th scope="row">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3"></th>
                  <td>Estefany Cartagena</td>
                  <td>05-11-2022</td>
                  <td>11:00 a.m.</td>
                </tr>
                <tr>
                  <td colspan="4" align="right">
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                    <button type="button" class="btn btn-warning btn-sm">Re-Programar</button>
                    <button type="submit" class="btn btn-success btn-sm">Confirmar</button></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
        <div class="col-lg-3 col-sm-1"></div>
      </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>