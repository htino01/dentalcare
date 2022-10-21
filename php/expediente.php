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
          <h3>EXPEDIENTE DE PACIENTE</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-sm-12">
          <form>
            <table>
              <tbody class="table-group-divider">
                <tr>
                  <td align="left">Nombre:</td>
                  <td align="left">
                    <!--<label for="" class="form-label"><?php echo $_SESSION['nombre']; ?></label>-->
                    <input type="text" id="nombre" class="form-label" value="<?php echo $_SESSION['nombre']; ?>" disabled>
                  </td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td align="left">Paciente:</td>
                  <td align="left">
                    <input type="text" id="paciente" class="form-label" placeholder="Nombre">
                  </td>
                  <td align="left">Fecha:</td>
                  <td align="left"><input type="date" name="fecha" step="1" class="form-label" value="<?php echo date('Y-m-d');?>"></td>
                </tr>
                <tr>
                  <td align="left">Temperatura:</td>
                  <td align="left"><input type="text" id="temperatura" class="form-label" placeholder="°C"></td>
                  <td align="left">Codigo:</td>
                  <td><input type="text" id="codigo" class="form-label" value=""></td>
                </tr>
                <tr>

                  <td align="left">Presión:</td>
                  <td align="left"><input type="text" id="Arterial" class="form-label" placeholder="120/80"></td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td align="left">Descripción:</td>
                  <td colspan="3" align="left">
                    <textarea class="form-control" id="descripcion" rows="10"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                  <td align="right">
                    <br>
                    <button type="button" class="btn btn-danger btn-sm">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>