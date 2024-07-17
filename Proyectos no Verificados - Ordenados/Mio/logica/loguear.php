<?php
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM usuarios where nombre = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
   mysqli_close($conectar);
  header("location: ../sistemaDES.php");
}else {
  echo "<script>alert('Error usuario o clave incorrecta!');</script>";
  mysqli_close($conectar);
  header("location: ../login.php");
}


?>