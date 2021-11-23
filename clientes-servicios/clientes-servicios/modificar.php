<?php
	$mysqli = new mysqli('localhost', 'u317430902_canderob', 'camara', 'u317430902_todoAuto');
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
        <script type="text/javascript">
		
			$(document).ready(function() {
				$('.delete').click(function(){
					var parent = $(this).parent().attr('id');
					var service = $(this).parent().attr('data');
					var dataString = 'id='+service;
					
					$.ajax({
						type: "POST",
						url: "del_file.php",
						data: dataString,
						success: function() {			
							location.reload();
						}
					});
				});                 
			});    
		</script>
	</head>
	<style type="text/css">
.thumb {
      height: 200px;
      border: 2px solid #000;
      margin: 10px 5px 0 0;
    }
.checkbox-inline {
		margin-top:40px;
		margin-right:10px;
	}
.form-horizontal  {
		margin-left:5px;
		margin-right:5px;
}
table  {
		margin-left:5px;
		margin-right:5px;
}
table td {
	width:33%;
	 padding-bottom: 20px;
    padding-top: 20px;
}
#benners  { 
        margin-top:-15px;
		margin-left:-18px;
		margin-right:45px;
}
#benners td {
	width:35%;
	
}
.radio-inline {
	margin-left:20px;
	margin-right:20px;
}    
    </style>
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" enctype="multipart/form-data" autocomplete="off">
            
            <div class="form-group">
					<label for="estatus" class="col-sm-2 control-label">Cliente Activo</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="si" <?php if($row['estatus']=='si') echo 'checked'; ?>> Si
                           
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="No" <?php if($row['estatus']=='No') echo 'checked'; ?>> No
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="nombreCliente" class="col-sm-2 control-label">Nombre Cliente</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre Cliente" value="<?php echo $row['nombreCliente']; ?>" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="nombreNegocio" class="col-sm-2 control-label">Nombre Negocio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreNegocio" name="nombreNegocio" placeholder="Nombre Negocio" value="<?php echo $row['nombreNegocio']; ?>" required>
					</div>
				</div>
                
                		
				
                 <div class="form-group">
					<label for="pago" class="col-sm-2 control-label">Desea Anuncio de pagó</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="pago" name="pago" value="si"<?php if($row['pago']=='si') echo 'checked'; ?> required> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="pago" name="pago" value="no"<?php if($row['pago']=='no') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
                
                
                
                
                <div class="form-group">
					<label for="MetododePago" class="col-sm-2 control-label">Metodo de pago</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="ATHmovil" <?php if($row['metodoPago']=='ATHmovil') echo 'checked'; ?>> ATHmovil
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="PayPal"<?php if($row['metodoPago']=='PayPal') echo 'checked'; ?>> PayPal
						</label>
                        
                        <label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="No/Aplica"<?php if($row['metodoPago']=='No/Aplica') echo 'checked'; ?>> No/Aplica
						</label>
					</div>
				</div>
                
                
                 <div class="form-group">
                  
					<label for="tipoAnuncio" class="col-sm-2 control-label">Tipo Anuncio</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
                
                <table id="benners" width="100%" border="0">
  <tr>
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Banners"<?php if(strpos($row['tipoAnuncio'], "Banners")!== false) echo 'checked'; ?> > Banners  
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Pop pots"<?php if(strpos($row['tipoAnuncio'], "Pop pots")!== false) echo 'checked'; ?> > Pop pots
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="posicionamiento "<?php if(strpos($row['tipoAnuncio'], "posicionamiento")!== false) echo 'checked'; ?> > posicionamiento
						</label></td>
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="No/Aplica"<?php if(strpos($row['tipoAnuncio'], "No/Aplica")!== false) echo 'checked'; ?> > No/Aplica
						</label></td>
  </tr>
</table>
       	</div>
				</div>
                
                
                
                
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"  >
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefonoCliente" class="col-sm-2 control-label">Telefono Cliente</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonoCliente" name="telefonoCliente" placeholder="Telefono Cliente" value="<?php echo $row['telefonoCliente']; ?>" >
					</div>
				</div>
				
                <div class="form-group">
					<label for="telefonoNegocio" class="col-sm-2 control-label">Telefono Negocio</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonoNegocio" name="telefonoNegocio" placeholder="telefono Negocio" value="<?php echo $row['telefonoNegocio']; ?>" >
					</div>
				</div>
				
                <div class="form-group">
					<label for="dirreccion" class="col-sm-2 control-label">Direccion Negocio.<p style="color:#F00;">No incluir pueblo</p> </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccionNegocio" name="direccionNegocio" placeholder="Direccion Negocio" value="<?php echo $row['direccionNegocio']; ?>" required>
					</div>
				</div>
                
                
				 <div class="form-group">
					<label for="pueblo" class="col-sm-2 control-label">Seleccione Pueblo</label>
					<div class="col-sm-10">
						<select class="form-control" id="pueblo" name="pueblo">
                  <option value="Adjuntas" <?php if($row['pueblo']=='Adjuntas') echo 'selected'; ?>>Adjuntas</option>
                 <option value="Aguada" <?php if($row['pueblo']=='Aguada') echo 'selected'; ?>>Aguada</option>
                 <option value="Aguadilla" <?php if($row['pueblo']=='Auadilla') echo 'selected'; ?>>Aguadilla</option>
				<option value="Aguas buenas" <?php if($row['pueblo']=='Aguas buenas') echo 'selected'; ?>>Aguas buenas</option>
                <option value="Aibonito" <?php if($row['pueblo']=='Aibonito') echo 'selected'; ?>>Aibonito</option>
                <option value="Arecibo" <?php if($row['pueblo']=='Arecibo') echo 'selected'; ?>>Arecibo</option>
                <option value="Arroyo" <?php if($row['pueblo']=='Arroyo') echo 'selected'; ?>>Arroyo</option>
                <option value="Añasco" <?php if($row['pueblo']=='Añasco') echo 'selected'; ?>>Añasco</option>
                <option value="Barceloneta" <?php if($row['pueblo']=='Barceloneta') echo 'selected'; ?>>Barceloneta</option>
                <option value="Barranquitas" <?php if($row['pueblo']=='Barranquitas') echo 'selected'; ?>>Barranquitas</option>
                <option value="Bayamon" <?php if($row['pueblo']=='Bayamon') echo 'selected'; ?>>Bayamón</option>
                <option value="Cabo Rojo" <?php if($row['pueblo']=='Cabo Rojo') echo 'selected'; ?>>Cabo Rojo</option>
                <option value="Caguas" <?php if($row['pueblo']=='Caguas') echo 'selected'; ?>>Caguas</option>
                <option value="Camuy" <?php if($row['pueblo']=='Camuy') echo 'selected'; ?>>Camuy</option>
                <option value="Canóvanas" <?php if($row['pueblo']=='Canóvanas') echo 'selected'; ?>>Canóvanas</option>
                <option value="Carolina" <?php if($row['pueblo']=='Carolina') echo 'selected'; ?>>Carolina</option>
                <option value="Cataño" <?php if($row['pueblo']=='Cataño') echo 'selected'; ?>>Cataño</option>
                <option value="Cayey" <?php if($row['pueblo']=='Cayey') echo 'selected'; ?>>Cayey</option>
                <option value="Ceiba" <?php if($row['pueblo']=='Ceiba') echo 'selected'; ?>>Ceiba</option>
                <option value="Ciales" <?php if($row['pueblo']=='Ciales') echo 'selected'; ?>>Ciales</option>
                <option value="Cidra" <?php if($row['pueblo']=='Cidra') echo 'selected'; ?>>Cidra</option>
                <option value="Coamo" <?php if($row['pueblo']=='Coamo') echo 'selected'; ?>>Coamo</option>
                <option value="Comerío" <?php if($row['pueblo']=='Comerío') echo 'selected'; ?>>Comerío</option>
                <option value="Corozal" <?php if($row['pueblo']=='Corozal') echo 'selected'; ?>>Corozal</option>
                <option value="Culebra" <?php if($row['pueblo']=='Culebra') echo 'selected'; ?>>Culebra</option>
                <option value="Dorado" <?php if($row['pueblo']=='Dorado') echo 'selected'; ?>>Dorado</option>
                <option value="Fajardo" <?php if($row['pueblo']=='Fajardo') echo 'selected'; ?>>Fajardo</option>
                <option value="Florida" <?php if($row['pueblo']=='Florida') echo 'selected'; ?>>Florida</option>
                <option value="Guayama" <?php if($row['pueblo']=='Guayama') echo 'selected'; ?>>Guayama</option>
                <option value="Guayanilla" <?php if($row['pueblo']=='Guayanilla') echo 'selected'; ?>>Guayanilla</option>
                <option value="Guaynabo" <?php if($row['pueblo']=='Guaynabo') echo 'selected'; ?>>Guaynabo</option>
                <option value="Gurabo" <?php if($row['pueblo']=='Gurabo') echo 'selected'; ?>>Gurabo</option>
                <option value="Guánica" <?php if($row['pueblo']=='Guánica') echo 'selected'; ?>>Guánica</option>
                <option value="Hatillo" <?php if($row['pueblo']=='Hatillo') echo 'selected'; ?>>Hatillo</option>
                <option value="Hormigueros" <?php if($row['pueblo']=='Hormigueros') echo 'selected'; ?>>Hormigueros</option>
                <option value="Humacao" <?php if($row['pueblo']=='Humacao') echo 'selected'; ?>>Humacao</option>
                <option value="Isabela" <?php if($row['pueblo']=='Isabela') echo 'selected'; ?>>Isabela</option>
                <option value="Jayuya" <?php if($row['pueblo']=='Jayuya') echo 'selected'; ?>>Jayuya</option>
                <option value="Juana Díaz" <?php if($row['pueblo']=='Juana Díaz') echo 'selected'; ?>>Juana Díaz</option>
                <option value="Juncos" <?php if($row['pueblo']=='Juncos') echo 'selected'; ?>>Juncos</option>
                <option value="Lajas" <?php if($row['pueblo']=='Lajas') echo 'selected'; ?>>Lajas</option>
                <option value="Lares" <?php if($row['pueblo']=='Lares') echo 'selected'; ?>>Lares</option>
                <option value="Las Marías" <?php if($row['pueblo']=='Las Marías') echo 'selected'; ?>>Las Marías</option>
                <option value="Las Piedras" <?php if($row['pueblo']=='Las Piedras') echo 'selected'; ?>>Las Piedras</option>
                <option value="Loiza" <?php if($row['pueblo']=='Loiza') echo 'selected'; ?>>Loiza</option>
                <option value="Luquillo" <?php if($row['pueblo']=='Luquillo') echo 'selected'; ?>>Luquillo</option>
                <option value="Manatí" <?php if($row['pueblo']=='Manatí') echo 'selected'; ?>>Manatí</option>
                <option value="Maricao" <?php if($row['pueblo']=='Maricao') echo 'selected'; ?>>Maricao</option>
                <option value="Maunabo" <?php if($row['pueblo']=='Maunabo') echo 'selected'; ?>>Maunabo</option>
                <option value="Mayagüez" <?php if($row['pueblo']=='Mayagüez') echo 'selected'; ?>>Mayagüez</option>
                <option value="Moca" <?php if($row['pueblo']=='Moca') echo 'selected'; ?>>Moca</option>
                <option value="Morovis" <?php if($row['pueblo']=='Morovis') echo 'selected'; ?>>Morovis</option>
                <option value="Naguabo" <?php if($row['pueblo']=='Naguabo') echo 'selected'; ?>>Naguabo</option>
                <option value="Naranjito" <?php if($row['pueblo']=='Naranjito') echo 'selected'; ?>>Naranjito</option>
                <option value="Orocovis" <?php if($row['pueblo']=='Orocovis') echo 'selected'; ?>>Orocovis</option>
                <option value="Patillas" <?php if($row['pueblo']=='Patillas') echo 'selected'; ?>>Patillas</option>
                <option value="Peñuelas" <?php if($row['pueblo']=='Peñuelas') echo 'selected'; ?>>Peñuelas</option>
                <option value="Ponce" <?php if($row['pueblo']=='Ponce') echo 'selected'; ?>>Ponce</option>
                <option value="Quebradillas" <?php if($row['pueblo']=='Quebradillas') echo 'selected'; ?>>Quebradillas</option>
                <option value="Rincón" <?php if($row['pueblo']=='Rincón') echo 'selected'; ?>>Rincón</option>
                <option value="Rio Grande" <?php if($row['pueblo']=='Rio Grande') echo 'selected'; ?>>Rio Grande</option>
                <option value="Sabana Grande" <?php if($row['pueblo']=='Sabana Grande') echo 'selected'; ?>>Sabana Grande</option>
                <option value="Salinas" <?php if($row['pueblo']=='Salinas') echo 'selected'; ?>>Salinas</option>
                <option value="San Germán" <?php if($row['pueblo']=='San Germán') echo 'selected'; ?>>San Germán</option>
                <option value="San Juan" <?php if($row['pueblo']=='San Juan') echo 'selected'; ?>>San Juan</option>
                <option value="San Lorenzo" <?php if($row['pueblo']=='San Lorenzo') echo 'selected'; ?>>San Lorenzo</option>
                <option value="San Sebastián" <?php if($row['pueblo']=='San Sebastián') echo 'selected'; ?>>San Sebastián</option>
                <option value="Santa Isabel" <?php if($row['pueblo']=='Santa Isabel') echo 'selected'; ?>>Santa Isabel</option>
                <option value="Toa alta" <?php if($row['pueblo']=='Toa alta') echo 'selected'; ?>>Toa alta</option>
                <option value="Toa baja" <?php if($row['pueblo']=='Toa baja') echo 'selected'; ?>>Toa baja</option>
                <option value="Trujillo alto" <?php if($row['pueblo']=='Trujillo alto') echo 'selected'; ?>>Trujillo alto</option>
                <option value="Utuado" <?php if($row['pueblo']=='Utuado') echo 'selected'; ?>>Utuado</option>
                <option value="Vega alta" <?php if($row['pueblo']=='Vega alta') echo 'selected'; ?>>Vega alta</option>
                <option value="Vega baja" <?php if($row['pueblo']=='Vega baja') echo 'selected'; ?>>Vega baja</option>
                <option value="Vieques" <?php if($row['pueblo']=='Vieques') echo 'selected'; ?>>Vieques</option>
                <option value="Villalba" <?php if($row['pueblo']=='Villalba') echo 'selected'; ?>>Villalba</option>
                <option value="Yabucoa" <?php if($row['pueblo']=='Yabucoa') echo 'selected'; ?>>Yabucoa</option>
                <option value="Yauco" <?php if($row['pueblo']=='Yauco') echo 'selected'; ?>>Yauco</option>
				
						</select>
					</div>
				</div>
                
			
                <br /><br />
                <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">   
			  <h4 style="text-align:center; color:#00F;"> Escoja el servicio  que mejor describa su Negocio.</h4> 
               <h4 style="text-align:center; color:#00F;"> Si tiene varios servicios en un solo lugar,</h4> 
               <h4 style="text-align:center; color:#00F;"> debe llenar una nueva por cada servicio. </h4> 
               <h4 style="text-align:center; color:#00F;">Por ejemplo, Taller y Auto parts, llene cada uno por individual</h4> 
                <h4 style="text-align:center; color:#00F;">para que los buscadores encuentre sus negocios por su especialidad o servicio.</h4> 
                <h4 style="text-align:center; color:#00F;">Abajo encontrara mas opciones para describir su Negocio.</h4>
                <h4 style="text-align:center; color:#F00;">Favor de revizar cuidadosamente cada sección.</h4> 
                <h4 style="text-align:center; color:#F00;">Cada sección tiene su especialidad para cada categoria.</h4> 
                             <br />

   <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">                
                 <div class="form-group">
					<label for="id_serv" class="col-sm-2 control-label">Categoria Servicio</label>
					<div class="col-sm-10">
						<select class="form-control" id="id_serv" name="id_serv">
                        
		<option value="Accesorios para autos, camiones, motoras" <?php if($row['id_serv']=='Accesorios para autos, camiones, motoras') echo 'selected'; ?>>Accesorios para autos, camiones, motoras</option>
		<option value="Aires Para Autos" <?php if($row['id_serv']=='Aires Para Autos') echo 'selected'; ?>>Aires Para Autos</option>           
		<option value="Alineamiento Para Autos" <?php if($row['id_serv']=='Alineamiento Para Autos') echo 'selected'; ?>>Alineamiento Para Autos</option>       
        <option value="Alquiler Autos, Camiones, Vans" <?php if($row['id_serv']=='Alquiler Autos, Camiones, Vans') echo 'selected'; ?>>Alquiler Autos, Camiones, Vans</option>            
        <option value="Servicio en Carretera, Asistencia en la Carretera" <?php if($row['id_serv']==
		'Servicio en Carretera, Asistencia en la Carretera') echo 'selected'; ?>>Asistencia en la Carretera</option>                           
		<option value="Auto parts" <?php if($row['id_serv']=='Auto parts') echo 'selected'; ?>>Auto parts</option>            
        <option value="Body parts" <?php if($row['id_serv']=='Body parts') echo 'selected'; ?>>Body parts</option> 
        <option value="Centro de Inspección autos" <?php if($row['id_serv']=='Centro de Inspección autos') echo 'selected'; ?>>Centro de Inspección autos</option>           
        <option value="Centro pintura Ppara autos" <?php if($row['id_serv']=='Centro pintura para autos') echo 'selected'; ?>>Centro pintura para autos</option> 
         <option value="Cristales autos"<?php if($row['id_serv']=='Cristales autos') echo 'selected'; ?>>Cristales autos</option>              
        <option value="Copias de Llave, Cerrajeria" <?php if($row['id_serv']=='Copias de Llave, Cerrajeria') echo 'selected'; ?>>Copias de Llave, Cerrajeria</option>             
        <option value="Cotización seguro"<?php if($row['id_serv']=='Cotización seguro') echo 'selected'; ?>>Cotización seguro</option>                   
        <option value="Dealers Autos Nuevos" <?php if($row['id_serv']=='Dealers Autos Nuevos') echo 'selected'; ?>>Dealers Autos Nuevos</option>
        <option value="Dealers Autos Usados" <?php if($row['id_serv']=='Dealers Autos Usados') echo 'selected'; ?>>Dealers Autos Usados</option>
        <option value="Dealers Autos Nuevos y Udados" <?php if($row['id_serv']=='Dealers Autos Nuevos y Udados') echo 'selected'; ?>>Dealers Autos Nuevos y Udados</option>        
        <option value="Dealer Camiones " <?php if($row['id_serv']=='Dealer Camiones ') echo 'selected'; ?>>Dealers Camiones</option>
        <option value="Distribuidor" <?php if($row['id_serv']=='Distribuidor') echo 'selected'; ?>>Distribuidor</option>    
        <option value="Electromecanico" <?php if($row['id_serv']=='Electromecanico') echo 'selected'; ?>>Electromecanico</option> 
        <option value="Financiamiento Autos"<?php if($row['id_serv']=='Financiamiento Autos') echo 'selected'; ?>>Financiamiento Autos</option> 
         <option value="Gestoria" <?php if($row['id_serv']=='Gestoria') echo 'selected'; ?>>Gestoria</option> 
        <option value="Gomeras" <?php if($row['id_serv']=='Gomeras') echo 'selected'; ?>>Gomeras</option>
        <option value="Junkers" <?php if($row['id_serv']=='Junkers') echo 'selected'; ?>>Junkers</option>                                                
        <option value="Lavado autos, Detailing" <?php if($row['id_serv']=='Lavado autos, Detailing') echo 'selected'; ?>>Lavado autos, Detailing</option>
        <option value="Machine shop" <?php if($row['id_serv']=='Machine shop') echo 'selected'; ?>>Machine shop</option>
         <option value="Mangas Hidraulicas" <?php if($row['id_serv']=='Mangas Hidraulicas') echo 'selected'; ?>>Mangas Hidraulicas</option>         
        <option value="Mantenimiento Autos" <?php if($row['id_serv']=='Mantenimiento Autos') echo 'selected'; ?>>Mantenimiento Autos</option>                							
        <option value="Mufflers" <?php if($row['id_serv']=='Mufflers') echo 'selected'; ?>>Mufflers</option> 
        <option value="Piezas Camiones / Truck Parts " <?php if($row['id_serv']=='Piezas Camiones / Truck Parts  ') echo 'selected'; ?>>Piezas Camiones / Truck Parts  </option>                 
        <option value="Prestamo Auto Titulo"<?php if($row['id_serv']=='Prestamo Auto Titulo') echo 'selected'; ?>>Prestamo Auto Titulo</option               
        ><option value="Radiadores / Radiators"<?php if($row['id_serv']=='Radiadores / Radiators') echo 'selected'; ?>>Radiadores / Radiators</option>                             
        <option value="Rotulación de autos"<?php if($row['id_serv']=='Rotulación de autos') echo 'selected'; ?>>Rotulación de autos</option>
        <option value="Servicio de grua" <?php if($row['id_serv']=='Servicio de grua') echo 'selected'; ?>>Servicio de grua</option>
        <option value="Seguro de auto"<?php if($row['id_serv']=='Seguro de auto') echo 'selected'; ?>>Seguro de Auto</option> 
        <option value="Taller Hojalateria y pintura" <?php if($row['id_serv']=='Taller Hojalateria y pintura') echo 'selected'; ?>>Taller Hojalateria y pintura</option>
         <option value="Taller Mecanica Autos" <?php if($row['id_serv']=='Taller Mecanica Autos') echo 'selected'; ?>>Taller Mecanica Autos</option>          
        <option value="Taller Mecanica Camiones" <?php if($row['id_serv']=='Taller Mecanica Camiones') echo 'selected'; ?>>Taller Mecanica Camiones</option
        ><option value="Tapiceria para autos" <?php if($row['id_serv']=='Tapiceria para autos') echo 'selected'; ?>>Tapiceria para autos</option>   
        <option value="Tinte para autos"<?php if($row['id_serv']=='Tinte para autos<') echo 'selected'; ?>>Tinte para autos</option>  
        <option value="Transmisiones automaticas" <?php if($row['id_serv']=='Transmisiones automaticas') echo 'selected'; ?>>Transmisiones automaticas</option>
        <option value="Venta de Herramientas"<?php if($row['id_serv']=='Venta de Herramientas') echo 'selected'; ?>>Venta de Herramientas</option> 
        <option value="Venta de Motoras" <?php if($row['id_serv']=='Venta de Motoras') echo 'selected'; ?>>Venta de Motoras</option>
    
                            
                      	</select>
					</div>
				</div>
                
                
                
               <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;"> 
                 <h4 style="text-align:center; color:#00F;"> Escoja los encasillados que mejor describan su Negocio.</h4> 
                <h4 style="text-align:center; color:#00F;">Aqui por defecto esta marcado como No.</h4>
                <h4 style="text-align:center; color:#00F;"> Si ofrece uno de estos servicios, favor marcar  Si.</h4>
                <h4 style="text-align:center; color:#F00;">Favor de revizar cuidadosamente cada sección.</h4> 
                             <br />
                             	<div class="form-group">
					<label for="serv_dom" class="col-sm-2 control-label">Su negocio ofrece Servicio a Domicilio?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="serv_dom" name="serv_dom" value="Si" <?php if($row['serv_dom']=='Si') echo 'checked'; ?>> Si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="serv_dom" name="serv_dom" value="No" <?php if($row['serv_dom']=='No') echo 'checked'; ?>> No
						</label>
					</div>
				</div>
				
                
                         <br /><br />
                              <div class="form-group">
					<label for="serv_dom" class="col-sm-2 control-label">Su negocio entrega auto a Domicilio?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id=" entrega_dom" name="entrega_dom" value="Si" <?php if($row['entrega_dom']=='Si') echo 'checked'; ?>> Si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id=" entrega_dom" name="entrega_dom" value="No" <?php if($row['entrega_dom']=='No') echo 'checked'; ?>> No
						</label>
					</div>
				</div>
				
                
                         <br /><br /> 

   <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">
   <h4 style="text-align:center; color:#00F;">Solo para Dealers y Aiquiler.</h4> 
			
               <h4 style="text-align:center; color:#00F;">Este departamento es solo para Dealers y Rent a Car.</h4> 
                <h4 style="text-align:center; color:#F00;">Dealers: Si escoge la opción Ventas , servicio y garantia.</h4>
                <h4 style="text-align:center; color:#F00;"> No tiene que marcar otra opción en este departamento </h4>
                <h4 style="text-align:center; color:#F00;"> Si no ofrece los tres servicios, Marque los que le corresponda. </h4>
                <h4 style="text-align:center; color:#F00;"> Para los Rent a Car, favor marcar Aiquiler. </h4>
                 
                
                
					
				<table width="100%" border="0">
  <tr>
   <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Ventas  servicio y garantia" <?php if(strpos($row['intereses'], "Ventas , servicio y garantia ")!== false) echo 'checked'; ?>> Ventas , servicio y garantia
						</label></td>
                        
   <td ><label class="checkbox-inline">
                         <input type="checkbox" id="intereses[]" name="intereses[]" value=" Aiquiler de  "<?php if(strpos($row['intereses'], "Aiquiler de ")!== false) echo 'checked'; ?>> Aiquiler de
						</label></td> 
                         </tr>
   <tr> 
                        
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Ventas"<?php if(strpos($row['intereses'], "Ventas ")!== false) echo 'checked'; ?> > Ventas 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio "<?php if(strpos($row['intereses'], "Servicio")!== false) echo 'checked'; ?>> Servicio 
						</label></td>
                       
                        
 <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Garantia "<?php if(strpos($row['intereses'], "Garantia")!== false) echo 'checked'; ?>> Garantia 
						</label></td>
                   
     
  </tr>
</table>
					


		
                <br />

   <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4 style="text-align:center; color:#00F;"> Solo para Dealers y Rent a Cars. Selecione tipo vehiculo. </h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria de vehiculo a la cual ofrece Aiquiler, Venta o servicio  </h4>
                       <br/>
                       
                        <table width="100%" border="0">
  <tr>
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Autos "<?php if(strpos($row['intereses'], "Autos")!== false) echo 'checked'; ?> > Autos 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camiones "<?php if(strpos($row['intereses'], "Camiones")!== false) echo 'checked'; ?>> Camiones 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Guagua de pasajeros  "<?php if(strpos($row['intereses'], "Guagua de pasajeros ")!== false) echo 'checked'; ?>> Guagua de pasajeros  
						</label></td>
                         </tr>
                          <tr>
                          <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Gruas   "<?php if(strpos($row['intereses'], "Gruas  ")!== false) echo 'checked'; ?>> Gruas   
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="  Vans de carga "<?php if(strpos($row['intereses'], "Vans de carga")!== false) echo 'checked'; ?>> Vans de carga 
						</label></td>
 
   <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motoras "<?php if(strpos($row['intereses'], "Motoras")!== false) echo 'checked'; ?>> Motoras 
						</label></td>
                         </tr>
                          <tr>
                          <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevos    "<?php if(strpos($row['intereses'], "Nuevos  ")!== false) echo 'checked'; ?>> Nuevos    
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usados  "<?php if(strpos($row['intereses'], "Usados ")!== false) echo 'checked'; ?>> Usados 
						</label></td>
 
   
                         </tr>
</table>

						<br />
     

                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        <h4 style="text-align:center; color:#00F;">Solo para Taller.</h4>
                        <h4 style="text-align:center; color:#F00;">Si tiene una especialidad, favor de marcar Servicio especializado,</h4>
                        <h4 style="text-align:center; color:#F00;"> de no tener alguna preferencia o especialidad, no tienen que llenar esta parte.</h4>
				
                       <br/>
                        
                       
                        <table id="checkbox" width="100%" border="0">
                        <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio especializado en :" <?php if(strpos($row['intereses'], "Servicio especializado en")!== false) echo 'checked'; ?>> Servicio especializado en
						</label></td>
                        </table>
                        
                         <hr / style="color:rgb(0,0,255); border:solid 3px;">
                         <h4 style="text-align:center; color:#00F;">Marcas de Autos.</h4>
                         <h4 style="text-align:center; color:#00F;">Solo para Taller, Rent a Cars y Dealers de Autos.</h4>
                          <h4 style="text-align:center; color:#F00;">Favor de escoger las marcar de Autos que ofrecen en Venta,  </h4>
                           <h4 style="text-align:center; color:#F00;">Alquiler o Servicio especializado de ser necesario</h4>
                          <br/>
                         <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                        
                         
  <tr>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Acura" <?php if(strpos($row['intereses'], "Acura")!== false) echo 'checked'; ?>> Acura
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Audi"<?php if(strpos($row['intereses'], "Audi")!== false) echo 'checked'; ?>> Audi
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" BMW"<?php if(strpos($row['intereses'], "BMW")!== false) echo 'checked'; ?> > BMW
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Bentley" <?php if(strpos($row['intereses'], "Bentley")!== false) echo 'checked'; ?>> Bentley
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Buick"<?php if(strpos($row['intereses'], "Buick")!== false) echo 'checked'; ?> > Buick
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cadillac"<?php if(strpos($row['intereses'], "Cadilac")!== false) echo 'checked'; ?> > Cadillac
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chevrolet"<?php if(strpos($row['intereses'], "Chevrolet")!== false) echo 'checked'; ?> > Chevrolet
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chrysler"<?php if(strpos($row['intereses'], "Chrysler")!== false) echo 'checked'; ?> > Chrysler
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Dodge"<?php if(strpos($row['intereses'], "Dodge")!== false) echo 'checked'; ?>> Dodge
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Fiat"<?php if(strpos($row['intereses'], "Fiat")!== false) echo 'checked'; ?>> Fiat
                            </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ford"<?php if(strpos($row['intereses'], "Ford")!== false) echo 'checked'; ?>> Ford
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Gmc"<?php if(strpos($row['intereses'], "Gmc")!== false) echo 'checked'; ?>> Gmc
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Genesis"<?php if(strpos($row['intereses'], "Genesis")!== false) echo 'checked'; ?> > Genesis
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Honda"<?php if(strpos($row['intereses'], "Honda")!== false) echo 'checked'; ?>> Honda
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hyundai"<?php if(strpos($row['intereses'], "Hyundai")!== false) echo 'checked'; ?>> Hyundai
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Infiniti"<?php if(strpos($row['intereses'], "Infiniti")!== false) echo 'checked'; ?>> Infiniti
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Jaguar"<?php if(strpos($row['intereses'], "Jaguar")!== false) echo 'checked'; ?>> Jaguar
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Jeep"<?php if(strpos($row['intereses'], "Jeep")!== false) echo 'checked'; ?>> Jeep
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kia"<?php if(strpos($row['intereses'], "Kia")!== false) echo 'checked'; ?>> Kia
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Land Rover"<?php if(strpos($row['intereses'], "Land Rover")!== false) echo 'checked'; ?>> Land Rover
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Lexus"<?php if(strpos($row['intereses'], "Lexus")!== false) echo 'checked'; ?>> Lexus
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Lincon"<?php if(strpos($row['intereses'], "Lincon")!== false) echo 'checked'; ?>> Lincon
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mini"<?php if(strpos($row['intereses'], "Mini")!== false) echo 'checked'; ?>> Mini
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Masareti"<?php if(strpos($row['intereses'], "Masarreti")!== false) echo 'checked'; ?>> Masareti
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mazda" <?php if(strpos($row['intereses'], "Mazda")!== false) echo 'checked'; ?>> Mazda
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercedes Benz"<?php if(strpos($row['intereses'], "Mercedes Benz")!== false) echo 'checked'; ?>> Mercedes Benz
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercury"<?php if(strpos($row['intereses'], "Mercury")!== false) echo 'checked'; ?>> Mercury
						</label></td>
  </tr>
   <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mitsubichi"<?php if(strpos($row['intereses'], "Mitsubichi")!== false) echo 'checked'; ?>> Mitsubichi
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nissan"<?php if(strpos($row['intereses'], "Nissan")!== false) echo 'checked'; ?>> Nissan
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Porche"<?php if(strpos($row['intereses'], "Porche")!== false) echo 'checked'; ?>> Porche
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ram"<?php if(strpos($row['intereses'], "Ram")!== false) echo 'checked'; ?>> Ram
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Rolls Royce"<?php if(strpos($row['intereses'], "Rolls Royce")!== false) echo 'checked'; ?>> Rolls Royce
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Scion"<?php if(strpos($row['intereses'], "Scion")!== false) echo 'checked'; ?>> Scion
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Subaru"<?php if(strpos($row['intereses'], "Subaru")!== false) echo 'checked'; ?>> Subaru
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Suzuki"<?php if(strpos($row['intereses'], "Suzuki")!== false) echo 'checked'; ?>> Suzuki
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tesia"<?php if(strpos($row['intereses'], "Tesia")!== false) echo 'checked'; ?>> Tesia
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Toyota"<?php if(strpos($row['intereses'], "Toyota")!== false) echo 'checked'; ?>> Toyota
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volkswagen"<?php if(strpos($row['intereses'], "Volkswagen")!== false) echo 'checked'; ?>> Volkswagen
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volvo"<?php if(strpos($row['intereses'], "Volvo")!== false) echo 'checked'; ?>>  Volvo
                             
						</label></td>
  </tr>
</table>

</br>
<hr / style="color:rgb(0,0,255); border:solid 3px;">
 <h4 style="text-align:center; color:#00F;">Marcas de Camiones.</h4>
                         <h4 style="text-align:center; color:#00F;">Solo para Taller, Rent a Cars y Dealers de Camiones.</h4>
                          <h4 style="text-align:center; color:#F00;">Favor de escoger las marcar de Camiones que ofrecen en Venta,  </h4>
                           <h4 style="text-align:center; color:#F00;">Alquiler o Servicio especializado de ser necesario</h4>
                          <br/>
                         <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                         
  <tr>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chevrolet" <?php if(strpos($row['intereses'], "Chevrolet")!== false) echo 'checked'; ?>> Chevrolet
						</label></td>
    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Dodge"<?php if(strpos($row['intereses'], "Dodge")!== false) echo 'checked'; ?>> Dodge
						</label></td>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Ford" <?php if(strpos($row['intereses'], "Ford")!== false) echo 'checked'; ?>> Ford
						</label></td>
                        </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Freightliner"<?php if(strpos($row['intereses'], "Freightliner")!== false) echo 'checked'; ?>> Freightliner
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" GMC" <?php if(strpos($row['intereses'], "GMC")!== false) echo 'checked'; ?>> GMC
						</label></td>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hino" <?php if(strpos($row['intereses'], "Hino")!== false) echo 'checked'; ?>> Hino
						</label></td>
    <td><label class="checkbox-inline">
    </tr>
  <tr>
  <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hummer" <?php if(strpos($row['intereses'], "Hummer")!== false) echo 'checked'; ?>> Hummer
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" International" <?php if(strpos($row['intereses'], "International")!== false) echo 'checked'; ?>> International
						</label></td>

 
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Isuzu" <?php if(strpos($row['intereses'], "Isuzu")!== false) echo 'checked'; ?>> Isuzu
                            </label></td>
                            </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Iveco" <?php if(strpos($row['intereses'], "Iveco")!== false) echo 'checked'; ?>> Iveco
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kenworth" <?php if(strpos($row['intereses'], "Kenworth")!== false) echo 'checked'; ?>> Kenworth
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mack "<?php if(strpos($row['intereses'], "Mack")!== false) echo 'checked'; ?> > Mack 
						</label></td>
                        </tr>
  <tr>
   
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercedes-benz" <?php if(strpos($row['intereses'], "Mercedes-benz")!== false) echo 'checked'; ?>> Mercedes-benz
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nissan" <?php if(strpos($row['intereses'], "Nissan")!== false) echo 'checked'; ?>> Nissan
						</label></td>
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renault" <?php if(strpos($row['intereses'], "Renault")!== false) echo 'checked'; ?>> Renault
						</label></td>
                        </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Scania" <?php if(strpos($row['intereses'], "Scania")!== false) echo 'checked'; ?>> Scania
						</label></td>
 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volvo" <?php if(strpos($row['intereses'], "Volvo")!== false) echo 'checked'; ?>> Volvo
						</label></td>
</tr>
</table>
               
               </br>
<hr / style="color:rgb(0,0,255); border:solid 3px;">
 <h4 style="text-align:center; color:#00F;">Marcas Motoras y Four Tracks .</h4>
                         <h4 style="text-align:center; color:#00F;">Solo para Taller, Rent a Cars y Dealers.</h4>
                          <h4 style="text-align:center; color:#F00;">Favor de escoger las marcar que ofrecen en Venta,  </h4>
                           <h4 style="text-align:center; color:#F00;">Alquiler o Servicio especializado de ser necesario</h4>
                          <br/>
                         <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                         
  <tr>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" BMW " <?php if(strpos($row['intereses'], "BMW")!== false) echo 'checked'; ?>> BMW  

						</label></td>
    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ducati " <?php if(strpos($row['intereses'], "Ducati")!== false) echo 'checked'; ?>> Ducati 
						</label></td>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Guzzi" <?php if(strpos($row['intereses'], "Guzzi")!== false) echo 'checked'; ?>> Guzzi
						</label></td>
                        </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Harley-Davidson " <?php if(strpos($row['intereses'], "Harley-Davidson")!== false) echo 'checked'; ?>> Harley-Davidson 
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Honda" <?php if(strpos($row['intereses'], "Honda")!== false) echo 'checked'; ?>> Honda
						</label></td>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kawasaki " <?php if(strpos($row['intereses'], "Kawasaki")!== false) echo 'checked'; ?>> Kawasaki 
						</label></td>
    <td><label class="checkbox-inline">
    </tr>
  <tr>
  <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" KTM" <?php if(strpos($row['intereses'], "KTM")!== false) echo 'checked'; ?>> KTM
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Suzuki " <?php if(strpos($row['intereses'], "Suzuki")!== false) echo 'checked'; ?>> Suzuki 
						</label></td>

 
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Triumph" <?php if(strpos($row['intereses'], "Triumph")!== false) echo 'checked'; ?>> Triumph
                            </label></td>
                            </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Vento" <?php if(strpos($row['intereses'], "Vento")!== false) echo 'checked'; ?>> Vento
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Vespa" <?php if(strpos($row['intereses'], "Vespa")!== false) echo 'checked'; ?>> Vespa
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Victoria " <?php if(strpos($row['intereses'], "Victoria")!== false) echo 'checked'; ?>> Victoria 
						</label></td>
                        </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Voge" <?php if(strpos($row['intereses'], "Vogeo")!== false) echo 'checked'; ?>> Voge
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Yamaha" <?php if(strpos($row['intereses'], "Yamaha")!== false) echo 'checked'; ?>> Yamaha
						</label></td>
  
    
</tr>
</table>



<br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                         <h4 style="text-align:center; color:#00F;">Auto Parts / Body Parts / Disribuidores de Piezas</h4> 
                          <h4 style="text-align:center; color:#F00;">Si Vende Piezas / Aceite o algun producto con una marca especifica </h4>
                           <h4 style="text-align:center; color:#F00;">y desea promocionarlo, favor de contactarnos para añadir el producto.</h4>
                        <table width="100%" border="0">
 
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Piezas "<?php if(strpos($row['intereses'], "Venta de Piezas")!== false) echo 'checked'; ?>>Venta de Piezas 
						</label></td>
    </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevas"<?php if(strpos($row['intereses'], "Nuevas")!== false) echo 'checked'; ?>> Nuevas
						</label></td>
 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usadas"<?php if(strpos($row['intereses'], "Usadas")!== false) echo 'checked'; ?>> Usadas
						</label></td>
                         </tr>
  <tr>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Re-manufacturadas"<?php if(strpos($row['intereses'], "Re-manufacturadas")!== false) echo 'checked'; ?>> Re-manufacturadas
						</label></td>               
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Originales"<?php if(strpos($row['intereses'], "Originales")!== false) echo 'checked'; ?>> Originales
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Remplazo"<?php if(strpos($row['intereses'], "Remplazo")!== false) echo 'checked'; ?>> Remplazo
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Americanas"<?php if(strpos($row['intereses'], "Americanas")!== false) echo 'checked'; ?>> Americanas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Europeas"<?php if(strpos($row['intereses'], "Europeas")!== false) echo 'checked'; ?>> Europeas
						    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Japonesas"<?php if(strpos($row['intereses'], "Japonesas")!== false) echo 'checked'; ?>> Japonesas
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Koreanas"<?php if(strpos($row['intereses'], "Koreanas")!== false) echo 'checked'; ?>> Koreanas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Electricas"<?php if(strpos($row['intereses'], "Electricas")!== false) echo 'checked'; ?>> Electricas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Raicing"<?php if(strpos($row['intereses'], "Raicing")!== false) echo 'checked'; ?>> Raicing
						</label></td>
  </tr>
  <tr>
  </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Computadoras para autos "<?php if(strpos($row['intereses'], "Computadoras para autos ")!== false) echo 'checked'; ?>> Computadoras para autos 
						</label></td>
  </tr>
  </table>
 <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Venta / Instalación / accesorios </h4>
                         <h4 style="text-align:center; color:#F00;">Selecione especialidades que ofrece su negocio. </h4>
                        
<table width="100%" border="0">
  <tr>
   
  <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta / Instalación de"<?php if(strpos($row['intereses'], "Venta / Instalación de")!== false) echo 'checked'; ?>> Venta / Instalación de
						</label></td> 
    <td><label class="checkbox-inline">
   <input type="checkbox" id="intereses[]" name="intereses[]" value=" Alarmas para autos" <?php if(strpos($row['intereses'], "Alarmas para autos")!== false) echo 'checked'; ?>> Alarmas para autos
						</label></td>
   <td><label class="checkbox-inline">                     
  <input type="checkbox" id="intereses[]" name="intereses[]" value=" Aros para autos"<?php if(strpos($row['intereses'], "Aros para autos")!== false) echo 'checked'; ?>>  Aros para autos
						</label></td>
                            </tr>
  <tr>
  <td><label class="checkbox-inline">                      
                        <input type="checkbox" id="intereses[]" name="intereses[]" value=" Baterías"<?php if(strpos($row['intereses'], "Baterías")!== false) echo 'checked'; ?>>  Baterías
						</label></td>
                                 
  
   
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camaras"<?php if(strpos($row['intereses'], "Camaras")!== false) echo 'checked'; ?>> Camaras
						</label></td> 
  
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Equipo Musica"<?php if(strpos($row['intereses'], "Equipo Musica")!== false) echo 'checked'; ?>> Equipo Musica
						</label></td> 
  
     </tr>
  <tr>
							
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" GPS"<?php if(strpos($row['intereses'], "GPS")!== false) echo 'checked'; ?>> GPS
						</label></td>
   
 
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Luces decorativas"<?php if(strpos($row['intereses'], "Luces decorativas")!== false) echo 'checked'; ?>> Luces decorativas
						</label></td>

<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Rotulacion / Car design"<?php if(strpos($row['intereses'], "Rotulacion / Car design")!== false) echo 'checked'; ?>> Rotulacion / Car design
						</label></td>
  </tr>
  <tr>
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tinte Glass"<?php if(strpos($row['intereses'], "Tinte Glass")!== false) echo 'checked'; ?>> Tinte Glass
						</label></td>                       
  
  </tr>
  </table>
  

                        
                        
         
 

                        
                        
                        
                         
                        
                            
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        <h4 style="text-align:center; color:#00F;">Servicios que ofrece su Taller o negocio </h4>
                        
                         <h4 style="text-align:center; color:#F00;">Selecione los servicios que ofrece su negocio </h4>
                         <h4 style="text-align:center; color:#F00;">Si su negocio no ofrece los tres servicios de Venta instalación y reparación,</h4>
                          <h4 style="text-align:center; color:#F00;"> marque los servicios por individual  </h4>
                         <br/>
                         <table style="margin-left:1%;" width="100%" border="0">
  <tr>
  <tr>
       <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta instalación y reparación de" <?php if(strpos($row['intereses'], "Venta instalación y reparación de")!== false) echo 'checked'; ?>> Venta instalación y reparación de
						</label></td> 
                        </tr> 
  <tr>
        
    <tr>
     
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta"<?php if(strpos($row['intereses'], "Venta")!== false) echo 'checked'; ?> > Venta
						</label></td>
     <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" instalación "<?php if(strpos($row['intereses'], "instalación ")!== false) echo 'checked'; ?>> instalación
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Reparación de"<?php if(strpos($row['intereses'], "Reparación de")!== false) echo 'checked'; ?>> Reparación de
						</label></td>
                        </tr>
                        <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Aire acondicionado"<?php if(strpos($row['intereses'], "Aire acondicionado")!== false) echo 'checked'; ?>> Aire acondicionado
						</label></td>
   
                        
         <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Alternadores"<?php if(strpos($row['intereses'], " Alternadores")!== false) echo 'checked'; ?>> Alternadores
						</label></td>                   
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Aros"<?php if(strpos($row['intereses'], "Aros")!== false) echo 'checked'; ?>> Aros
						</label></td>  
                         </tr>
                        <tr>
                                                           
     <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Carburadores"<?php if(strpos($row['intereses'], "Carburadores")!== false) echo 'checked'; ?>>Carburadores
						</label></td> 
                        
                        
 <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cambio de aceite y filtro"<?php if(strpos($row['intereses'], "Cambio de aceite y filtro")!== false) echo 'checked'; ?>> Cambio de aceite y filtro
						</label></td> 
                       
 <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Computadoras "<?php if(strpos($row['intereses'], "Computadoras ")!== false) echo 'checked'; ?>> Computadoras
						</label></td>  
                        
                        </tr>
                        <tr> 
                                             
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Frenos"<?php if(strpos($row['intereses'], "Frenos")!== false) echo 'checked'; ?>> Frenos
						</label></td> 
              
                        
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Inyectores"<?php if(strpos($row['intereses'], "Inyectores")!== false) echo 'checked'; ?>> Inyectores
						</label></td>
  
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mangas hidraulicas"<?php if(strpos($row['intereses'], "Mangas hidraulicas")!== false) echo 'checked'; ?>> Mangas hidraulicas
						</label></td>  
                        
                      </tr>  
                         <tr>    
 
                        
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motor"<?php if(strpos($row['intereses'], "Motor")!== false) echo 'checked'; ?>> Motor
						</label></td>                                            
 
                       
                           
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mufflers"<?php if(strpos($row['intereses'], "Mufflers")!== false) echo 'checked'; ?>> Muffler
						</label></td>                     
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Power steering"<?php if(strpos($row['intereses'], "Power steering")!== false) echo 'checked'; ?>> Power steering
						</label></td> 
                        </tr>
                          <tr>
                        
                       
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Power windows"<?php if(strpos($row['intereses'], "Power windows")!== false) echo 'checked'; ?>> Power windows
						</label></td>                                                                      
                        
                        
                         
                         
                          <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Radiadores"<?php if(strpos($row['intereses'], "Radiadores")!== false) echo 'checked'; ?>> Radiadores
						</label></td> 
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" sistema electrico"<?php if(strpos($row['intereses'], " sistema electrico")!== false) echo 'checked'; ?>> sistema electrico
						</label></td>      
                         </tr>
                          <tr>
                        
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Starter"<?php if(strpos($row['intereses'], "Starter")!== false) echo 'checked'; ?>> Starter
						</label></td>      
                           
                           <td><label class="checkbox-inline">
<input type="checkbox" id="intereses[]" name="intereses[]" value=" Transmisiones"<?php if(strpos($row['intereses'], "Transmisiones")!== false) echo 'checked'; ?>> Transmisiones
						</label></td>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tren delantero"<?php if(strpos($row['intereses'], "Tren delantero")!== false) echo 'checked'; ?>> Tren delantero
						</label></td>
                        
    
  </tr>
   <tr>
                        
     
      <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cristales" <?php if(strpos($row['intereses'], "Cristales")!== false) echo 'checked'; ?>>  Cristales
						</label></td>  
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cotizacion seguro computarizado" <?php if(strpos($row['intereses'], "Cotizacion seguro computarizado")!== false) echo 'checked'; ?>>  Cotizacion seguro computarizado
						</label></td>  
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Alineamiento" <?php if(strpos($row['intereses'], "Alineamiento")!== false) echo 'checked'; ?>>   Alineamiento
						</label></td>                                   
                        
    
  </tr>
</table>

 <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4 style="text-align:center; color:#00F;"> Solo para Taller. Selecione tipo vehiculo. </h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria de vehiculo a la cual ofrece instalación  Venta o servicio  </h4>
                       <br/>
      <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" para "<?php if(strpos($row['intereses'], "para")!== false) echo 'checked'; ?> > para 
						</label>                  
     <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Auto "<?php if(strpos($row['intereses'], "Auto")!== false) echo 'checked'; ?> > Auto 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camion "<?php if(strpos($row['intereses'], "Camion")!== false) echo 'checked'; ?>> Camion 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="  Guaguas Vans "<?php if(strpos($row['intereses'], "Guaguas Vans")!== false) echo 'checked'; ?>> Guaguas Vans 
						</label>
 
 
   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motoras "<?php if(strpos($row['intereses'], "Motoras")!== false) echo 'checked'; ?>> Motoras 
						</label>
                           <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Gomas</h4>
                         
                        <table width="100%" border="0">
  <tr>
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Gomas Nuevas"<?php if(strpos($row['intereses'], "Venta de Gomas Nuevas")!== false) echo 'checked'; ?>>Venta de Gomas Nuevas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Gomas Usadas"<?php if(strpos($row['intereses'], "Venta de Gomas Usadas")!== false) echo 'checked'; ?>>Venta de Gomas Usadas
						</label> </td>
   
  
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Balanceo de gomas"<?php if(strpos($row['intereses'], "Balanceo de gomas")!== false) echo 'checked'; ?>>Balanceo de gomas
						</label></td>

  </tr>
</table>


 <br />
   <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Gestoria</h4>
                         <h4 style="text-align:center; color:#F00;">Selecione servicios que ofrece su negocio. </h4>
                         <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas / Servicio, favor de marcarlo según sea necesario . </h4>
<table width="100%" border="0">
<tr>
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Verificación de "<?php if(strpos($row['intereses'], "Verificación de ")!== false) echo 'checked'; ?>>  Verificación de						
                            </label></td>
  </tr>
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Multas Auto"<?php if(strpos($row['intereses'], "Multas Auto")!== false) echo 'checked'; ?>>  Multas Auto
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Multas Licencia"<?php if(strpos($row['intereses'], "Multas Licencia")!== false) echo 'checked'; ?>>  Multas Licencia
						</label></td> 
    <td><label class="checkbox-inline">                    
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Traspaso Vehiculo"<?php if(strpos($row['intereses'], "Traspaso Vehiculo")!== false) echo 'checked'; ?>>  Traspaso Vehiculo
						</label></td>                   
     
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renovación Licencia"<?php if(strpos($row['intereses'], "Renovación Licencia")!== false) echo 'checked'; ?>>  Renovación Licencia
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renovación Marbete"<?php if(strpos($row['intereses'], "Renovación Marbete")!== false) echo 'checked'; ?>> Renovación Marbete
						</label></td>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Examen Medico"<?php if(strpos($row['intereses'], "Examen Medico")!== false) echo 'checked'; ?>> Examen Medico
						</label></td>  
                    
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio Abogado"<?php if(strpos($row['intereses'], "Servicio Abogado")!== false) echo 'checked'; ?>> Servicio Abogado
						</label></td> 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta Sellos Rentas Internas"<?php if(strpos($row['intereses'], "Venta Sellos Rentas Internas")!== false) echo 'checked'; ?>> Venta Sellos Rentas Internas
						</label></td>   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Fotos 2x2"<?php if(strpos($row['intereses'], "Fotos 2x2")!== false) echo 'checked'; ?>> Fotos 2x2
						</label></td>                     
                                           
    </tr>
  </table>

 <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Hojalateriaria</h4>
                         <h4 style="text-align:center; color:#F00;">Selecione servicios que ofrece su negocio. </h4>
                         <h4 style="text-align:center; color:#F00;">No es necesario llenar todos los encasillados. </h4>
<table width="100%" border="0">
  
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Enderezamos Chasis"<?php if(strpos($row['intereses'], "Enderezamos Chasis")!== false) echo 'checked'; ?> >  Enderezamos Chasis
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Bumpers"<?php if(strpos($row['intereses'], "Bumpers")!== false) echo 'checked'; ?>>  Bumpers
						</label></td> 
    <td><label class="checkbox-inline">                    
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Carroceria"<?php if(strpos($row['intereses'], "Carroceria")!== false) echo 'checked'; ?>>  Carroceria
						</label></td>                   
     
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Pintamos Carros"<?php if(strpos($row['intereses'], "Pintamos Carros")!== false) echo 'checked'; ?>>  Pintamos Carros
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Completos"<?php if(strpos($row['intereses'], "Completos")!== false) echo 'checked'; ?>> Completos
						</label></td>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Solo Partes"<?php if(strpos($row['intereses'], "Solo Partes")!== false) echo 'checked'; ?>> Solo Partes
						</label></td>  
                    
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Garantia en"<?php if(strpos($row['intereses'], "Garantia en")!== false) echo 'checked'; ?>> Garantia en
						</label></td> 
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mano de Obra"<?php if(strpos($row['intereses'], "Mano de Obra")!== false) echo 'checked'; ?>> Mano de Obra
						</label></td>   
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Pintura"<?php if(strpos($row['intereses'], "Pintura")!== false) echo 'checked'; ?>> Pintura
						</label></td>                    
     </tr>                    
                                           
    <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 3 Meses"<?php if(strpos($row['intereses'], "1 A 3 Meses")!== false) echo 'checked'; ?>> 1 A 3 Meses
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 6 Meses"<?php if(strpos($row['intereses'], "1 A 6 Meses")!== false) echo 'checked'; ?>> 1 A 6 Meses
						</label></td>   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 12 Meses"<?php if(strpos($row['intereses'], "1 A 12 Meses")!== false) echo 'checked'; ?>> 1 A 12 Meses
						</label></td> 
     </tr>
  </table>                       


<br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
 <div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Archivo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
						
						<?php 
							$path = "files/".$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class='glyphicon glyphicon-picture'></span></a>";
										echo "$archivo <a href='#' class='delete' title='Ver Archivo Adjunto' ><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
										echo "<img class='thumb' src='files/$id/$archivo' />";
									}
								}
							}
							
						?>
						
					</div>
				</div>
                             
                              <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-danger" style="margin-left:10%;">Regresar</a>
						<button type="submit" class="btn btn-primary" style="margin-left:30%;">Guardar</button>
					</div>
				</div>
               
			</form>		</div>
        
</body>			
</html>