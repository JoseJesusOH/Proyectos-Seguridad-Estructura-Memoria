<?php
session_start();
require 'conexion.php';

$userRegistro = $_POST['usuarioDos'];
$claveRegistro = $_POST['claveDos'];
if( $userRegistro =="" &&   $claveRegistro ==""){
  echo "<script>alert('Clave y Usuario de Registro Vacio'); window.location = '../login.php';</script>";
}
else if($userRegistro=="" ){
echo "<script>alert('Usuario de Registro Vacio'); window.location = '../login.php';</script>";
}else if($claveRegistro  ==""){
echo "<script>alert('Clave de Registro Vacio'); window.location = '../login.php';</script>";
}else{
  $pattern = "/^[a-zA-Z0-9_!#$]*$/";
  if(preg_match($pattern,$userRegistro) && preg_match($pattern,$claveRegistro)){
    
       
    $userHash=hash('sha256', $userRegistro);

    $query = "SELECT COUNT(*) as contar FROM usuarios where nombre = '$userHash'";
  $bdconect = mysqli_query($conectar,$query);
  $parametros = mysqli_fetch_array($bdconect);
  if($parametros['contar']>0){
     mysqli_close($conectar);
     echo "<script>alert('El nombre de usuario ya se encuentra.'); window.location = '../login.php';</script>";
  }else {
    $encrypt_method = "DES-CBC";
    $key = $userHash;    
    $iv = substr($userHash, 0, 8);
        $output = openssl_encrypt($claveRegistro, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        $claveEncriptada=$output;
    $sql="INSERT INTO  usuarios(nombre,clave) VALUES ('$userHash', '$claveEncriptada')";
    $bdconect = mysqli_query($conectar,$sql);
        mysqli_close($conectar);
        echo "<script>alert('Registro exitoso.'); window.location = '../index.html';</script>";
  }
 
  }else{
    echo "<script>alert('Solo se admiten caracteres alfanuméricos y los siguientes:  _  !  #  $'); window.location = '../login.php';</script>";
  }

}

?>