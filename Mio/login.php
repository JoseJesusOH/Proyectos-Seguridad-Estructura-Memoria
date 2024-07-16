
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
                <input type="text" name="usuario" placeholder="Digite Usuario">
                <br><br>
                <input type="password" name="clave" placeholder="Digite Clave">
                <br><br>
                <button type="submit" > ENTRAR</button>
               </form>
            </div>
            <div  align="center" class="col order-xl ">
               <a href="http://es.blingee.com/blingee/view/102985397-gato-rockero" target="_blank" title="gato rockero"><img alt="gato rockero" border="0" height="160" src="http://image.blingee.com/images17/content/output/000/000/000/623/530790535_374108.gif" title="gato rockero" width="128" /></a><br /><a href="http://es.blingee.com/pictures/gato" target="_blank" title="gato Fotografías"><font size="2">gato Fotografías</font></a><br /><br />
             </div>

            <div class="col order-xl  ">
               <form action="logica/sistemaIngreso.php" method="POST" align="center" border="50"  vspace="50" hspace="50">
             <h1>Registro de Usuario</h1>
               <input type="text" name="usuarioDos" placeholder="Digite Usuario">
               <br><br>
               <input type="password" name="claveDos" placeholder="Digite Clave">
               <br><br>
               <button type="submit" > Registrar</button>
               </form>
            </div> 
         </div>  
          
  </div> 
  <hr color="blue" size=12>


</body>
</html>