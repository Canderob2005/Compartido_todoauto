<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example php mysql like function | w3resource</title>
<meta name="description" content="example php mysql like function">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Pagina de pruebas:</h2>
<table class='table table-bordered'>
<tr>
<th>Author's ID</th><th>Author's name</th><th>Country</th><th>Home City</th>
</tr>
<?php
$hostname="localhost";
$username="cande";
$password="122762";
$db = "todo-auto";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
	 }
foreach($dbh->query('SELECT * FROM clientes  WHERE  id_serv LIKE "%Auto%"') as $row) {
echo "<tr>";  
echo "<td>" . $row['id'] . "</td>";  
echo "<td>" . $row['telefonoCliente'] . "</td>"; 
echo "<td>" . $row['pueblo'] . "</td>";
echo "<td>" . $row['pago'] . "</td>";
echo "</tr>";
}
?>
</tbody></table>
</div>
</div>
</div>
</body>

</html>
