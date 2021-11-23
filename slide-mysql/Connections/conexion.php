<?php
	
	$mysqli = new mysqli('localhost', 'u317430902_canderob ', 'Camara123', 'u317430902_todoAuto ');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>