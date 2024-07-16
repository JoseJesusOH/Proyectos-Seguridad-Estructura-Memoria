<?php include("template/cabecera.php");?>
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


  <form >
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
         <textarea class="form-control" name="textoUno" id="uno "style="overflow:auto;resize:none"  rows="10"></textarea>
       </div>
       <div class="form-group col">
         <textarea class="form-control" name="textoDos" id= "dos"style="overflow:auto;resize:none"  rows="10"></textarea>
       </div>
    </div> 
  </div>
  
  <p></p>
  <hr color="blue" size=12>
  <div   class="container"  >
        <div  class="row">  
             <div  class="col order-xl col-lg-auto  text-left">
              <h5>Salir</h5>
            </div>

            <div  class="col order-xl col-lg-auto text-center" >
              <input type="button" value="Click" name="botonSalir">
            </div>
        </div>
  </div>

  </form>

 <?php include("template/pie.php");?>







