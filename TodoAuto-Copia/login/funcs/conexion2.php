<?php
	
	$mysqli=new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto'); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
