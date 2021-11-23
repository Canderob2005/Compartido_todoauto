<?php
	
	$mysqli = new mysqli('localhost', 'u317430902_canderob', 'camara', 'u317430902_todoAuto');
	
	
    @$metodoPago = isset($_POST['metodoPago']) ? $_POST['metodoPago'] :No/Aplica;
	@$nombreCliente = $_POST['nombreCliente'];
	@$nombreNegocio = $_POST['nombreNegocio'];
	@$estatus = isset($_POST['estatus']) ? $_POST['estatus'] :No;
	@$pago = isset($_POST['pago']) ? $_POST['pago'] :No;
	@$id_serv = $_POST['id_serv'];
	@$email = $_POST['email'];
	@$telefonoCliente = $_POST['telefonoCliente'];
	@$telefonoNegocio = $_POST['telefonoNegocio'];
	@$direccionNegocio = $_POST['direccionNegocio'];
	@$pueblo = $_POST['pueblo'];
	@$serv_dom = isset($_POST['serv_dom']) ? $_POST['serv_dom'] : No;
	@$entrega_dom = isset($_POST['entrega_dom']) ? $_POST['entrega_dom'] : No;
		
	@$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	@$arrayIntereses = null;
	
	@$num_array = count($intereses);
	@$contador = 0;
	
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
	
	@$num_array = count($tipoAnuncio);
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
	
	$sql = "INSERT INTO clientes  (`estatus`, `metodoPago`, `tipoAnuncio`, `nombreCliente`, `nombreNegocio`, `friendly_url`, `pago`, `id_serv`, `email`, `telefonoCliente`, `telefonoNegocio`, `direccionNegocio`, `pueblo`, `serv_dom`, `entrega_dom`, `intereses`) VALUES
			
				('$estatus' ,
				'$metodoPago' ,
				'$arraytipoAnuncio',
				 '$nombreCliente',
				  '$nombreNegocio' ,
				  '',
				   '$pago' ,
				    '$id_serv' ,
					 '$email' ,
					  '$telefonoCliente' ,
					   '$telefonoNegocio' ,
					    '$direccionNegocio' ,
						 '$pueblo' , 
						 '$serv_dom' ,
						  '$entrega_dom' ,
						   '$arrayIntereses' 
						      )";

	$resultado = $mysqli->query($sql);
	$id_insert = $mysqli->insert_id;
	
	if($_FILES["archivo"]["error"]>0){
		echo "Error al cargar archivo";	
		} else {
		
		$permitidos = array("image/gif","image/png","image/jpg","image/JPG","image/jpeg");
		$limite_kb = 8873372;
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){
			
			$ruta = '../formulario/files/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
				if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
				}
				
				} else {
				echo "Archivo ya existe";
			}
			
			} else {
			echo "Archivo no permitido o excede el tamaño";
		}
		
	}
	
?>


<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/estilo-guardar.css" rel="stylesheet" >
		
        <style>
		.conteiner  {
        color:#FF0099;
		}
 
        </style>
	</head>
	
	<body>
		<div class="container">
       
			
				<?php if($resultado) { ?>
                <div class="card"  style="text-align:center; color:#FF0099;">
  <div class="card-body">
    <h1 class="card-title">REGISTRO GUARDADO</h1>
    <h2 class="card-text">Gracias por anunciar su negocio con nosotros.</h2>
    <h2 class="card-text">Verificaremos su anuncio a la mayor brevedad posible.<h2>
          
    
  </div>
</div>


<div class="preloader">

</div>
<h2 class="titulo" style="text-align:center; color:#00f;">En unos segundos sera redirigido a la pagina principal</h2>



              
						<?php } else { ?>
						
					<?php } ?>
									
				</div>
			</div>
		
        
	</body>
   <meta http-equiv='Refresh' content='8;url=../index2.php'> 
   <script> 
function cerrarse(){ 
window.close() 
} 
</script> 
</html>
