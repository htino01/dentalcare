<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare El Salvador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-light-gray w3-animate-left" style="display:none" id="mySidebar">
      <img src="../img/logo_dentalcare02.png" width="75px">
      <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="reservar_cita.php" class="w3-bar-item w3-button">Reservar Cita</a>
      <a href="consultar_cita.php" class="w3-bar-item w3-button">Consultar Cita</a>
      <a href="expediente.php" class="w3-bar-item w3-button">Expediente</a>
      <a href="adm_usuarios.php" class="w3-bar-item w3-button">Administrar Usuarios</a>
      <a href="salir.php" class="w3-bar-item w3-button w3-hover-text-red">Salir</a>
    </div>

    <div id="main">
      <div class="w3-teal">
        <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
        <img src="../img/logo_dentalcare02.png" width="100px"><font size="5"> El Salvador</font><small> (Bienestar & Salud)</small>
    </div>

    <script>
    function w3_open() {
      document.getElementById("main").style.marginLeft = "25%";
      document.getElementById("mySidebar").style.width = "25%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
    </script>
</body>
</html>