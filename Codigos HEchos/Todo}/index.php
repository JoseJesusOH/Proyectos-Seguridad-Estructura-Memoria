<html>
	<head>
		<title>Login de usuario</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<center>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Usuario:<br>
			<input type="text" name="usuario"><br>
			Clave:<br>
			<input type="password" name="clave"><br><br>
			<input type="submit" name="login" value="Ingresar">
		</form>
		</center>
	</body>
</html>

<?php


// 2. isset() del boton login
if(isset($_POST['login'])){
    echo "<script>alert('Hola');</script>";


}

?>