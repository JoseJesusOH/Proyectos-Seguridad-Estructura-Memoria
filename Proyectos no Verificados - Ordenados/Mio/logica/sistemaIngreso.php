<?php
session_start();
require 'conexion.php';
$user = $_POST['usuarioDos'];
$clave = $_POST['claveDos'];

$sql="INSERT INTO  usuarios(nombre,clave) VALUES ('$user', '$clave')";
$bdconect = mysqli_query($conectar,$sql);
    mysqli_close($conectar);
  header("location: ../login.php");
?>