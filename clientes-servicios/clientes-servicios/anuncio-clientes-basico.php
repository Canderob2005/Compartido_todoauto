<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link rel="stylesheet" type="text/css" href="css/clientes-servicios.css"/>
 <style type="text/css">
	body {
		background-color:#aed6f1;
	}
#logo {
	background-color:#0B0B61;;
	width:100%;
	height:60px;
	
}
#logo img{
	width:40%;
	height:60px;
}
#cabecera {
	background-color:#F00;
	width:100%;
	color:#FFF;
	margin-bottom:40px;
}
#cabecera h2{
	font-size:140%;
	
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
		margin-left:-4px;
		margin-right:75px;
}
#benners td {
	width:50%;
	min-width:150px;
	margin-left:18px;
	
}

.radio-inline {
	margin-left:20px;
	margin-right:20px;
}

    </style>
<body>
<div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="../index.php"><img src="img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
        <a class="nav-link" href="../indexbuscador.php" title="Buscador">Buscador</a>
        </li>
         
          <li class="nav-item active">
         <a class="nav-link" href="intro-clientes.php">Anunciate</a>
        </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Link</a>
          </li>      
         
    </ul>

  </div>
</nav>

</div>
 <div id="cabecera">
           
			  <h2 style="text-align:center; margin-top:-2PX;">REGISTRO CLIENTES BASICO</h2>
            </div>
            
            <form class="form-horizontal" method="POST" action="guardar-cliente-regular.php" enctype="multipart/form-data" autocomplete="">
            <div hidden class="form-group">
					<label for="estatus" class="col-sm-2 control-label">Cliente Activo</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="si"> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="no" checked> NO
						</label>
					</div>
				</div>
                
				<div class="form-group">
					<label for="nombreCliente" class="col-sm-2 control-label">Nombre Cliente</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre y Apellido" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="nombreNegocio" class="col-sm-2 control-label">Nombre Negocio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreNegocio" name="nombreNegocio" placeholder="Nombre del negocio" required>
					</div>
				</div>
                
                		<div class="form-group">
					<label for="pago" class="col-sm-2 control-label">Desea Anuncio de pagó</label>
					
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
					<label for="metodoPago" class="col-sm-2 control-label">metodo pago</label>
					
					<div class="col-sm-2">
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="ATHmovil" required> ATHmovil
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="PayPal"> PayPal
						</label>
                        
                        <label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="No/Aplica">No/Aplica
						</label>
					</div>
				</div>
                
                
                 <div id="benners2" class="form-group">
					<label for="tipoAnuncio" class="col-sm-2 control-label">Tipo Anuncio</label>
					
					<div class="col-sm-10">
						
                
                <table id="benners" width="100%" border="0">
  <tr>
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Banners" > Banners 
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Pop pots"> Poppots
						</label></td>
                        </tr>
</table>
                 <table id="benners" width="100%" border="0">
<tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="posisionamiento ">posisionamiento
						</label></td>
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="No/Aplica">No/Aplica
						</label></td>
  </tr>
</table>
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
                
                
                
                <br /><br />
                
                
                
                 <h4 style="text-align:center; color:#00F;"> Escoja los encasillados que mejor describan su Negocio.</h4> 
                <h4 style="text-align:center; color:#00F;">No es necesario marcar en cada sección.</h4>
                <h4 style="text-align:center; color:#00F;"> Solo marque las secciones que describan su Negocio.</h4>
                <h4 style="text-align:center; color:#F00;">Favor de revizar cuidadosamente cada sección.</h4> 
                             <br />

   <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">
			
               <h4 style="text-align:center; color:#00F;">Marque los encasillados que describan u ofresca su negocio.</h4> 
                <h4 style="text-align:center; color:#00F;">Ejemplo:, venta / servicios o ambas.</h4>
                 <h4 style="text-align:center; color:#F00;">Escoja la opción Venta, si su negocio vende piezas o articulos</h4>
                
                
					
				<table width="100%" border="0">
  <tr>
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value="Venta de" > Venta 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio a"> Servicio 
						</label></td>
    <td>&nbsp;</td>
  </tr>
</table>
					


		
                <br />

   <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4 style="text-align:center; color:#00F;">Selecione tipo vehiculo. </h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria a la cual ofrece Venta o servicio  </h4>
                       
                        <table width="100%" border="0">
  <tr>
    <td> <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value="Autos " > Autos 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Camiones "> Camiones 
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motoras ">Motoras 
						</label></td>
  </tr>
</table>

						<br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                         <h4 style="text-align:center; color:#00F;">Categoria</h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria a la cual ofrece Venta o servicio  </h4>					
                        <br />
                        <table width="100%" border="0">
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Nuevos">Nuevos
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Usados">Usados
						</label></td>
  </tr>
</table>

                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                       <h4 style="text-align:center; color:#00F;">Seleccióne Marca Autos | Camiones</h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Marcas de auto a la cual ofrece Venta o servicio  </h4>
				
                        
                       
                        <table id="checkbox" width="100%" border="0">
                         
  <tr>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value="Acura" >Acura
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Audi">Audi
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="BMW" >BMW
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Bentley" >Bentley
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Buick" >Buick
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cadillac" >Cadillac
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Chevrolet" >Chevrolet
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Chrysler" >Chrysler
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Dodge">Dodge
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Fiat">Fiat
                            </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Ford">Ford
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gmc">Gmc
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Genesis" >Genesis
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Honda">Honda
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Hyundai">Hyundai
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Infiniti">Infiniti
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Jaguar">Jaguar
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Jeep">Jeep
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Kia">Kia
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Piezas  Land Rover">Land Rover
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Lexus">Lexus
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Lincon">Lincon
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mini">Mini
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Masareti">Masareti
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mazda" >Mazda
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mercedes Benz">Mercedes Benz
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mercury">Mercury
						</label></td>
  </tr>
   <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Mitsubichi">Mitsubichi
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Nissan">Nissan
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Porche">Porche
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Ram">Ram
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Rolls Royce">Rolls Royce
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Scion">Scion
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Subaru">Subaru
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Suzuki">Suzuki
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tesia">Tesia
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Toyota">Toyota
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Volkswagen">Volkswagen
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Volvo">  Volvo
                             
						</label></td>
  </tr>
</table>
 <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Venta / Instalación / accesorios </h4>
                         <h4 style="text-align:center; color:#F00;">Selecione especialidades que ofrece su negocio. </h4>
                         <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas, favor de marcarlo. </h4>
<table width="100%" border="0">
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Instalación">Instalación de						
                            </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Alarmas" >Alarmas  autos
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Diseño carro, Cars Design	">Rotulación de autos					
                            </label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Equipo Musica">Equipo Musica
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tinte" > Tinte
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de Arros">  Arros
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Venta Marvete"> Aire acondicionado
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cristales de autos"> Cristales autos
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Luces"> Luces decorativas
						</label></td>
  </tr>
  </table>
   <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                                   <h4 style="text-align:center; color:#00F;"> Especialidad </h4>  
                                    <h4 style="text-align:center; color:#F00;">Selecione los servicios que ofrece su negocio  </h4>   
  <table width="100%" border="0">                                 
  <tr>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value="Alineamiento" > Alineamiento Autos
                         </label></td>
    <td><input type="checkbox" id="intereses[]" name="intereses[]" value="Cotización seguro"> Cotización seguro
						</label></td>
    <td><input type="checkbox" id="intereses[]" name="intereses[]" value="Inspección"> Inspección autos
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Tren Delantero"> Tren delantero
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Power steering">Power steering
                            </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Inspección">Frenos
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="electromecanico">Eletromecanico
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cerrajero, llaves, copias">Cerrajero
						</label></td>
    <td>&nbsp;<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="lavado de autos">Lavado de autos
						</label>
</table>

                        
                        
         <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                            
                          <h4 style="text-align:center; color:#00F;">Venta Piezas</h4>
                         <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas, favor de marcarlo </h4>
                        <table width="100%" border="0">
 
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Piezas ">Piezas 
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Originales">Originales
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Remplazo">Remplazo
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Autos, carros"> Autos
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="camiones"> Camiones
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevas"> Nuevas
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usadas"> Usadas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Re-manufacturadas"> Re-manufacturadas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="electricas"> Electricas
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motoras"> Motoras

						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Body, Carroceria">Body
						</label></td>
    <td>&nbsp;</td>
  </tr>
  </table>
 

                        
                        
                        
                         
                        
                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                         <h4 style="text-align:center; color:#00F;">Reparación</h4>
                         <h4 style="text-align:center; color:#F00;">Selecione los servicios que ofrece su negocio  </h4>
                         <table width="100%" border="0">
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Aire acondicionado">Reparacón de
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Aire acondicionado">Aire acondicionado
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Motor">Motor
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Transmisiones">Transmisiones
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de computadoras de autos">computadoras
						</label></td>
    <td>&nbsp;</td>
  </tr>
</table>

                        <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
               <h4 style="text-align:center; color:#00F;">Gomeras</h4>
              <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas, favor de marcarlo </h4>
              <h4 style="text-align:center; color:#F00;">Selecione los servicios que ofrece su negocio  </h4>
                         
                        <table width="100%" border="0">
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gomas Nuevas">Gomas Nuevas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Gomas Usadas">Gomas Usadas
						</label> </td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparacion de Gomas">Reparacón de Gomas 
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Reparación de arros"> Reparación de arros
						</label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

 <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
              <h4 style="text-align:center; color:#00F;">Servicios Especializados</h4>
              <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas, favor de marcarlo </h4>
              <h4 style="text-align:center; color:#F00;">Selecione los servicios que ofrece su negocio  </h4>
                         
                        <table width="100%" border="0">
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Seguros para Autos">Seguros para Autos
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Financiamiento Autos">Financiamiento Autos
						</label> </td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Distribuidor">Distribuidor 
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Servicio de remolque grua">Servicio de remolque
						</label></td>
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Alquiler de Autos">Alquiler de Autos
						</label>
                        </td>
                        
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Alquiler de Camiones">Alquiler de Camiones
						</label>
                        </td>
    <td>&nbsp;</td>
  </tr>
</table>
                        
					</div>
				</div>
                        

                             
                              <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="anuncio-opcion.php" class="btn btn-danger" style=" float:left;">Regresar</a>
						<button type="submit" class="btn btn-primary" style=" float:right;">Guardar</button>
					</div>
				</div>
               
			</form>
		
        
</body>
</html>