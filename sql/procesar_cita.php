<?php

      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      session_start();
      require("../php/conexion.php");


      $idProcesar = $_POST["idProcesar"];

      //echo $idProcesar."<br>";

      $sql = "UPDATE cita SET id_estado= 2 WHERE Id = '$idProcesar'";

      if ($conn->query($sql)) {
            echo '<script>alert("Cita CONFIRMADA con Exito!")</script>';
              echo "<script>location.href='../php/consultar_cita.php'</script>";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>