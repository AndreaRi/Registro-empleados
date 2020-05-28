<?php
$inc= include("con_db.php");
	if($inc){
		$consulta= "SELECT*FROM datos";
		$resultado=mysqli_query($conex,$consulta);
		if($resultado){
			while($row = $resultado->fetch_array()){
				$Rol=$row['Rolempleado'];
				$nombre=$row['Nombreempleado'];
				$apellido=$row['Apellidoempleado'];
				$celular=$row['Celularempleado'];
				$cedula=$row['Cedulaempleado'];
				$estado=$row['Estadoempleado'];
				$email=$row['Email'];
				$contrasena=$row['Contrasena'];
				$Confirmar=$row['Confirmcontrasena'];
				?>
				<div>
					<h2><?php 
					echo $nombre;
					?>
					<div>
					<p>
					<b> Nombre: </b> <?php echo $nombre; ?> <br>
					</p>
					</div>
				</div>
			<?php
			}
		}
	}
?>