<?php
session_start();
require 'conexion.php';

$userLogin = $_POST['usuario'];
$claveLogin = $_POST['clave'];
if( $userLogin=="" &&   $claveLogin ==""){
  echo "<script>alert('Clave y Usuario de Login Vacio'); window.location = '../login.php';</script>";
}
else if($userLogin=="" ){
echo "<script>alert('Usuario de Login Vacio'); window.location = '../login.php';</script>";
}else if($claveLogin ==""){
echo "<script>alert('Clave de Login Vacio'); window.location = '../login.php';</script>";
}else{
  $pattern = "/^[a-zA-Z0-9_!#$]*$/";
  if(preg_match($pattern,$userLogin ) && preg_match($pattern,$claveLogin)){
    $userHash=hash('sha256',$userLogin);
    $query = "SELECT COUNT(*) as contar FROM usuarios where nombre = '$userHash'";
    $bdconect = mysqli_query($conectar,$query);
    $parametros = mysqli_fetch_array($bdconect);
    if($parametros['contar']>0){
      $encrypt_method = "DES-CBC";
      $key = $userHash;    
      $iv = substr($userHash, 0, 8);
      $bdconect2 = mysqli_query($conectar,"SELECT nombre, clave FROM usuarios WHERE nombre = '$userHash'");
      $fila = mysqli_fetch_array($bdconect2);
            $claveEncriptada=$fila[1];
      $output = openssl_decrypt(base64_decode($claveEncriptada), $encrypt_method, $key, 0, $iv);
      if($claveLogin==$output){
        $_SESSION['username'] = $userLogin;
        mysqli_close($conectar);
        header("location: ../DES.php");
      }else {
       mysqli_close($conectar);
       echo "<script>alert('Cave incorrecta!'); window.location = '../login.php';</script>";
       }
    }else {
     mysqli_close($conectar);
     echo "<script>alert('Nombre de usuario no existente.'); window.location = '../login.php';</script>";
    }

   }else{
    echo "<script>alert('Solo se admiten caracteres alfanuméricos y los siguientes:  _  !  #  $'); window.location = '../login.php';</script>";
   }
  
}


?>
