<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
	
	require 'conexion2.php';
	$nombreCliente = $_POST['nombreCliente'];
	$nombreNegocio = $_POST['nombreNegocio'];
	$pago = isset($_POST['pago']) ? $_POST['pago'] :No;
	$id_serv = $_POST['id_serv'];
	$email = $_POST['email'];
	$telefonoCliente = $_POST['telefonoCliente'];
	$telefonoNegocio = $_POST['telefonoNegocio'];
	$direccionNegocio = $_POST['direccionNegocio'];
	$pueblo = $_POST['pueblo'];
	$serv_dom = isset($_POST['serv_dom']) ? $_POST['serv_dom'] : No;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ,';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO clientesnuevos  (nombreCliente , nombreNegocio , pago , id_serv , email , telefonoCliente  , telefonoNegocio  , direccionNegocio ,  pueblo , serv_dom , intereses)VALUES ('$nombreCliente', '$nombreNegocio' , '$pago' , '$id_serv' , '$email' , '$telefonoCliente' , '$telefonoNegocio' , '$direccionNegocio' , '$pueblo' , '$serv_dom' , '$arrayIntereses' )";
	$resultado = $mysqli->query($sql);
	
?>

	


<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h4 class="text-nowrap" style="color:#00F;">La información suministrada a sido guardado con exito en nuestra base de datos</h4>
                        <h4 class="text-nowrap" style="color:#00F; margin-bottom:30px;">Verificaremos los datos sumiuistrados a la mayor brevedad posible.</h4>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<div id="btnregresar" style="float:left; margin-left:30%; margin-bottom:30px;">
					 <a href="javascript:history.go(-1)"  class="btn btn-success">Regrsar al formulario</a>
                        </div>
                        
                        
                    <div id="btninicio" style="float:left; margin-left:30%;">
					<a href="../index2.php"  class="btn btn-primary">Ir a la pagina de Inicio</a>
				   	</div>
				</div>
			</div>
		</div>
	</body>
</html>
