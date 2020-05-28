<?php
	include("con_db.php");
	error_reporting(5);
	if (isset($_POST['registrar'])){
		if (strlen($_POST['Rolempleado'])>= 1 && strlen($_POST['Nombre'])>= 1  
		&& strlen($_POST['Apellidoempleado']) >=1 && strlen($_POST['Celularempleado']) >=1 
		&& strlen($_POST['Cedulaempleado']) >=1 && strlen($_POST['Estadoempleado']) >=1 
		&& strlen($_POST['Email']) >=1 && strlen($_POST['Contrasena']) >=1 && strlen($_POST['Confirmar']) >=1) {
			
			$rEM = trim($_POST['Rolempleado']);
			$namEm = trim($_POST['Nombre']);
			$surnameEm = trim($_POST['Apellidoempleado']);
			$phoneEm = trim($_POST['Celularempleado']);
			$cedulaEm = trim($_POST['Cedulaempleado']);
			$stateEm = trim($_POST['Estadoempleado']);
			$emailEm = trim($_POST['Email']);
			$passEm = trim($_POST['Contrasena']);
			$confpassEm = trim($_POST['Confirmar']);
			
			
			
			$consulta="INSERT INTO datos(Rolempleado, Nombreempleado, Apellidoempleado, Celularempleado, Cedulaempleado, Estadoempleado, Email, Contrasena, Confirmcontrasena)Values('$rEM','$namEm','$surnameEm','$phoneEm','$cedulaEm','$stateEm','$emailEm','$passEm','$confpassEm')";
			$result = mysqli_query($conex,$consulta);

			if($result){
				?>
				<h3 class = "ok"> ¡Te has inscriptp correctamente! </h3>
				<?php
			}else{
				?>
				<h3 class="bad"> ¡Ha ocurrido un error! </h3>
				<?php
			}
		}	else{
				?>
				<h3 class= "bad"> ¡Por favor complete los campos!</h3>
				<?php
		}
	}
?>