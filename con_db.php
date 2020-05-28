<?php
//parametros de conexion:
//1. Servodor(localhost)
//2. Nombre de usuario (administrador root)
//3. Contraseña (esta en blanco)
//4. base de datos que queremos seleccionar
//error_reporting (5);

$conex = mysqli_connect("localhost","root","","registro");

if(!$conex)
	{
	echo 'Error al conectar la base de datos';
	}
	else
	{
	echo 'conectado a la base de datos';
	}
?>