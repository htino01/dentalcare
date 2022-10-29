<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("../php/conexion.php");


  $responsable= $_SESSION['nombre'];
  $paciente	  = $_POST["paciente"];
  $edad       = $_POST["edad"];
  $fecha_cita = $_POST["fecha"];
  $hora_cita  = $_POST["hora"];
  $id_usuario = $_SESSION['id_usuario'];
  $sysfecha = new DateTime();
  $fecha_creacion = $sysfecha->format("Y-m-d");
  $hora_creacion  = $sysfecha->format("H:i:s");

  /*echo $responsable."<br>";
  echo $edad."<br>";
  echo $paciente."<br>";
  echo $fecha_cita."<br>";
  echo $hora_cita."<br>";
  echo $fecha_creacion."<br>";
  echo $hora_creacion."<br>";
  echo $_SESSION['id_usuario'];*/

$sql = "INSERT INTO cita
        (fecha_creacion, hora_creacion, fecha_cita, hora_cita, fecha_reprogramada, paciente, edad, id_usuario, id_estado) 
	  VALUES
        ('$fecha_creacion','$hora_creacion','$fecha_cita','$hora_cita','','$paciente','$edad','$id_usuario','1')";
if ($conn->query($sql)) {
      echo '<script>alert("Cita Creada con Exito!")</script>';
   	  echo "<script>location.href='../php/reservar_cita.php'</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>