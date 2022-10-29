<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("conexion.php");
  $id_usuario = $_SESSION['id_usuario'];
  $rol = $_SESSION['id_rol'];
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
          <?php
            if($rol == 2){
              echo '
                <h3>CITAS PROGRAMADAS</h3>
              ';
            } else {
              echo '
                <h3>CITAS PROGRAMADAS</h3>
                <h4>por <i><b>'.$_SESSION['nombre'].'</b></i></h4>
              ';
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div class="col-lg-6 col-sm-10">
          <form>
            <?php
              if ($rol == 2){
                  $consulta = "SELECT hc.id, hc.paciente, hc.fecha_cita, hc.hora_cita, hc.edad 
                          FROM cita hc 
                          JOIN usuarios u ON hc.id_usuario  = u.id
                          WHERE hc.id_estado = 2";
              } else {
                $consulta = "SELECT hc.id, hc.paciente, hc.fecha_cita, hc.hora_cita, hc.edad 
                          FROM cita hc 
                          JOIN usuarios u ON hc.id_usuario  = u.id
                          WHERE hc.id_usuario = $id_usuario and hc.id_estado = 1";
              }

              echo '
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Cod.</th>
                    <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paciente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th colspan="2">Acción</th>
                  </tr>
                </thead>';

              if($resultado = $conn->query($consulta)) {
                while($row = $resultado->fetch_array()) {
                  $paciente   = $row["paciente"];
                  $fecha_cita = $row["fecha_cita"];
                  $hora_cita  = $row["hora_cita"];
                  $edad       = $row["edad"];
                  $cod_cita   = $row["id"];

              if($rol == 2){
                echo '
                  <tbody>
                    <tr>
                      <td align="left">'.$cod_cita.'</td>
                      <td align="left" style="width:50px;">'.$paciente.'</td>
                      <td align="center">'.$edad.'</td>
                      <td align="center">'.$fecha_cita.'</td>
                      <td align="center">'.$hora_cita.'</td>
                      <td>
                        <form action="../sql/cancelar_cita.php" method="post">
                          <input type="hidden" name="idCancelar" value="'.$cod_cita.'">
                          <button type="submit" class="btn btn-danger btn-sm">Cerrar</button>
                        </form>
                      </td>
                      <td>
                        <form action="expediente.php" method="post">
                          <input type="hidden" name="idCita" value="'.$cod_cita.'">
                          <button type="submit" class="btn btn-warning btn-sm">Expediente</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>';
              } else {
                echo '
                  <tbody>
                    <tr>
                      <td align="left">'.$cod_cita.'</td>
                      <td align="left" style="width:50px;">'.$paciente.'</td>
                      <td align="center">'.$edad.'</td>
                      <td align="center">'.$fecha_cita.'</td>
                      <td align="center">'.$hora_cita.'</td>
                      <td>
                        <form action="../sql/cancelar_cita.php" method="post">
                          <input type="hidden" name="idCancelar" value="'.$cod_cita.'">
                          <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                      </td>
                      <td>
                        <form action="../sql/procesar_cita.php" method="post">
                          <input type="hidden" name="idProcesar" value="'.$cod_cita.'">
                          <button type="submit" class="btn btn-success btn-sm">Confirmar</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>';
              }
                }
                $resultado->close();
              }
            ?>
          </form>
        </div>
        <div class="col-lg-3 col-sm-1"></div>
      </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>