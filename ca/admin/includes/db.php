<?php
	define("DB_HOST" , "localhost");
	define("DB_USER" , "u317430902_clasificadospr");
	define("DB_PASS" , "Camara123*");
	define("DB_NAME" , "carousel-sql");

	$db = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);
	if(!$db){ echo 'An error has occurred <br/>'.mysqli_connect_error(); }
?>