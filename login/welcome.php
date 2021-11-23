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
    <div id="contenido">
<div id="ahref"><h2  style="float:right; color:#F00;"><a href='logout.php'>Cerrar Sesi&oacute;n</a></h2></div>
			
<div id="contenedor">						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							
								<a href='#'>Administrar Usuarios</a>
							
						<?php } ?>
						
                        
						
							
	</div>				
					
				
				
			
            <div id="Bienvenida">
                <h1 style="color:#00F;float:left;">!Bienvenido &nbsp;   </h1>
				<h1 style="color:#F00; float:left;" ><?php echo ''.utf8_decode($row['nombre']); ?>&nbsp;&nbsp;</h1>
                <h1 style="color:#00F;float:left;"> a &nbsp; <h1 style="color:#F00;float:left;">Clasificados</h1> <h1 style="color:#00F;float:left;">&nbsp; Todo Auto Puerto Rico . </h1>
    </div>
               
                 
               
				
                
                
               <div id="majia">
                <h3 style="color:#00F;"> Que deseas vender?</h3>
    </div>
                               
      <div style="width:100%;">          
                
 <div id="bottonAutos"> <a href="login/loginUser.php" class="btn btn-primary">Vender  Autos</a></div>
  <div id="bottonPiezas"> <a href="../index.php" class="btn btn-primary">Vender Piezas</a></div>

 
    </div>
		
	</div>	
</body>
</html>