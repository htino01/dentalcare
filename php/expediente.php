<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("conexion.php");
  $idCita = $_POST["idCita"];

  $consulta = "SELECT * FROM cita WHERE id = $idCita";

  if($resultado = $conn->query($consulta)) {
    while($row = $resultado->fetch_array()) {
      $paciente = $row["paciente"];
      $cita     = $row["id"];
    }
    $resultado->close();
  }
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
          <form method="post" action="../sql/guardar_expediente.php" name="login" id="form">
            <table>
              <tbody class="table-group-divider">
                <tr>
                  <td align="left">Responsable:</td>
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
                    <input type="text" id="paciente" name="paciente" class="form-label" value="<?php echo $paciente; ?>" disabled>
                  </td>
                  <td align="left">Fecha:</td>
                  <td align="left"><input type="date" name="fecha" step="1" class="form-label" value="<?php echo date('Y-m-d');?>" disabled></td>
                </tr>
                <tr>
                  <td align="left">Temperatura:</td>
                  <td align="left"><input type="text" id="temperatura" name="temperatura" class="form-label" placeholder="°C" required></td>
                  <td align="left">Cita:</td>
                  <td align="left"><input type="text" id="codigo" name="idCita" class="form-label" value="<?php echo $cita; ?>"></td>
                </tr>
                <tr>

                  <td align="left">Presión:</td>
                  <td align="left"><input type="text" id="presion" name="presion" class="form-label" placeholder="120/80" required></td>
                  <td>&nbsp</td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td align="left">Descripción:</td>
                  <td colspan="3"><textarea class="form-control" id="descripcion" name="descripcion" rows="10" required></textarea></td>
                </tr>
                <tr>
                  <td colspan="4" align="right"><button type="submit" class="btn btn-primary btn-sm">Guardar</button></td>
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