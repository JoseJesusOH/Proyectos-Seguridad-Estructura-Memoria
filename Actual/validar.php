
<?php
$botonEncriptar="";
$botonDesencriptar="";

if(isset($_POST['botonEncriptar']))$botonEncriptar=$_POST['botonEncriptar'];
if(isset($_POST['botonDesencriptar']))$botonDesencriptar=$_POST['botonDesencriptar'];



if ($botonEncriptar || $botonDesencriptar){
    $clave=$_POST['clave'];
    if($clave==""){
        echo '<script>alert("Clave vacia")</script>';
    }
    else{

        $textArea=$_POST['textoU'];
        if($textArea==""){
            echo '<script>alert("Area de texto vacio")</script>';
        }
        else{
            $output = false;
            $encrypt_method = "DES-CBC";
            $secret_key = $clave;
            $secret_iv = $clave;
            // hash
            $key = hash('sha256', $secret_key);    
            // iv - encrypt method AES-256-CBC expects 16 bytes 
            $iv = substr(hash('sha256', $secret_iv), 0, 8);
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

        }
        

    }
}

?>
