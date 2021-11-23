<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../cliente-nuevo/css/bootstrap.min.css" rel="stylesheet">
<link href="../cliente-nuevo/formulario-cliente-nuevo.css" rel="stylesheet" />
		<link href="../cliente-nuevo/css/bootstrap-theme.css" rel="stylesheet">
		<script src="../cliente-nuevo/js/jquery-3.1.1.min.js"></script>
		<script src="../cliente-nuevo/js/bootstrap.min.js"></script>	

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anunciate Aqui.....</title>


<body>
<h1 style="color:rgb(0,0,255);">Anunciate Aqui.....</h1>


<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>

			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Cliente</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre y Apellido" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="nombre-negocio" class="col-sm-2 control-label">Nombre Negocio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreNegocio" name="nombreNegocio" placeholder="Nombre del negocio" required>
					</div>
				</div>
                
                		<div class="form-group">
					<label for="pago" class="col-sm-2 control-label">Desea Anuncio pagando</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="pago" name="pago" value="si" required> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="pago" name="pago" value="no"> NO
						</label>
					</div>
				</div>
				
                <div class="form-group">
					<label for="id_serv" class="col-sm-2 control-label">Categoria Servicio</label>
					<div class="col-sm-10">
						<select class="form-control" id="id_serv" name="id_serv" required>
                        <option value="" >Seleccione Servicios</option>
				<option value="Accesorios">Accesorios</option>
                        
				<option value="Aire autos">Aire autos</option>
                            
				<option value="Alineamiento">Alineamiento</option>
                            
            <option value="Alquiler">Alquiler</option>
                            
			<option value="Auto parts">Auto parts</option>
                            
				<option value=>Body parts</option>
                            
				<option value="Centro pintura">Centro pintura</option>
                
                <option value="Dealers Autos">Dealers Autos</option>
                            
    <option value="Dealer Camiones ">Dealers Camiones</option>
    
    <option value="Distribuidor">Distribuidor</option>
                            
            <option value="Lavado autos ">Lavado auto</option>
                            
		<option value="Electromecanico">Electro-mecanico</option>
                            
							<option value="Gomeras">Gomeras</option>
                            
      <option value="Servicio de grua">Servicio de grua</option>
                            
		<option value="Hojalateria">Hojalateria</option>
                            
			<option value="Inspeccion">Inspección</option>
                            
                            <option value="Junkers">Junkers</option>
                            
                            
		<option value="Servicio Llave, cerrajeria">Servicio Llave, cerrajeria</option>
        
         <option value="Machine shop">Machine shop</option>
                            
<option value="Mangas Hidraulicas">Mangas Hidraulicas</option>
                            
           <option value="Mantenimiento">Mantenimiento</option>
                            
							<option value="Mecanica">Mecanica</option>
                            
							<option value="Motoras">Motoras</option>
                            
                            <option value="Mufflers">Mufflers</option>
                            
<option value="Tapiceria para autos">Tapiceria para autos</option>
                            
	<option value="Transmisiones automaticas" >Transmisiones automaticas</option>
                            
                         
						</select>
					</div>
				</div>
                
                
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email"  required>
                        
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono Cliente</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonoCliente" name="telefonoCliente" placeholder="Telefono Cliente" required>
					</div>
				</div>
				
                <div class="form-group">
					<label for="numero" class="col-sm-2 control-label">Telefono Negocio</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefonoNegocio" name="telefonoNegocio" placeholder="Telefono Negocio" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="dirreccion" class="col-sm-2 control-label">Direccion Negocio.<p style="color:#F00;">No incluir pueblo</p> </label>
					<div class="col-sm-10">
		<input type="text" class="form-control" id="direccionNegocio" name="direccionNegocio" placeholder="Direccion Negocio. No incluir pueblo" required >
					</div>
				</div>
                
				
				 <div class="form-group">
					<label for="pueblo" class="col-sm-2 control-label">Pueblo Negocio</label>
					<div class="col-sm-10">
						<select class="form-control" id="pueblo" name="pueblo" required>
                         <option value="" >Seleccione Pueblo</option>
                  <option value="Adjuntas">Adjuntas</option>
                 <option value="Aguada">Aguada</option>
                 <option value="Aguadilla">Aguadilla</option>
				<option value="Aguas buenas">Aguas buenas</option>
                <option value="Aibonito">Aibonito</option>
                <option value="Arecibo">Arecibo</option>
                <option value="Arroyo">Arroyo</option>
                <option value="Añasco">Añasco</option>
                <option value="Barceloneta">Barceloneta</option>
                <option value="Barranquitas">Barranquitas</option>
                <option value="Bayamón">Bayamón</option>
                <option value="Cabo Rojo">Cabo Rojo</option>
                <option value="Caguas">Caguas</option>
                <option value="Camuy">Camuy</option>
                <option value="Canóvanas">Canóvanas</option>
                <option value="Carolina">Carolina</option>
                <option value="Cataño">Cataño</option>
                <option value="Cayey">Cayey</option>
                <option value="Ceiba">Ceiba</option>
                <option value="Ciales">Ciales</option>
                <option value="Cidra">Cidra</option>
                <option value="Coamo">Coamo</option>
                <option value="Comerío">Comerío</option>
                <option value="Corozal">Corozal</option>
                <option value="Culebra">Culebra</option>
                <option value="Dorado">Dorado</option>
                <option value="Fajardo">Fajardo</option>
                <option value="Florida">Florida</option>
                <option value="Guayama">Guayama</option>
                <option value="Guayanilla">Guayanilla</option>
                <option value="Guaynabo">Guaynabo</option>
                <option value="Gurabo">Gurabo</option>
                <option value="Guánica">Guánica</option>
                <option value="Hatillo">Hatillo</option>
                <option value="Hormigueros">Hormigueros</option>
                <option value="Humacao">Humacao</option>
                <option value="Isabela">Isabela</option>
                <option value="Jayuya">Jayuya</option>
                <option value="Juana Díaz">Juana Díaz</option>
                <option value="Juncos">Juncos</option>
                <option value="Lajas">Lajas</option>
                <option value="Lares">Lares</option>
                <option value="Las Marías">Las Marías</option>
                <option value="Las Piedras">Las Piedras</option>
                <option value="Loiza">Loiza</option>
                <option value="Luquillo">Luquillo</option>
                <option value="Manatí">Manatí</option>
                <option value="Maricao">Maricao</option>
                <option value="Maunabo">Maunabo</option>
                <option value="Mayagüez">Mayagüez</option>
                <option value="Moca">Moca</option>
                <option value="Morovis">Morovis</option>
                <option value="Naguabo">Naguabo</option>
                <option value="Naranjito">Naranjito</option>
                <option value="Orocovis">Orocovis</option>
                <option value="Patillas">Patillas</option>
                <option value="Peñuelas">Peñuelas</option>
                <option value="Ponce">Ponce</option>
                <option value="Quebradillas">Quebradillas</option>
                <option value="Rincón">Rincón</option>
                <option value="Rio Grande">Rio Grande</option>
                <option value="Sabana Grande">Sabana Grande</option>
                <option value="Salinas">Salinas</option>
                <option value="San Germán">San Germán</option>
                <option value="San Juan">San Juan</option>
                <option value="San Lorenzo">San Lorenzo</option>
                <option value="San Sebastián">San Sebastián</option>
                <option value="Santa Isabel">Santa Isabel</option>
                <option value="Toa alta">Toa alta</option>
                <option value="Toa baja">Toa baja</option>
                <option value="Trujillo alto">Trujillo alto</option>
                <option value="Utuado">Utuado</option>
                <option value="Vega alta">Vega alta</option>
                <option value="Vega baja">Vega baja</option>
                <option value="Vieques">Vieques</option>
                <option value="Villalba">Villalba</option>
                <option value="Yabucoa">Yabucoa</option>
                <option value="Yauco">Yauco</option>
				
						</select>
					</div>
				</div>
                
				<div class="form-group">
					<label for="serv_dom" class="col-sm-2 control-label">¿Brinda Servicio Domicilio?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="serv_dom" name="serv_dom" value="SI" required> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="serv_dom" name="serv_dom" value="NO"> NO
						</label>
					</div>
				</div>
                
                
                
                
				
				<div  class="form-group">
                <h4 style="margin-left:19%; color:#00F;">Favor de escoger las marcas de autos,camiones de venta o servicios que ofrece su negocio</h4>
                <h4 style="margin-left:19%; color:#f00;">Marque los encasillados que describan u ofresca su negocio. Ejemplo: servicios, venta,reparación ect.</h4>
                <br />
                
					<label  for="intereses" class="col-sm-2 control-label">Sección Dealers/Servicios</label>
				
					<div  class="col-sm-10">
                    
						<label class="checkbox-inline">
							<input  type="checkbox"  value="" required >Click Aqui y Escoja los encasillados correspondiente 
						</input>&nbsp; &nbsp; &nbsp; 
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4>Selección servicio que ofrece su negocio</h4>
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Venta " >Venta 
						</label>&nbsp; &nbsp; &nbsp; 
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="servicio ">Servicio
						</label>
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4>Selecione Cateroria a la cual ofrece servicio o Venta</h4>
                        <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value="Autos " > Autos 
						</label>&nbsp; &nbsp; &nbsp;
                        
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Camiones "> Camiones 
						</label>&nbsp; &nbsp; &nbsp; 
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motoras ">Motoras 
						</label>&nbsp; &nbsp; &nbsp; 
						<br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        <h4>Categoria</h4>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Nuevos">Nuevos
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Usados">Usados
						</label>
						
                        
                        
                       
                       
                       
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4>Seleccióne Marca Autos/ Camiones Venta O Servicios Especializado</h4>
				
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Acura" >Acura
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Audi">Audi
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="BMW" >BMW
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Bentley" >Bentley
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Buick" >Buick
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cadillac" >Cadillac
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Chevrolet" >Chevrolet
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Chrysler" >Chrysler
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Dodge">Dodge
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Fiat">Fiat
                            </label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Ford">Ford
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gmc">Gmc
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Genesis" >Genesis
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Honda">Honda
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                          <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Hyundai">Hyundai
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Infiniti">Infiniti
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Jaguar">Jaguar
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Jeep">Jeep
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Kia">Kia
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Piezas  Land Rover">Land Rover
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Lexus">Lexus
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Lincon">Lincon
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mini">Mini
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Masareti">Masareti
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mazda" >Mazda
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mercedes Benz">Mercedes Benz
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mercury">Mercury
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mitsubichi">Mitsubichi
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Nissan">Nissan
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Porche">Porche
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Ram">Ram
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Rolls Royce">Rolls Royce
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Scion">Scion
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Subaru">Subaru
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Suzuki">Suzuki
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tesia">Tesia
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Toyota">Toyota
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Volkswagen">Volkswagen
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Volvo">  Volvo
						</label>
                        
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4>Venta / Instalación / accesorios </h4>
                         
                         
                         
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Instalación">Venta Instalación de						
                            </label>&nbsp; &nbsp; &nbsp; &nbsp;  
                        
                          
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Alarmas" >Alarmas
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                         
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Diseño carro, Cars Design	">Diseño carro, Cars Design					
                            </label>&nbsp; &nbsp; &nbsp; &nbsp;
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Equipo Musica">Equipo Musica
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                          <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tinte" > Tinte
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                         
                          
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de Arros">  Arros
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                          <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Venta Marvete"> Aire acondicionado
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Frenos"> Frenos
						</label>
                         
                         <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                                   <h4>Servicios Especialidados</h4>            
                         
                         <label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value="Alineamiento" > Alineamiento
                         </label>&nbsp; &nbsp; &nbsp; &nbsp;

							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cotización seguro"> Cotización seguro
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Inspección"> Inspección
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tren Delantero"> Tren delantero
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Power steering">Power steering
                            </label>&nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Inspección">Frenos
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="electromecanico">Eletromecanico
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cerrajero, llaves, copias">Cerrajero
						</label>
                        
                        
         <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                            
                        <h4>Venta Piezas</h4>
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Venta de">Venta de
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Piezas ">Piezas 
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        		<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Originales">Originales
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Remplazo">Remplazo
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Autos, carros"> Autos
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="camiones"> Camiones
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevas"> Nuevas
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usadas"> Usadas
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Re-manufacturadas"> Re-manufacturadas
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="electricas"> Electricas
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motoras"> Motoras
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Body, Carroceria">Body
						</label>
                        
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4>Reparación</h4>
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Aire acondicionado">Reparacón de
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                          <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Aire acondicionado">Aire acondicionado
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motor">Motor
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Transmisiones">Transmisiones
						</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        
                        
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de computadoras de autos">computadoras
						</label>
                        
                         
							
                        
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
             <h4>Gomeras</h4>
                         
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gomas Nuevas">Gomas Nuevas
						</label>   &nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gomas Usadas">Gomas Usadas
						</label> &nbsp; &nbsp; &nbsp; &nbsp;
                        
                        <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de Gomas">Reparacón de Gomas 
						</label> &nbsp; &nbsp; &nbsp; &nbsp;
                        
                         <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparación de arros"> Reparación de arros
						</label>
                     
                        
                        
                        
                      <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
                        
					</div>
				</div>
                
              
                
              
                
                
                
                
                
                
                
                
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
               
			</form>
		</div>
</body>
</html>