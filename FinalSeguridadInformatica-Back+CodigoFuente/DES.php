<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: menu.php");
}else{
  $_SESSION['username']="";
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DES</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="noBack.js"></script> 
        
    <style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    transition: background-color .5s;
    border-radius: 25% 10%;
    border: 2px solid #0016b0;
    display: inline-block;  
    width:180px;
    height:60px;
}
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
  .label_personalizado{
    padding: 10px;
    font-weight: 600;
    font-size: 25px;
    color: #1883ba;

  }

  .label_personalizado2{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #1883ba;
    background-color: #ffffff;
    transition: background-color .5s;
    border-radius: 25% 10%;
    border: 2px solid #ffffff;
    display: inline-block;  
    width:320px;
    height:30px;

  }

  .label_personalizado:hover{
    color: #000000;
    
  }

  .label_personalizado2:hover{
    color: #000000;
    
  }

  .horizontal{
    display: inline-block;
  }

</style>
</head>
<body>
  
    <div class="container">
        <div class="row"> 
<hr color="blue" size=12>
  <div   class="container"  >
        <div  class="row">  
            <div  class="col order-xl text-left">
              <img src="https://www.itson.mx/micrositios/identidad/PublishingImages/marca-itson.jpg" 
               width="100" height="50" >
            </div>

            <div  class="col order-xl col-lg-auto text-center" >
              <h2 >Sistema Encritptacion DES Seguridad Informatica 2022</h2>
            </div>

            <div class="col order-xl  text-end">
              <img  src="https://www.itson.mx/micrositios/identidad/PublishingImages/marca-itson.jpg" 
                width="100" height="50"  >
            </div> 
        </div>
  </div>
 


  <form action="validar.php" method="post" target="objetivo">

 
  
  <hr color="blue" size=12>
  <div   class="container"  >
        <div  class="row">  
          <div  class="col order-xl-2  text-left">
              <div>
                <div>
                   <h4 > Cifrado Simétrico DES </h4>
                </div>
                <div>
                   <p align="justify"> Data Encryption Standard (DES), es un algoritmo de cifrado en bloque simétrico, de longitud fija, el cual consiste de dos permutaciones, 16 vueltas en donde el mensaje de 64 bits es dividido en dos bloques de 32 bits, después de usar la primer permutación llamada P1, es cifrado 16 veces utilizando cada vez una subclave, la cual se genera 16 veces en un proceso paralelo. En el proceso para descifrar se utiliza el mismo algoritmo con las subclaves en orden inverso, dando como consecuencia, la simetría del algoritmo. </p>
                </div>
              </div>
          </div>
          <div class="col order-xl   text-end">
            <img  src="https://programacion.net/files/article/20160322060338_criptografia.jpg" 
              width="475" height="250"  alt="internet" align="left" border="10" vspace="20" hspace="10">
          </div> 
        </div>
  </div>


  <hr color="blue" size=12>
  <div   class="container"  >
    <div  class="row">  
      <div  class="col order-xl  text-left">
       <h5>Encriptar Texto</h5>
       <p>Clave: <input type="text" name="clave"></p>
      </div>
      <div class="col order-xl   text-end" >
        <p></p> 
        <input type="submit" value="Encriptar" name="botonEncriptar">
        <input type="submit" value="Desencriptar" name="botonDesencriptar">
        <input type="reset" value="Limpiar" name="botonLimpiar">
     </div>     
    </div> 
  </div>

  <div   class="container"  >
    <div  class="row">  
       <div class="form-group col">
         <textarea name="textoU" class="form-control" style="overflow:auto;resize:none"  rows="10"></textarea>
       </div>
       <div class="form-group col">
       <iframe align="end" name="objetivo" src="validar.php" frameBorder="0"  style=" border: #ff7c12 1px solid;" width="500" height="250" ></iframe>
       </div>
    </div> 
  </div>


  </form>
  <p></p>
  <hr color="blue" size=12>
  <div   class="container"  >
        <div  class="row">  
             <div  class="col order-xl col-lg-auto  text-left">
            </div>
            <div  class="col order-xl col-lg-auto text-center" >
            <a class="boton_personalizado" href = "salir.php">Salir</a>
            </div>
        </div>
  </div>

</body>
</html>