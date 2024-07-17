<?php

$host="localhost"
$usuario="root"
$clave="123456"
$bd="seguridad_usuarios_des"

$conexion=mysqli_connect($host,$usuario,$clave,$bd)

if($conexion){
echo "Conectado correctamente"
}else{
echo "No se pudo conectar"
}
?>