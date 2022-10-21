<?php
//error_reporting(0);

    $servidor = "database";
    $usuario = "root";
    $contrasena = "tiger";
    $based = "dentalcare";
    
    // Creamos la conexión
    $conn = mysqli_connect($servidor, $usuario, $contrasena, $based);

    // Comprobamos la conexión
    if($conn->connect_errno) {
        echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
    }
?>