<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging-Sign DES</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
              <h1>Registro de Usuario</h1>
            </div>

            <div class="col order-xl  text-end">
              <img  src="https://www.itson.mx/micrositios/identidad/PublishingImages/marca-itson.jpg" 
                width="120" height="50"  >
            </div> 
        </div>
  </div>
  <hr color="blue" size=12>

  <div class="col order-xl  ">
               <form action="logica/sistemaIngreso.php" method="POST" align="center" border="50"  vspace="50" hspace="50">
             
               <input type="text" name="usuarioDos" placeholder="Digite Usuario">
               <br><br>
               <input type="password" name="claveDos" placeholder="Digite Clave">
               <br><br>

            <div class="col order-xl"></div>
            <div align="center" class = "g-recaptcha" data-sitekey="6LdsDIgfAAAAAMnS9EzyBAAhe38WdAMkZrm16ezX"></div>

               <button type="submit" >Registrar</button>

               </form>
            </div> 


</body>
</html>