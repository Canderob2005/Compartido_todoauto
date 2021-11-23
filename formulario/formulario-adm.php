<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]--><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulario Clientes</title>

<link href="css/formulario.css" rel="stylesheet" type="text/css">
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="todoautopr.ico"/>

<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="../js/ddba1ed91f.js" crossorigin="anonymous"></script>
<style>
	
@font-face {
    font-family: "Roboto-BlackItalic";
    src: url('fonts/Roboto-BlackItalic.ttf');
}
@font-face {
    font-family: "Roboto-Medium";
    src: url('fonts/Roboto-Medium.ttf');
}

body {
	
	
	
}

</style> 
 <style>
@media only screen and (min-width: 320px) {
	.checkbox-inline{
		margin-left:2%;
		font-size:12px;
		font-family:'Roboto-Medium';
		color:#00F;
	}
	.radio-inline {
			margin-left:2%;
		font-size:12px;
		font-family:'Roboto-Medium';
		color:#00F;
	}
	.col-sm-2 {
		margin-left:2%;
		font-size:12px;
		min-width:100%;
		font-family:'Roboto-Medium';
		color:#00F;
	}
	body h1{
	font-size:16px;
	font-family:'Roboto-Medium';
		color:#00F;
  text-align:center;
}
body h4{
	font-size:14px;
	font-family:'Roboto-Medium';
		color:#00F;
  text-align:center;
}
#cabecera h1{
	font-size:30px;
	font-family:'Roboto-Medium';
  font-weight:300;	
  margin-left:10px;
  color:#fff;
}
#contenedor h1{
	font-size:30px;
	font-family:'Roboto-Medium';
  font-weight:800;	
  margin-left:10px;
  color:#00f;
}
#contenedor h2{
	font-size:20px;
	font-family:'Roboto-Medium';
  font-weight:300;	
  margin-left:10px;
  color:#00f;
}
}
@media only screen and (min-width: 480px) {
	.checkbox-inline{
		margin-left:2%;
		font-size:15px;
	}
	.radio-inline {
			margin-left:2%;
		font-size:15px;
	}
	.col-sm-2 {
		margin-left:2%;
		font-size:15px;
		min-width:100%;
	}
	body h1{
	font-size:18px;
	font-family:'Roboto';
  font-weight:300;
  text-align:center;
}
body h4{
	font-size:16px;
	font-family:'Roboto';
  font-weight:300;
  text-align:center;
}
}
@media only screen and (min-width: 769px) {

	.checkbox-inline{
		margin-left:5%;
		font-size:20px;
		font-family:'Roboto-Medium';
		color:#00F;
	}
	.radio-inline {
			margin-left:5%;
		font-size:20px;
		font-family:'Roboto-Medium';
		color:#00F;
	}
	.col-sm-2 {
		margin-left:5%;
		font-size:20px;
		min-width:100%;
		font-family:'Roboto-Medium';
		color:#00F;
	}
		
	body h1{
		
	font-size:22px;
	font-family:'Roboto-Medium';
  font-weight:300;
  text-align:center;
}
body h4{
	font-size:20px;
	font-family:'Roboto-Medium';
  font-weight:300;
  text-align:center;
}
#cabecera h1{
	font-size:34px;
	font-family:'Roboto-Medium';
  font-weight:300;	
  margin-left:10px;
  color:#fff;
}
}
</style>
</head>
<body>
<div class="gridContainer clearfix">
  <header>
    <div id="menu"><nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="../index.php"><img src="../img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
        <a class="nav-link" href="../indexbuscador.php" title="Buscador"><i class="fa fa-fw fa-search"></i>Buscador</a>
        </li>
         
          <li class="nav-item active">
        <a class="nav-link" href="formulario.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>       
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="formulario.php">Anunciate</a>
          <a class="dropdown-item" href="../clientes-servicios/servicio-cliente.php">Servicio</a>
          <a class="dropdown-item" href="../contenido/quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="../contenido/sugerencias.php">Tips y Sujerencias</a>
         </div>
         
      </li>
       
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactanos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=17874597059"><i class="fab fa-2x fa-whatsapp"></i></a>
          <a class="dropdown-item"  href="mailto:t.autopr@gmail.com"><i class="far fa-2x fa-envelope"></i></a>
           <a class="dropdown-item" href="tel:7874597059"><i class="fas fa-2x fa-mobile-alt"></i></a>
            <a class="dropdown-item"href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fab fa-2x fa-facebook-square"></i></a>
            </div>
             
      </li>
    </ul>

  </div>
</nav></div>
    <div id="cabecera"><h1>Registro cliente nuevo</h1></div>
  </header>
  <div id="contenedor">
  
  <h1 style="text-align:center; margin-top:-2PX;">Bienvenido</h1>
    <h2 style="text-align:center; margin-top:-2PX;">Favor de leer cuidadosamentes antes de marcar los encasillados. </h2>
             
            </div>
			
			 <form class="form-horizontal"  method="POST" action="guardar.php" enctype="multipart/form-data" autocomplete="">
           <div  class="form-group">
					<label for="estatus" class="col-sm-2 control-label"> Cliente Activo</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="si" checked> si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="estatus" name="estatus" value="No" > No
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
							<input type="radio" id="pago" name="pago" value="no" checked> NO
						</label>
                        
					</div>
				</div>
                                
                <div class="form-group">
					<label for="metodoPago" class="col-sm-2 control-label">Metodo de pago</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="ATHmovil" required> ATHmovil
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="PayPal"> PayPal
						</label>
                        
                        <label class="radio-inline">
							<input type="radio" id="metodoPago" name="metodoPago" value="No/Aplica" checked> No/Aplica
						</label>
					</div>
				</div>
                
                
                 <div id="benners2" class="form-group">
					<label for="tipoAnuncio" class="col-sm-2 control-label">Tipo Anuncio</label>
					
					<div class="col-sm-2">
						
                
                
  
    <label class="checkbox-inline">
                        <input  type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Banners" > Banners 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="posicionamiento"> Posicionamiento
						</label>
                        

                
<label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="Pop pots"> Anuncios pop-up
						</label>
    
                        
    <label class="checkbox-inline">
							<input type="checkbox" id="tipoAnuncio[]" name="tipoAnuncio[]" value="No/Aplica" checked> No/Aplica
						</label>

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

					<label for="dirreccion" class="col-sm-2 control-label">Direccion fisica del Taller o Negocio.</label>
					<div class="col-sm-10">
		<input type="text" class="form-control" id="direccionNegocio" name="direccionNegocio" placeholder=" Favor no incluir el pueblo " required >
					</div>
				</div>
                
				
				 <div class="form-group">
					<label for="pueblo" class="col-sm-2 control-label">Pueblo</label>
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
                <br /><br />
                <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">   
			  <h1 style="text-align:center; color:#00F;"> Escoja el servicio  que mejor describa su Negocio.</h1> 
               <h4 style="text-align:center; color:#00F;"> Si tiene varios servicios en un solo lugar,</h4> 
               <h4 style="text-align:center; color:#00F;"> debe llenar una nueva por cada servicio. </h4> 
               <h4 style="text-align:center; color:#00F;">Por ejemplo, Taller y Auto parts, llene cada uno por individual</h4> 
                <h4 style="text-align:center; color:#00F;">para que los buscadores encuentre sus negocios por su especialidad o servicio.</h4> 
                <h4 style="text-align:center; color:#00F;">Abajo encontrara mas opciones para describir su Negocio.</h4>
                <h4 style="text-align:center; color:#F00;">Favor de revizar cuidadosamente cada sección.</h4> 
                <h4 style="text-align:center; color:#F00;">Cada sección tiene su especialidad para cada categoria.</h4>
                             <br />

                 
                 <div class="form-group">
					<label for="id_serv" class="col-sm-2 control-label">Categoria Servicio</label>
					<div class="col-sm-10">
						<select class="form-control" id="id_serv" name="id_serv">
                         <option value="" >Seleccione Servicios</option>
		<option value="Accesorios para autos, camiones, motoras" >Accesorios para autos, camiones, motoras</option>
		<option value="Aires para autos">Aires Para Autos</option>           
		<option value="Alineamiento Para Autos" >Alineamiento Para Autos</option>       
        <option value="Alquiler Autos, Camiones, Vans">Alquiler Autos, Camiones, Vans</option>            
        <option value="Servicio en Carretera, Asistencia en la Carretera" >Asistencia en la Carretera</option>                           
		<option value="Auto parts" >Auto parts</option>            
        <option value="Body parts" >Body parts</option> 
        <option value="Centro de Inspección autos">Centro de Inspección autos</option>           
        <option value="Centro Pintura para autos" >Centro pintura para autos</option> 
         <option value="Cristales autos">Cristales autos</option>              
        <option value="Copias de Llave, Cerrajeria" >Copias de Llave, Cerrajeria</option>             
        <option value="Cotización seguro">Cotización seguro</option>                   
        <option value="Dealers Autos Nuevos">Dealers Autos Nuevos</option>
        <option value="Dealers Autos Usados">Dealers Autos Usados</option>
        <option value="Dealers Autos Nuevos y Udados">Dealers Autos Nuevos y Udados</option>        
        <option value="Dealer Camiones ">Dealers Camiones</option>
        <option value="Distribuidor" >Distribuidor</option>    
        <option value="Electromecanico">Electromecanico</option> 
        <option value="Financiamiento Autos">Financiamiento Autos</option> 
         <option value="Gestoria" >Gestoria</option> 
        <option value="Gomeras">Gomeras</option>
        <option value="Junkers" >Junkers</option>                                                
        <option value="Lavado autos, Detailing">Lavado autos, Detailing</option>
        <option value="Machine shop">Machine shop</option>
         <option value="Mangas Hidraulicas" >Mangas Hidraulicas</option>         
        <option value="Mantenimiento Autos">Mantenimiento Autos</option>                							
        <option value="Mufflers" >Mufflers</option> 
        <option value="Piezas Camiones / Truck Parts  ">Piezas Camiones / Truck Parts  </option>                            
        <option value="Prestamo Auto Titulo">Prestamo Auto Titulo</option               
        ><option value="Radiadores / Radiators">Radiadores / Radiators</option>                             
        <option value="Rotulación de autos">Rotulación de autos</option>
        <option value="Servicio de grua" >Servicio de grua</option>
        <option value="Seguro de auto">Seguro de Auto</option> 
        <option value="Taller Hojalateria y pintura">Taller Hojalateria y pintura</option>
         <option value="Taller Mecanica Autos" >Taller Mecanica Autos</option>          
        <option value="Taller Mecanica Camiones">Taller Mecanica Camiones</option
        ><option value="Tapiceria para autos" >Tapiceria para autos</option>   
        <option value="Tinte para autos">Tinte para autos</option>  
        <option value="Transmisiones automaticas" >Transmisiones automaticas</option>
        <option value="Venta de Herramientas">Venta de Herramientas</option> 
        <option value="Venta de Motoras" >Venta de Motoras</option>
    
                            
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
							<input type="radio" id="serv_dom" name="serv_dom" value="Si" > Si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="serv_dom" name="serv_dom" value="No" checked > No
						</label>

					</div>
				</div>
				
                
                         <br /><br />
                              <div class="form-group">
					<label for="serv_dom" class="col-sm-2 control-label">Su negocio entrega auto a Domicilio?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id=" entrega_dom" name="entrega_dom" value="Si" > Si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id=" entrega_dom" name="entrega_dom" value="No" checked> No
						</label>
					</div>
				</div>
				
                
                         <br /><br /> 

   <hr / style="color:rgb(0,0,255); border:solid 3px; width:100%;">
			
                <h4 style="text-align:center; color:#00F;">Este departamento es solo para Dealers y Rent a Car.</h4> 
                <h4 style="text-align:center; color:#F00;">Dealers: Si escoge la opción Ventas , servicio y garantia.</h4>
                <h4 style="text-align:center; color:#F00;"> No tiene que marcar otra opción en este departamento </h4>
                <h4 style="text-align:center; color:#F00;"> Si no ofrece los tres servicios, Marque los que le corresponda. </h4>
                <h4 style="text-align:center; color:#F00;"> Para los Rent a Car, favor marcar Aiquiler. </h4>
                 
                 <br />
                
                
					<div class="form-check">
				
                <label class="checkbox-inline" >
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Ventas  servicio y garantia" > Ventas  servicio y garantia
						</label>
                        
 

 

   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Aiquiler de  "> Aiquiler de
						</label>
    
                      
 
 
  <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Ventas " > Ventas 
						</label>
   
                          
                        
     <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio "> Servicio 
						</label> 
                       
                                            
   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Garantia "> Garantia 
						</label> 

					
</div>

		
                <br />

                        
                        <h4 style="text-align:center; color:#00F;"> Solo para Dealers y Rent a Cars. Selecione tipo vehiculo. </h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria de vehiculo a la cual ofrece Aiquiler, Venta o servicio  </h4>
                       <br/>
                       
  
     <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Autos " > Autos 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camiones "> Camiones 
						</label>
     <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Guagua de pasajeros "> Guagua de pasajeros 
						</label> 
                        
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Gruas "> Gruas 
						</label>                                      
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Vans de carga "> Vans de carga 
						</label>
  
  
   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motoras "> Motoras 
						</label>
                         
                        
   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevos  "> Nuevos 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usados  "> Usados 
						</label>
 
						<br />
     

                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        <h4 style="text-align:center; color:#00F;">Solo para Taller.</h4>
                        <h4 style="text-align:center; color:#F00;">Si tiene una especialidad, favor de marcar Servicio especializado,</h4>
                        <h4 style="text-align:center; color:#F00;"> de no tener alguna preferencia o especialidad, no tienen que llenar esta parte.</h4>
				
                       <br/>
                       
                        <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                        <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio especializado en :"> Servicio especializado en
						</label></td>
 </table>
                        
                        
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                         <h4 style="text-align:center; color:#00F;">Marcas de Autos.</h4>
                         <h4 style="text-align:center; color:#00F;">Solo para Taller, Rent a Cars y Dealers de Autos.</h4>
                          <h4 style="text-align:center; color:#F00;">Favor de escoger las marcar de Auto que ofrecen en Venta,  </h4>
                           <h4 style="text-align:center; color:#F00;">Alquiler o Servicio especializado de ser necesario</h4>
                          <br/>
                         <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                         
  <tr>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Acura" > Acura
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Audi"> Audi
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" BMW" > BMW
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Bentley" > Bentley
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Buick" > Buick
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cadillac" > Cadillac
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chevrolet" > Chevrolet
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chrysler" > Chrysler
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Dodge"> Dodge
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Fiat"> Fiat
                            </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ford"> Ford
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Gmc"> Gmc
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Genesis" > Genesis
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Honda"> Honda
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hyundai"> Hyundai
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Infiniti"> Infiniti
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Jaguar"> Jaguar
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Jeep"> Jeep
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kia"> Kia
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Land Rover"> Land Rover
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Lexus">Lexus
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Lincon"> Lincon
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mini"> Mini
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Masareti"> Masareti
						</label></td>
  </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mazda" > Mazda
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercedes Benz"> Mercedes Benz
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercury"> Mercury
						</label></td>
  </tr>
   <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mitsubichi"> Mitsubichi
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nissan"> Nissan
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Porche"> Porche
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ram"> Ram
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Rolls Royce"> Rolls Royce
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Scion"> Scion
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Subaru"> Subaru
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Suzuki"> Suzuki
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tesia"> Tesia
						</label></td>
  </tr>
   <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Toyota"> Toyota
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volkswagen"> Volkswagen
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volvo">  Volvo
                             
						</label></td>
  </tr>
</table>


</br>
<hr / style="color:rgb(0,0,255); border:solid 3px;">
 <h4 style="text-align:center; color:#00F;">Marcas de Camiones.</h4>
                         <h4 style="text-align:center; color:#00F;">Solo para Taller, Rent a Cars y Dealers de Camiones.</h4>
                          <h4 style="text-align:center; color:#F00;">Favor de escoger las marcar de Camión que ofrecen en Venta,  </h4>
                           <h4 style="text-align:center; color:#F00;">Alquiler o Servicio especializado de ser necesario</h4>
                          <br/>
                         <table style="margin-left:1%;" id="checkbox" width="100%" border="0">
                         
  <tr>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Chevrolet" > Chevrolet
						</label></td>
    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Dodge"> Dodge
						</label></td>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Ford" > Ford
						</label></td>
                        </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Freightliner"> Freightliner
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" GMC" > GMC
						</label></td>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hino" > Hino
						</label></td>
    <td><label class="checkbox-inline">
    </tr>
  <tr>
  <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Hummer" > Hummer
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" International" > International
						</label></td>

 
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Isuzu"> Isuzu
                            </label></td>
                            </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Iveco"> Iveco
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kenworth"> Kenworth
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mack " > Mack 
						</label></td>
                        </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Man"> Man
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mercedes-benz"> Mercedes-benz
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nissan"> Nissan
						</label></td>
                        </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renault"> Renault
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Scania"> Scania
						</label></td>
 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Volvo"> Volvo
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
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" BMW " > BMW  

						</label></td>
    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Ducati "> Ducati 
						</label></td>
    <td><label class="checkbox-inline"><input type="checkbox" id="intereses[]" name="intereses[]" value=" Guzzi" > Guzzi
						</label></td>
                        </tr>
  <tr>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Harley-Davidson "> Harley-Davidson 
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Honda" > Honda
						</label></td>
  
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Kawasaki " > Kawasaki 
						</label></td>
    <td><label class="checkbox-inline">
    </tr>
  <tr>
  <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" KTM" > KTM
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Suzuki " > Suzuki 
						</label></td>

 
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Triumph"> Triumph
                            </label></td>
                            </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Vento"> Vento
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Vespa"> Vespa
						</label></td>
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Victoria " > Victoria 
						</label></td>
                        </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Voge"> Voge
						</label></td>
    <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Yamaha"> Yamaha
						</label></td>
  
    
</tr>
</table>         
                        
         <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                         <h4 style="text-align:center; color:#00F;">Auto Parts / Body Parts / Disribuidores de Piezas</h4> 
                          <h4 style="text-align:center; color:#F00;">Si Vende Piezas / Aceite o algun producto con una marca especifica </h4>
                           <h4 style="text-align:center; color:#F00;">y desea promocionarlo, favor de contactarnos para añadir el producto.</h4>
                           <br/>
                        <table style="margin-left:1%;" width="100%" border="0">
 
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Piezas "> Venta de Piezas 
						</label></td>
    </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Nuevas"> Nuevas
						</label></td>
 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Usadas"> Usadas
						</label></td>
                         </tr>
  <tr>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Re-manufacturadas"> Re-manufacturadas
						</label></td>               
                        
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Originales"> Originales
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Remplazo"> Remplazo
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Americanas"> Americanas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Europeas"> Europeas
						    
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Japonesas"> Japonesas
						</label></td>
  </tr>
  <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Koreanas"> Koreanas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Electricas"> Electricas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Raicing"> Raicing
						</label></td>
  </tr>
  <tr>
  </label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Computadoras para autos"> Computadoras para autos
						</label></td>
  </tr>
  </table>
 

                        
                        
                   <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Accesorios / Venta / Instalación   </h4>
                         <h4 style="text-align:center; color:#F00;">Selecione especialidades que ofrece su negocio. </h4>
                        <br/>
<table style="margin-left:1%;" width="100%" border="0">
  <tr>
   
  <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta / Instalación de"> Venta / Instalación de
						</label></td> 
    <td><label class="checkbox-inline">
   <input type="checkbox" id="intereses[]" name="intereses[]" value=" Alarmas para autos" > Alarmas para autos
						</label></td>
   <td><label class="checkbox-inline">                     
  <input type="checkbox" id="intereses[]" name="intereses[]" value=" Aros para autos">  Aros para autos
						</label></td>
                            </tr>
  <tr>
  <td><label class="checkbox-inline">                      
                        <input type="checkbox" id="intereses[]" name="intereses[]" value=" Baterías">  Baterías
						</label></td>
                                 
  
   
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camaras"> Camaras
						</label></td> 
  
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Equipo Musica"> Equipo Musica
						</label></td> 
  
     </tr>
  <tr>
							
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" GPS"> GPS
						</label></td>
   
 
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Luces decorativas"> Luces decorativas
						</label></td>

<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Rotulacion / Car design"> Rotulacion / Car design
						</label></td>
  </tr>
  <tr>
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tinte Glass"> Tinte Glass
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
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta instalación y reparación de"> Venta instalación y reparación de
						</label></td> 
                        </tr> 
    <tr>
     
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta"> Venta
						</label></td> 
     <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" instalación "> instalación
						</label></td>
    <td ><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Reparación de"> Reparación de
						</label></td>
                        </tr>
                        <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Aire acondicionado"> Aire acondicionado
						</label></td>
   
                        
         <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Alternadores"> Alternadores
						</label></td>                   
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Aros"> Aros
						</label></td>  
                         </tr>
                        <tr>
                                                           
     <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Carburadores"> Carburadores
						</label></td> 
                        
                        
 <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cambio de aceite y filtro"> Cambio de aceite y filtro
						</label></td> 
                       
 <td> <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Computadoras "> Computadoras
						</label></td>  
                        
                        </tr>
                        <tr> 
                                             
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Frenos"> Frenos
						</label></td> 
              
                        
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Inyectores"> Inyectores
						</label></td>
  
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mangas hidraulicas"> Mangas hidraulicas
						</label></td>  
                        
                      </tr>  
                         <tr>    
 
                        
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motor"> Motor
						</label></td>                                            
 
                       
                           
  <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mufflers"> Muffler
						</label></td>                     
 <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Power steering"> Power steering
						</label></td> 
                        </tr>
                          <tr>
                        
                       
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Power windows"> Power windows
						</label></td>                                                                      
                        
                        
                         
                         
                          <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Radiadores"> Radiadores
						</label></td> 
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" sistema electrico"> Sistema electrico
						</label></td>      
                         </tr>
                          <tr>
                        
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Starter"> Starter
						</label></td>      
                           
                           <td><label class="checkbox-inline">
<input type="checkbox" id="intereses[]" name="intereses[]" value=" Transmisiones"> Transmisiones
						</label></td>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Tren delantero"> Tren delantero
						</label></td>
                         </tr>
                          <tr>
                        
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Alineamiento">  Alineamiento
						</label></td>  
      <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cristales">  Cristales
						</label></td>  
                        <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Cotizacion seguro computarizado">  Cotizacion seguro computarizado
						</label></td>                                   
                        
    
  </tr>
</table>
 <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        <h4 style="text-align:center; color:#00F;"> Solo para Taller. Selecione tipo vehiculo. </h4>
                        <h4 style="text-align:center; color:#F00;">Selecione Cateroria de vehiculo a la cual ofrece instalación  Venta o servicio  </h4>
                       <br/>
      <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" para "  > para 
						</label>
                        
     <label class="checkbox-inline">
                        <input  type="checkbox" id="intereses[]" name="intereses[]" value=" Auto " > Auto 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Camion "> Camion 
						</label>
    <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="  Guaguas Vans ">  Guaguas Vans 
						</label>
 
 
   <label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Motoras "> Motoras 
						</label>
  

                           <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;"> Gomas</h4>
                         <br/>
                        <table style="margin-left:1%;" width="100%" border="0">
  <tr>
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Gomas Nuevas"> Venta de Gomas Nuevas
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta de Gomas Usadas"> Venta de Gomas Usadas
						</label> </td>
   
  
  
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Balanceo de gomas"> Balanceo de gomas
						</label></td>

  </tr>
</table>


 <br />
   <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Gestoria</h4>
                         <h4 style="text-align:center; color:#F00;">Selecione servicios que ofrece su negocio. </h4>
                         <h4 style="text-align:center; color:#F00;">Si no marco el encasillado de ventas / Servicio, favor de marcarlo según sea necesario . </h4>
                         <br/>
<table style="margin-left:1%;" width="100%" border="0">
<tr>
<td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Verificación de "> Verificación de						
                            </label></td>
  </tr>
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Multas Auto">  Multas Auto
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Multas Licencia">  Multas Licencia
						</label></td> 
    <td><label class="checkbox-inline">                    
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Traspaso Vehiculo">  Traspaso Vehiculo
						</label></td>                   
     
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renovación Licencia">  Renovación Licencia
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Renovación Marbete"> Renovación Marbete
						</label></td>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Examen Medico"> Examen Medico
						</label></td>  
                    
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Servicio Abogado"> Servicio Abogado
						</label></td> 
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Venta Sellos Rentas Internas"> Venta Sellos Rentas Internas
						</label></td>   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Fotos 2x2"> Fotos 2x2
						</label></td>                     
                                           
    </tr>
  </table>

 <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">
                        
                        
                         <h4 style="text-align:center; color:#00F;">Hojalateriaria</h4>
                         <h4 style="text-align:center; color:#F00;">Selecione servicios que ofrece su negocio. </h4>
                         <h4 style="text-align:center; color:#F00;">No es necesario llenar todos los encasillados. </h4>
                         <br/>
<table style="margin-left:1%;" width="100%" border="0">
  
  <tr>
   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Enderezamos Chasis" >  Enderezamos Chasis
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Bumpers">  Bumpers
						</label></td> 
    <td><label class="checkbox-inline">                    
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Carroceria">  Carroceria
						</label></td>                   
     
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Pintamos Carros">  Pintamos Carros
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Completos"> Completos
						</label></td>
     <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Solo Partes"> Solo Partes
						</label></td>  
                    
  </tr>
  <tr>
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Garantia en"> Garantia en
						</label></td> 
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Mano de Obra"> Mano de Obra
						</label></td>   
   <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" Pintura"> Pintura
						</label></td>                    
     </tr>                    
                                           
    <tr>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 3 Meses"> 1 A 3 Meses
						</label></td>
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 6 Meses"> 1 A 6 Meses
						</label></td>   
    <td><label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value=" 1 A 12 Meses"> 1 A 12 Meses
						</label></td> 
     </tr>
  </table>  

 
                        
             

<br />
                       
 <div class="form-group">
					<label  for="archivo" class="col-sm-2 control-label">Archivo</label>
					<div class="col-sm-10">
						
                      <input   type="file" id="files" name="archivo" />
        <br />
        <output id="list"></output>
         
        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {

                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
					</div>
				</div>
                        

                             
                              <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;">  
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="intro-clientes.php" class="btn btn-danger" style=" float:left;">Regresar</a>
						<button type="submit" class="btn btn-primary" style=" float:right;">Guardar</button>
					</div>
				</div>
               
			</form>
  
  </div>
  

</div>

</body>
</html>
