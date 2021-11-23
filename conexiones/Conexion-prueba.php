<?php
$dbh = new mysqli("localhost","u317430902_candero","camara","u317430902_todoAuto");

// Check connection
if ($dbh -> connect_errno) {
  echo "Failed to connect to MySQL: " . $dbh -> connect_error;
  exit();
}
?> 
<h1>hola</h1>
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
$username="u317430902_canderob";
$password="camara";
$db = "u317430902_todoAuto";
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
<?php
// La clase BDController
class DBController {
	private $hostname = "localhost";
	private $userDB = "u317430902_canderob";
	private $passwordDB = "camara";
	private $nombreDB = "u317430902_todoAuto";
	private $conexion;
	
        function __construct() {
        $this->conexion = $this->connectDB();
	}	
	function connectDB() {
		$conexion = mysqli_connect($this->hostname,$this->userDB,$this->passwordDB,$this->nombreDB); 
		if (mysqli_connect_errno()) {
    printf("Falló la conexión y seguimos: %s\n", mysqli_connect_error()); echo 'Helowww';
    exit();
}
		return $conexion;
	}
        function runQuery($query) {
                $result = mysqli_query($this->conexion,$query);
                while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}
?>
<h1>hola</h1>
</tbody></table>
</div>
</div>
</div>
</body>

</html>
