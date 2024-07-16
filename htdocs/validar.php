<?php
define('CLAVE','6LfmwIIfAAAAADAze7s4bJyBbM86OijgRCwLZIE_');
$botonEncriptar="";
$botonDesencriptar="";

$token = $_POST['token'];
$action = $_POST['action'];

$cu = curl_init();
curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cu, CURLOPT_POST, 1);
curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cu);
curl_close($cu);

$datos = json_decode($response, true);

print_r($datos);

if($datos['success'] == 1 && $datos['score'] >= 0.5){
    if($datos['action'] == 'validarUsuario'){
        
    }
    
    } else {
    echo "ERES UN ROBOT";
}

if(isset($_POST['botonEncriptar']))$botonEncriptar=$_POST['botonEncriptar'];
if(isset($_POST['botonDesencriptar']))$botonDesencriptar=$_POST['botonDesencriptar'];

$output = false;
$encrypt_method = "AES-256-CBC";
$secret_key = 'xxxxxxxxxxxxxxxxxxxxxxxx';
$secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
// hash
$key = hash('sha256', $secret_key);    
// iv - encrypt method AES-256-CBC expects 16 bytes 
$iv = substr(hash('sha256', $secret_iv), 0, 16);
if ($botonEncriptar) {
    $textArea=$_POST['textoU'];
    $output = openssl_encrypt($textArea, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
    echo"$output";
} 
if($botonDesencriptar) {
    $textArea=$_POST['textoU'];
    $output = openssl_decrypt(base64_decode($textArea), $encrypt_method, $key, 0, $iv);
    echo"$output";
}


?>