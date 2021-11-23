<?php
	
	$mysqli = new mysqli('localhost', 'id11654821_cande', 'todoautopr', 'id11654821_todoauto');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>