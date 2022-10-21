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
          <form>
            <table class="table">
              <tbody class="table-group-divider">
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Nombre:</td>
                  <td align="left">
                    <label for="" class="form-label"><?php echo $_SESSION['nombre']; ?></label>
                    <!--<input type="text" id="nombre" class="form-label" value="<?php echo $_SESSION['nombre']; ?>">-->
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Paciente:</td>
                  <td align="left">
                    <input type="text" id="nombre" class="form-label" placeholder="Nombre del paciente">
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Usuario:</td>
                  <td align="left">
                    <input type="text" id="usuario" class="form-label" placeholder="test@contoso.com">
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Tipo:</td>
                  <td align="left">
                    <div class="form-floating">
                      <select id="tipo" aria-label="Floating label select example">
                        <option value="1">Doctor</option>
                        <option value="2">Paciente</option>
                        <option value="3">Usuario de Sistema</option>
                      </select>
                    </div>
                  </td>
                  <td>&nbsp</td>
                </tr>
                <tr>
                  <td>&nbsp</td>
                  <td align="right">Modulo:</td>
                  <td align="left">
                    <div class="form-floating">
                      <select id="tipo" aria-label="Floating label select example">
                        <option value="1">Reservar Cita</option>
                        <option value="2">Consultar Cita</option>
                        <option value="3">Expediente</option>
                        <option value="3">Administrar Usuarios</option>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td align="left">Héctor Tino</td>
                  <td align="left">ia.htino@ufg.edu.sv</td>
                  <td align="left">Usuario de Sistema</td>
                  <td>
                    <span class="material-symbols-outlined">delete</span>
                    <span class="material-symbols-outlined">edit_note</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td align="left">Estefany Hernandez</td>
                  <td align="left">@ufg.edu.sv</td>
                  <td align="left">Paciente</td>
                  <td>
                    <span class="material-symbols-outlined">delete</span>
                    <span class="material-symbols-outlined">edit_note</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td align="left">Edgard Merchez</td>
                  <td align="left">@ufg.edu.sv</td>
                  <td align="left">Doctor</td>
                  <td>
                    <span class="material-symbols-outlined">delete</span>
                    <span class="material-symbols-outlined">edit_note</span>
                  </td>
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