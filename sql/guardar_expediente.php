<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("../php/conexion.php");


  $temperatura    = $_POST["temperatura"];
  $idCita         = $_POST["idCita"];
  $presion        = $_POST["presion"];
  $descripcion    = $_POST["descripcion"];

$sql = "INSERT INTO cita_detalle (temperatura, presion, detalle, id_cita) 
		VALUES ($temperatura,'$presion','$descripcion',$idCita)";
if ($conn->query($sql)) {
      echo '<script>alert("Expediente Guardado")</script>';
   	  echo "<script>location.href='../php/consultar_cita.php'</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>