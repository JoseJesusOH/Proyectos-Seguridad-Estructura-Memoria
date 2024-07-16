<?php
$boton1="";
$boton2="";
$boton3="";


if(isset($_POST['botonEncriptar']))$boton1=$_POST['botonEncriptar'];
if(isset($_POST['botonDesencriptar']))$boton2=$_POST['botonDesencriptar'];
if(isset($_POST['botonLimpiar']))$boton3=$_POST['botonLimpiar'];

if($boton1){         
           echo "<script>alert('Usted ha pulsado el boton Encriptar');</script>";
}
if($boton2){
    echo "<script>alert('Usted ha pulsado el boton Desencriptar');</script>";
}
if($boton3){
    echo "<script>alert('Usted ha pulsado el boton Limpiar');</script>";
}
?>