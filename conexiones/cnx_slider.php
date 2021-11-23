<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnx_slider = "localhost";
$database_cnx_slider = "u317430902_todoAuto";
$username_cnx_slider = "u317430902_canderob";
$password_cnx_slider = "camara";
$cnx_slider = mysqli_connect($hostname_cnx_slider, $username_cnx_slider, $password_cnx_slider); if (mysqli_connect_errno()) {
    printf("Falló la conexión sea la madre: %s\n", mysqli_connect_error());
    exit();
}
?>
