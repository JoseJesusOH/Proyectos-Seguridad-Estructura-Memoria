
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging-Sign DES</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
</head>
<body>
<div class="container">
        <div class="row"> 
<hr color="blue" size=12>
  <div   class="container"  >
        <div  class="row">  
            <div  class="col order-xl text-left">
              <img src="https://www.itson.mx/micrositios/identidad/PublishingImages/marca-itson.jpg" 
               width="110" height="50" >
            </div>

            <div  class="col order-xl col-lg-auto text-center" >
              <h1>Registro e Inicio de Sesion </h1>
            </div>

            <div class="col order-xl  text-end">
              <img  src="https://www.itson.mx/micrositios/identidad/PublishingImages/marca-itson.jpg" 
                width="120" height="50"  >
            </div> 
        </div>
  </div>
  <hr color="blue" size=12>

  <div   class="container"  >
        <div  class="row">  
            <div  align="center" class="col order-xl ">
              <form action="logica/loguear.php" method="POST" align="center" border="50"  vspace="50" hspace="50">
                <h1 >Inicio de Sesion </h1>
                <input type="text" name="usuario" placeholder="Digite Usuario" maxlength="25">
                <br><br>
                <input type="password" name="clave" placeholder="Digite Clave" maxlength="25">
                <br><br>
                <button type="submit" > ENTRAR</button>
               </form>
            </div>
            <div  align="center" class="col order-xl ">
            <img src="https://orozcojose675851542.files.wordpress.com/2022/05/gato2.jpg" ><br />
                       </div>

            <div class="col order-xl  ">
               <form action="logica/sistemaIngreso.php" method="POST" align="center" border="50"  vspace="50" hspace="50">
             <h1>Registro de Usuario</h1>
               <input type="text" name="usuarioDos" placeholder="Digite Usuario" maxlength="25">
               <br><br>
               <input type="password" name="claveDos" placeholder="Digite Clave" maxlength="25">
               <br><br>
               <button type="submit" > Registrar</button>
               </form>
            </div> 
         </div>  
          
  </div> 
  <hr color="blue" size=12>


</body>
</html>