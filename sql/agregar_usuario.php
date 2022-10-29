<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  require("../php/conexion.php");


  $nombre     	= $_POST["nombre"];
  $usuario		= $_POST["usuario"];
  $contrasena 	= md5($_POST["contrasena"]);
  $tipo			= $_POST["tipo"];
  //$estado 		= $_POST["estado"];
  $sysfecha = new DateTime();
  $fecha = $sysfecha->format("Y-m-d");

  /*echo $nombre."<br>";
  echo $usuario."<br>";
  echo $contrasena."<br>";
  echo $tipo."<br>";*/

$sql = "INSERT INTO usuarios (nombre, usuario, clave, fecha, id_rol, id_estado) 
		VALUES ('$nombre','$usuario','$contrasena','$fecha',$tipo, 1)";
if ($conn->query($sql)) {
      echo '<script>alert("Usuario Agregado")</script>';
   	  echo "<script>location.href='../php/adm_usuarios.php'</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>