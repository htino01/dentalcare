<?php

      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      session_start();
      require("../php/conexion.php");


      $idCancelar = $_POST["idCancelar"];

      //echo $idCancelar."<br>";

      $sql = "UPDATE cita SET id_estado= 0 WHERE Id = '$idCancelar'";

      if ($conn->query($sql)) {
            echo '<script>alert("Cita CANCELADA con Exito!")</script>';
         	  echo "<script>location.href='../php/consultar_cita.php'</script>";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>