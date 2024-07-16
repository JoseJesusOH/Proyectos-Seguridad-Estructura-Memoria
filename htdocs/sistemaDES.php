<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");

}else{
    header("location: DES.php");
}

?>