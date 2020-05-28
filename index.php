<html>
<head>
	<title> Registro de empleados </title>
	<meta charset="utf-8">
	<link rel= "stylesheet" type= "text/css" href= "Estilos.css">
	
	
</head>
<body>
	<form method = "POST" class= "userCreation">
		<h1> Registro de empleados </h1>
		<select class="confg" name = "Rolempleado"  id = "Rolempleado" style="font-size:15pt">
			<option selected disabled>-- Seleccione cargo de Empleado
			<option   class="confg" > Secreataria</option>
			<option  class="confg"> Odontologo</option>
			<option  class="confg"> Enfermera </option>
		</select>
		<input class="confg" type="text" name="Nombre" placeholder="Nombre">
		<input class="confg" type="text" name="Apellidoempleado" placeholder="Apellido">
		<input class="confg" type="tel" name="Celularempleado" placeholder="Celular">
		<input class="confg" type="text" name="Cedulaempleado" placeholder="Numero de identificacion">
		<input class="confg" type="radio" name="Estadoempleado"  value= "Activo"> Activo
		<input class="confg" type="radio" name="Estadoempleado" value="Inactivo"> Inactivo
		<input class="confg" type="email" name="Email" placeholder="email">
		<input class="confg" type="password" name="Contrasena" placeholder="Contraseña">
		<input class="confg" type="password" name="Confirmar" placeholder="Confirme Contraseña">
		
		<input class="confg" type="submit" name ="registrar" value= "registrar">
		
	</form>
		<?php
		include("registro.php");
		?>
</body>
</html>