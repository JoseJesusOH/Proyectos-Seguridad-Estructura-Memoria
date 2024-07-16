
<?php
session_start();
libxml_disable_entity_loader(true);
require 'conexion.php';
$user = $_POST['usuarioDos'];
$clave = $_POST['claveDos'];
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey = "6Ld6rakfAAAAAHGsnc_L8DoQLiLr7KsJnAgBY2jA";
$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
$atributos = json_decode($respuesta,TRUE);


$pattern = '/^[a-zA-Z0-9_!#$]/';

if(!$atributos['success']){
  ?>
  <?php
  include("../registro.php");
  echo '<script>alert("Favor de activar la casilla de: No soy un robot")</script>';
  ?>
  
  <?php
  header("location: ../registro.php");
}

if($user = '' || $clave = ''){
  //mostrar mensaje campos vacíos
}else{
  if(preg_match($pattern,$user) && preg_match($pattern,$clave)){
    $sql="INSERT INTO  usuarios(nombre,clave) VALUES ('$user', '$clave')";
    $bdconect = mysqli_query($conectar,$sql);
    mysqli_close($conectar);
    header("location: ../login.php");
  }else{
    //mostrar mensaje con los caracteres que se admiten
  }
}
?>