<?php
// La clase BDController
class DBController {
	private $hostname = "localhost";
	private $userDB = "id11654821_cande";
	private $passwordDB = "todoautopr";
	private $nombreDB = "id11654821_todoauto";
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
