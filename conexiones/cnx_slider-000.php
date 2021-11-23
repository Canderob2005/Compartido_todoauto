<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnx_slider = "localhost";
$database_cnx_slider = "id11654821_todoauto";
$username_cnx_slider = "id11654821_cande";
$password_cnx_slider = "todoautopr";
$cnx_slider = mysqli_connect($hostname_cnx_slider, $username_cnx_slider, $password_cnx_slider) or trigger_error(mysql_error(),E_USER_ERROR); 
?>