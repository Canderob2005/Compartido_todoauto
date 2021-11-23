<?php
$DB_HOST="localhost";//Servidor donde se encuentra alojada nuestra base de datos
$DB_NAME= "u317430902_todoautopr";// Nombre de la base de datos
$DB_USER= "u317430902_canderob";//Usuario de la base de datos
$DB_PASS= "Camara123*";//Contraseña del usuario de la base de datosu317430902_todoAutopr
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
