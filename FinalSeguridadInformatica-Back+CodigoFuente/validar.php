
<?php
$botonEncriptar="";
$botonDesencriptar="";
if(isset($_POST['botonEncriptar']))$botonEncriptar=$_POST['botonEncriptar'];
if(isset($_POST['botonDesencriptar']))$botonDesencriptar=$_POST['botonDesencriptar'];



if ($botonEncriptar){
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
            $pattern = "/^[A-Za-z0-9-áéíóúÁÉÍÓÚ.,\s]+$/";
            if( preg_match($pattern,$textArea)){
                $output = false;
                $encrypt_method = "DES-CBC";
                $secret_key = $clave;
                $secret_iv = $clave;
                $key = hash('sha256', $secret_key);    
                $iv = substr(hash('sha256', $secret_iv), 0, 8);
                    $textArea=$_POST['textoU'];
                    $output = openssl_encrypt($textArea, $encrypt_method, $key, 0, $iv);
                    $output = base64_encode($output);
                    echo"$output";
            }else{
                echo '<script>alert("Solo se admiten caracteres alfanuméricos, espacios, puntos y comas en el mensaje a encriptar.")</script>';
            }
        }
    }
}
if ($botonDesencriptar){
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
                $key = hash('sha256', $secret_key);    
                $iv = substr(hash('sha256', $secret_iv), 0, 8);
                    $textArea=$_POST['textoU'];
                    $output = openssl_decrypt(base64_decode($textArea), $encrypt_method, $key, 0, $iv);
                    echo "$output" ;
        }
    }
}

?>