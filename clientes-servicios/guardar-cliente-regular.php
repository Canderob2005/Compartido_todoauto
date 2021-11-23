<?php
	
	$mysqli = new mysqli('localhost', 'u317430902_canderob', 'camara', 'u317430902_todoAuto');
	$metodoPago = isset($_POST['metodoPago']) ? $_POST['metodoPago'] :No/Aplica;
	$nombreCliente = $_POST['nombreCliente'];
	$nombreNegocio = $_POST['nombreNegocio'];
	@$estatus = isset($_POST['estatus']) ? $_POST['estatus'] :No;
	@$pago = isset($_POST['pago']) ? $_POST['pago'] :No;
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
	$tipoAnuncio = isset($_POST['tipoAnuncio']) ? $_POST['tipoAnuncio'] : null;
	
	$arraytipoAnuncio = null;
	
	$num_array = count($tipoAnuncio);
	$contador = 0;
	
	if($num_array>0){
		foreach ($tipoAnuncio as $key => $value) {
			if ($contador != $num_array-1)
			$arraytipoAnuncio .= $value.' ,';
			else
			$arraytipoAnuncio .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO clientes  (estatus,metodoPago , nombreCliente , nombreNegocio , pago , id_serv , email , telefonoCliente  , telefonoNegocio  , direccionNegocio ,  pueblo , serv_dom , intereses, tipoAnuncio)VALUES ('$estatus' ,'$metodoPago' , '$nombreCliente', '$nombreNegocio' , '$pago' , '$id_serv' , '$email' , '$telefonoCliente' , '$telefonoNegocio' , '$direccionNegocio' , '$pueblo' , '$serv_dom' , '$arrayIntereses' , '$arraytipoAnuncio'  )";

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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					 <a href="javascript:history.go(-1)" class="btn btn-default">Regrsar</a>
                        </br></br>
					<a href="index.php" class="btn btn-primary">Inicio</a>
					
				</div>
			</div>
		</div>
        
	</body>
   
</html>
