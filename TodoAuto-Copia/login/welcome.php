<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();
?>

<html>
	<head>
		<title>Welcome</title>
		
		
	</head>
	
	<body>
    <style> 
	 
	#ahref {
		margin-top:-30px;
		float:right;	
	}
	#ahref a {
		color:#F00;
		margin-left:-100px;
		font-size:60%;
	}
	#contenido {
		margin-top:20px;
		margin-left:30px;
	}
	#contenido h3 {
		font-size:100%;
	}
	#bottonAutos {
		margin-top:70px;
		margin-left:3%;
	
	}
	#bottonPiezas {
		margin-top:-33px;
		text-align:center;
		margin-left:55%;
	}
	
	@media only screen and (min-width: 481px) {  
	#ahref {
		margin-top:-30px;
		float:right;	
	}
	#ahref a {
		color:#F00;
		margin-left:-140px;
		font-size:70%;
	}
	#contenido {
		margin-top:20px;
		margin-left:30px;
	}
	#contenido h3 {
		font-size:130%;
	}
	#bottonAutos {
		margin-top:70px;
		margin-left:10%;
	
	}
	#bottonPiezas {
		margin-top:-33px;
		text-align:center;
		margin-left:45%;
	}
	}
	@media only screen and (min-width: 769px) {  
	#ahref {
		margin-top:-30px;
		float:right;
		
	}
	#ahref a {
		color:#F00;
		margin-left:-305px;
	}
	#contenido {
		margin-top:50px;
		margin-left:30px;
	}
	#contenido h3 {
		font-size:230%;
	}
	#bottonAutos {
		margin-top:70px;
		margin-left:10%;
	
	}
	#bottonPiezas {
		margin-top:-33px;
		text-align:center;
		margin-left:45%;
	}
	}
    </style>
		
		 <div id="menu2" ><?php include "../menu-nuevo/menuUser.php" ?></div>	
         <div id="ahref"><h3  style="float:right; color:#F00;"><a href='logout.php'>Cerrar Sesi&oacute;n</a></h3></div>
			
<div id="contenedor">						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							
								<a href='#'>Administrar Usuarios</a>
							
						<?php } ?>
						
                        
						
							
						
					
				
				
			<div id="contenido">
                <h3 style="color:#00F;float:left;">!Bienvenido &nbsp;   </h3>
				<h3 style="color:#F00; float:left;" ><?php echo ''.utf8_decode($row['nombre']); ?>&nbsp;&nbsp;</h3>
                <h3 style="color:#00F;float:left;"> a Clasificados Todo Auto Puerto Rico . </h3>
                <h3 style="color:#00F;float:left; margin-left:25%; margin-top:40px;">&nbsp;&nbsp; Que deseas vender?</h3>
                 </div>
               
                
                
				<br /><br /><br /><br /><br /><br /><br />
              
                               
      <div style="width:100%;">          
                
 <div id="bottonAutos"> <a href="login/loginUser.php" class="btn btn-primary">Vender  Autos</a></div>
  <div id="bottonPiezas"> <a href="../index.php" class="btn btn-primary">Vender Piezas</a></div>

 </div>
               </div>
		
		
	</body>
</html>