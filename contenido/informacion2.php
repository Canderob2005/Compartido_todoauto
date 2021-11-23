<?php
	require '../conexiones/conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM clientes WHERE friendly_url = '$id'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Información Cliente</h3>
			</div>
			
			<form class="form-horizontal" >
            <div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Foto</label>
					<div class="col-sm-10">
						
						
						<?php 
						$id = $row['id'];
							$path = "files/".$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										
										echo "<img src='../clientes-servicios/files/$id/$archivo' width='300' />";
									}
								}
							}
							
						?>
						
					</div>
				</div>
                             
                              <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
                
                
                 <div class="form-group">
					<label for="Numero Cliente" class="col-sm-2 control-label">Numero Cliente</label>
					<div class="col-sm-10">
						<input  class="form-control" value="<?php echo $row['id']; ?>" >
					</div>
				</div>
     
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Cliente</label>
					<div class="col-sm-10">
						<input  class="form-control" value="<?php echo $row['nombreCliente']; ?>" >
					</div>
				</div>
             
                        <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Negocio</label>
					<div class="col-sm-10">
						<input  class="form-control" value="<?php echo $row['nombreNegocio']; ?>" >
					</div>
				</div>
                        
				
               <div class="form-group">
					<label for="id_serv" class="col-sm-2 control-label">Servicios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"  value="<?php echo $row['id_serv']; ?>">
					</div>
				</div>
                
                
				<input type="hidden"  value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono Cliente</label>
					<div class="col-sm-10">
						<input  class="form-control"  value="<?php echo $row['telefonoCliente']; ?>" >
					</div>
				</div>
				
                <div class="form-group">
					<label for="numero" class="col-sm-2 control-label">Numero Negocio</label>
					<div class="col-sm-10">
						<input class="form-control"   value="<?php echo $row['telefonoNegocio']; ?>" >
					</div>
				</div>
				
                <div class="form-group">
					<label for="dirreccion" class="col-sm-2 control-label">Dirección Negocio</label>
					<div class="col-sm-10">
						<input  class="form-control"   value="<?php echo $row['direccionNegocio']; ?>" >
					</div>
				</div>
                
                
				 <div class="form-group">
					<label for="pueblo" class="col-sm-2 control-label">Pueblo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"  value="<?php echo $row['pueblo']; ?>" >
					</div>
				</div>
                
			 <div class="form-group">
					<label for="serv_dom" class="col-sm-2 control-label">Servicio a domicilio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"  value="<?php echo $row['serv_dom']; ?>">
					</div>
				</div>
            
            <div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">Servicios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"  value="<?php echo $row['intereses']; ?>">
					</div>
				</div>
				
				
                        
                        
                       
                        
                         
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="javascript: history.go(-1)" class="btn btn-primary">Regresar</a>
                        
					
					</div>
				</div>
			</form>
		</div>
	</body>
</html>