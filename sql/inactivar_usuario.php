<?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      session_start();
      require("../php/conexion.php");

      $id_usuario = $_POST["idInactivar"];

      $sql = "UPDATE usuarios SET id_estado= 0 WHERE id = '$id_usuario'";

      if ($conn->query($sql)) {
            //echo '<script>alert("Cita CANCELADA con Exito!")</script>';
         	  echo "<script>location.href='../php/adm_usuarios.php'</script>";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>