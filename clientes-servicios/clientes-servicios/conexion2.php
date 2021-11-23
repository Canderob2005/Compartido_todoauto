<?php
	
	$mysqli = new mysqli('localhost', 'cande', '122762', 'todo-auto');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>