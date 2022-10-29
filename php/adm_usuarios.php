<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/mh.css">
    <title>DentalCare El Salvador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h3>ADMINISTRAR USUARIOS</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-1"></div>
        <div class="col-lg-6 col-sm-10">
          <form method="post" action="../sql/agregar_usuario.php" name="login" id="form">
            <table class="table">
              <tbody class="table-group-divider">
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Nombre:</td>
                  <td align="left">
                    <input type="text" id="nombre" name="nombre" class="form-label" placeholder="Nombre del usuario" required>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Usuario:</td>
                  <td align="left">
                    <input type="text" id="usuario" name="usuario" class="form-label" placeholder="test@contoso.com" required>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Contraseña:</td>
                  <td align="left">
                    <input type="password" id="contrasena" name="contrasena" class="form-label" placeholder="Contraseña" required>
                    
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Tipo:</td>
                  <td align="left">
                    <div class="form-floating">
                      <select id="tipo" name="tipo" aria-label="Floating label select example">
                        <option value="2">Doctor</option>
                        <option value="3">Paciente</option>
                        <option value="1">Administrador</option>
                      </select>
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
<?php
  $consulta = "SELECT u.id, u.nombre, u.usuario, r.nombre as rol 
               FROM usuarios u 
               JOIN rol r ON u.id_rol = r.id
               WHERE u.id_estado = 1
               ORDER BY u.id";

  echo '
  <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Cod.</th>
                  <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>';

  if($resultado = $conn->query($consulta)) {
    while($row = $resultado->fetch_array()) {
      $iduser = $row["id"];
      $nombre = $row["nombre"];
      $userok = $row["usuario"];
      $tipo   = $row["rol"];

  echo '
  <tbody>
                <tr>
                  <th scope="row">'.$iduser.'</th>
                  <td align="left">'.$nombre.'</td>
                  <td align="left">'.$userok.'</td>
                  <td align="left">'.$tipo.'</td>
                  <td>
                    <form action="../sql/inactivar_usuario.php" method="post">
                      <input type="hidden" name="idInactivar" value="'.$iduser.'">
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                    <!--<a href="" name="delete"><span class="material-symbols-outlined">delete</span></a>-->
                    <!--<a href="" name="edit"><span class="material-symbols-outlined">edit_note</span></a>-->
                  </td>
                </tr>
              </tbody>
  ';
      
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