<?php

require 'conexion.php';

session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$u = $usuario;
$c = SHA1($clave); 
if($u == "" || $_POST['clave'] == null){ 
    echo "Error: usuario y/o clave vacios!!"; 
}else{
    $sql = "SELECT * FROM usuarios WHERE usunombre = '$u' AND usuclave = '$c'";
    if(!$consulta = $conexion->query($sql)){
        echo "ERROR: no se pudo ejecutar la consulta!";
    }else{
        $filas = mysqli_num_rows($consulta);
        if($filas == 0){
            echo "Error: usuario y/o clave incorrectos!!";
        }else{
            $_SESSION['username']=$usuario;
            header('location../index.php');
        }

    }
}


?>