
<?php
session_start();
  
require 'logica/conexion.php';
$botonRegistro="";

if(isset($_POST['botonRegistro']))$botonRegistro=$_POST['botonRegistro'];

if ($botonRegistro){

$user = $_POST['usuarioDos'];
$clave = $_POST['claveDos'];

$pattern = "/^[a-zA-Z0-9_!#$]*$/";

if($user = "" || $clave = ""){
  echo '<script>alert("Los campos no deben de estar vacíos")</script>';
}else{
  if(preg_match($pattern,$user) && preg_match($pattern,$clave)){
    $sql="INSERT INTO  usuarios(nombre,clave) VALUES ('$user', '$clave')";
    $bdconect = mysqli_query($conectar,$sql);
    mysqli_close($conectar);
    header("location: ../registro.php");
  }else{
    echo '<script>alert("Solo se admiten caracteres alfanuméricos y los siguientes:  _  !  #  $")</script>';
  }
}

}
?>