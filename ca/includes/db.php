<?php
	define("DB_HOST" , "localhost");
	define("DB_USER" , "u317430902_canderob");
	define("DB_PASS" , "Camara123*");
	define("DB_NAME" , "u317430902_todoauto");

	$db = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);
	if(!$db){ echo 'An error has occurred <br/>'.mysqli_connect_error(); }
?>