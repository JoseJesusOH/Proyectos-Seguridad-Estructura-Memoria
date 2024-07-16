<?php
session_start();
libxml_disable_entity_loader(true);
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey = "6Ld6rakfAAAAAHGsnc_L8DoQLiLr7KsJnAgBY2jA";
$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
$atributos = json_decode($respuesta,TRUE);


$pattern = '/^[a-zA-Z0-9_!#$]/';

if(!$atributos['success']){
  ?>
  <?php
  include("../login.php");
  echo '<script>alert("Favor de activar la casilla de: No soy un robot")</script>';
  ?>
  
  <?php
  header("location: ../login.php");
}
if($user = '' || $clave = ''){
  //mostrar mensaje campos vacíos
}else{
  if(preg_match($pattern,$user) && preg_match($pattern,$clave)){
    $query = "SELECT COUNT(*) as contar FROM usuarios where nombre = '$user' and clave = '$clave' ";
    $bdconect = mysqli_query($conectar,$query);
    $parametros = mysqli_fetch_array($bdconect);
    if($parametros['contar']>0){
      $_SESSION['username'] = $user;
      mysqli_close($conectar);
      header("location: ../sistemaDES.php");
    }else{
      echo "<script>alert('Error usuario o clave incorrecta!');</script>";
      mysqli_close($conectar);
      header("location: ../login.php");
    }
  }else{
    //mostrar mensaje con los caracteres que se admiten
  }
}
?>