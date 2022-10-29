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
          <h3>RESERVAR CITA</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div class="col-lg-6 col-sm-10">
          <form method="post" action="../sql/agregar_cita.php" name="login" id="form">
            <table class="table">
              <tbody class="table-group-divider">
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Responsable:</td>
                  <td align="left">
                    <label for="" class="form-label"><?php echo $_SESSION['nombre']; ?></label>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Paciente:</td>
                  <td align="left">
                    <input type="text" id="paciente" name="paciente" class="form-label" placeholder="Nombre del paciente" required>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Edad:</td>
                  <td align="left">
                    <input type="number" id="edad" name="edad" class="form-label" placeholder="Edad del paciente" required>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Fecha:</td>
                  <td align="left"><input type="date" name="fecha" step="1" class="form-label" value="<?php echo date('Y-m-d');?>"></td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Hora:</td>
                  <td align="left">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelect" name="hora" aria-label="Floating label select example">
                        <option selected>Seleccionar</option>
                        <option value="09:00:00">9:00 a.m.</option>
                        <option value="11:00:00">11:00 a.m.</option>
                        <option value="13:30:00">01:30 p.m.</option>
                      </select>
                      <label for="floatingSelect">Horarios Disponible</label>
                    </div>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td align="right"><button type="submit" class="btn btn-primary btn-sm">Guardar</button></td>
                   <td>&nbsp</td>
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