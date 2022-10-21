<?php
error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
?>
<?php
if(isset($_POST["enviar"])) {
   require("conexion.php");
   $loginNombre   = $_POST["usuario"];
   $loginPassword = md5($_POST["contrasena"]);
   $_SESSION['user'] = $loginNombre;
   $_SESSION["pagina_inicial_session"] = "";

   $consulta      = "SELECT * FROM usuarios WHERE usuario='$loginNombre' AND clave='$loginPassword'";

   if($resultado = $conn->query($consulta)) {
      while($row = $resultado->fetch_array()) {
         $userok = $row["usuario"];
         $passok = $row["clave"];
         $_SESSION['nombre'] = $row["nombre"];
      }
      $resultado->close();
   }

   $conn->close();

   if(isset($loginNombre) && isset($loginPassword)) {
      if($loginNombre == $userok && $loginPassword == $passok) {
         session_start();
         $_SESSION["logueado"] = TRUE;
         header("Location: index.php");
      } else {
         Header("Location: ../index.php?error=login");
      }
   }
} else {
   echo "ERROR";
   //header("Location: ../index.php");
}
?>