<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?>
<!--& nbsp; ---->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Menu Todo Auto PR</title>
    <meta name="description" content="Busqueda de servicios para Autos, Accesorios, Aire acondicionado, Alineamiento autos, Alquiler autos, Asistencia en la carretera, Auto Parts, Autos nuevos, Autos usados, Body parts,  Camiones, Piezas para camiones, Cotización seguro, Cristales auto, Detailing, Distribuidor de Piezas, Electromecanico, Financiamiento autos, Gestoria, Gomeras, Herramientas, Centro de inspección y marbete, Junkers, Cerrajeria, Copias de llaves, Machine Shop, Mangas hidraulicas, Mantenimiento autos, Motoras venta y piezas, Mufflers, Pintura para autos, Prestamos autos, Radiadores, Rotulación autos vans camiones, Seguro autos, Servicio a Domicilio, Servicio de grua, Taller hojalateria, Taller Mecanica, Taller mecanica camiones, Tapiceria, Tinte glass, Transmisiones automaticas y mucho mas..... "> 
  <meta name="keywords" content="Busqueda se servicios automotriz, telefono, direccion, taller, especialidad">
  <link rel="shortcut icon" href="todoautopr.ico" />
  <link rel="shortcut icon" href="../todoautopr.ico" />
 <script src="svg-injector.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/ddba1ed91f.js" crossorigin="anonymous"></script> 
  </head>
 
  <link rel="stylesheet" type="text/css" href="../css/footer.css"/> 
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="../slide-mysql/engine1/style.css" />
<link rel="stylesheet" type="text/css" href="../css/menu-fotos.css"/>
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
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
.dropdown-menu img {
	height:35px;
	width:35px;
}
#contenedor #titulo  h1 {
	text-align:center;
	font-size:12px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h2 {
	font-size:9px;
	font-family:'Roboto';
  font-weight:300;	
}
@media only screen and (min-width: 799px) {
#dropodown  {
	margin-top:25px;
}
.dropdown-menu  {
	margin-top:45px;
}
#contenedor #titulo  h1 {
	text-align:center;
	font-size:24px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h2 {
	font-size:12px;
	font-family:'Roboto';
  font-weight:300;	
}
}

</style>
<body>
<div class="gridContainer clearfix">
  <header>
   <div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
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
        <a class="nav-link" href="../clientes-servicios/intro-clientes.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>
         
          <div id="dropodown">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="../clientes-servicios/intro-clientes.php">Anunciate</a>
          <a class="dropdown-item" href="../clientes-servicios/servicio-cliente.php">Servicios</a>
           <a class="dropdown-item" href="quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="sugerencias.php">Tips y Sugerencias</a>
         </div>
         </div>
      </li>
       <div id="dropodown">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactanos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=17874597059"><i class="fab fa-2x fa-whatsapp"></i></a>
          <a class="dropdown-item"  href="mailto:t.autopr@gmail.com"><i class="far fa-2x fa-envelope"></i></a>
           <a class="dropdown-item" href="tel:7874597059"><i class="fas fa-2x fa-mobile-alt"></i></a>
            <a class="dropdown-item"href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fab fa-2x fa-facebook-square"></i></a>
            <a class="dropdown-item"href="https://twitter.com/TodoAutoPR1"><i class="fa fa-2x fa-twitter"></i></a>
            </div>
             </div>
      </li>
    </ul>

  </div>
</nav>

</div>


    <div id="slogan-rojo">
    
    <letras>
<div class="div">Lo que buscas</div> 
<div class="div"> 
  <span>Encuentralo Aqui......</span>
</div>
</letras>
    
    </div>
    <div id="banners">
    
   <?php
	$database_cnx_slider = "publicidad";
mysqli_select_db($cnx_slider,$database_cnx_slider );
$query_ms_slider = "SELECT * FROM slider WHERE slider.estado = 1 ORDER BY slider.orden";
$ms_slider = mysqli_query($cnx_slider,$query_ms_slider ) or die(mysqli_error());
$row_ms_slider = mysqli_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysqli_num_rows($ms_slider);
?>
	<div id="wowslider-container1">
	<div class="ws_images">
		<ul>
			<?php do { ?>
			  <li>
				<a href="<?php echo $row_ms_slider['link']; ?>">
				  <img src="../slide-mysql/data1/images/<?php echo $row_ms_slider['imagen']; ?>" 
				 id="wows1_0" />
				</a>
          </li>
			  <?php } while ($row_ms_slider = mysqli_fetch_assoc($ms_slider)); ?>
		</ul>
	</div>
    <?php
mysqli_free_result($ms_slider);
?>
</div>
    
    </div>
    <div id="slogan-azul"><?php include ("../slogan-azul/slogan-azul.php") ?></div>
  </header> 
 
  <div class="container-fluid-xl">
  
  <div id="contenedor"> 
<div id="titulo"><h1><strong>Aqui encontraras</strong></h1></div>
  <div id="titulo"><h2><strong> Accesorios, Aire acondicionado, Alineamiento autos, Alquiler autos, Asistencia en la carretera, Auto Parts, Autos nuevos, Autos usados, Body parts,  Camiones, Piezas para camiones, Cotización seguro, Cristales auto, Detailing, Distribuidor de Piezas, Electromecanico, Financiamiento autos, Gestoria, Gomeras, Herramientas, Centro de inspección y marbete, Junkers, Cerrajeria, Copias de llaves, Machine Shop, Mangas hidraulicas, Mantenimiento autos, Motoras venta y piezas, Mufflers, Pintura para autos, Prestamos autos, Radiadores, Rotulación autos vans camiones, Seguro autos, Servicio a Domicilio, Servicio de grua, Taller hojalateria, Taller Mecanica, Taller mecanica camiones, Tapiceria, Tinte glass, Transmisiones automaticas y mucho mas.....</strong></h2></div>
   <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
    <th scope="col">
     <a  href="accesorios.php" title="Accesorios para autos, camiones, motoras"  ><img src="../img-menu-contenido/accesorios.png"/></a>
   
    </th>

    <th scope="col">
      <a href="aire.php" title="Reparación y Venta Aires Autos"  ><img src="../img-menu-contenido/aire-autos.png" /></a>
    </th>
    
  <th scope="col">
   <a href="alineamiento.php" title="Reparación y Alineaniento Para Autos" ><img src="../img-menu-contenido/alineamiento.png" /></a>
  </th>
    </tr>
   
  </table>
  </div>
  
  
  
  
  <br><br>
    <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
    <th scope="col">
    <a href="alquiler-autos.php" title="Buscas Alquiler de Autos, vans, camiones" ><img src="../img-menu-contenido/alquiler-autos.png" /></a>
    </th>
    
     <th scope="col">
    <a href="Asistencia.php" title="Asistencia en carretera, asistencia en la carretera" ><img src="../img-menu-contenido/asistencia.jpg" /></a>
   
    </th>

    <th scope="col">
     <a href="auto-parts.php"title="Venta de piezas Nuevas en Puerto Rico" ><img src="../img-menu-contenido/auto-parts.png" /></a>
    </th>
    
 
    </tr>
   
  </table>
  </div>
  <br><br>
  
   <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
   <th scope="col">
   <a href="autos-nuevos.php"title="Venta de Autos Nuevos en Puerto Rico"  ><img src="../img-menu-contenido/autos-nuevos.png" /></a>
  </th>
  <th scope="col">
   <a href="autos-nuevos-usados.php"title="Venta de Autos Nuevos Y usados en Puerto Rico"  ><img src="../img-menu-contenido/autos-nuevos-usados.jpg" /></a>
  </th>
  
  <th scope="col">
   <a href="autos-usados.php"title="Venta autos usados en Puerto Rico" ><img src="../img-menu-contenido/autos-usados.png"/>
  </a>
  </th>
  
   
  </table>
  </div>
  <br><br>
  <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
   <th scope="col">
     <a href="body-parts.php"title="venta piezas carroceria para autos"><img src="../img-menu-contenido/body-parts.png"/></a>
    </th>
  
   <th scope="col">
     <a href="camiones.php"title="Venta de camiones"><img src="../img-menu-contenido/camiones-dealer.jpg" /></a>
     </th>
    
   <th scope="col">
     <a href="camiones-piezas.php"title="Venta de Piezas camiones"><img src="../img-menu-contenido/camiones-piezas.jpg" /></a>
     </th>
   
  
     </tr>
  </table>
  </div>
  <br><br>
  <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
   <th scope="col">
     <a href="cotizacion-seguro.php"title="Venta seguros para autos"><img src="../img-menu-contenido/cotizacion-seguro.jpg" /></a>
     </th>
    
    <th scope="col">
     <a href="cristales-autos.php"title="venta, montura de cristales para autos"><img src="../img-menu-contenido/cristal.jpg" /></a>
     </th>
  
   <th scope="col">
    <a href="detalling.php"title="Detalling, limpieza auto"><img src="../img-menu-contenido/detailling.jpg" /></a>
   </th>
   
   
    
   
     </tr>
  </table>
  </div>
     <br><br>
  <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
  <th scope="col">
     <a href="distribuidor.php"title="Distribuidor piezas, aceite"><img src="../img-menu-contenido/distribuidor.jpg" /></a>
     </th>
  
  <th scope="col">
     <a href="electro-mecanica.php" title="Problemas Electricos"><img src="../img-menu-contenido/electro.png" /></a>
    </th>
    
    <th scope="col">
     <a href="financiamiento.php" title="Financiamiento"><img src="../img-menu-contenido/financiamiento.jpg" /></a>
    </th>
    
     
    
     </tr>
  
  </table>
   </div>
   <br><br>
  <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
    
    <th scope="col">
     <a href="gestoria.php" title="Gestoria, licencia, marbete, multas, traspaso"><img src="../img-menu-contenido/gestoria.jpg" /></a>
    </th>
   
    <th scope="col">
     <a href="gomera.php"title="Venta de gomas, gomera"><img src="../img-menu-contenido/gomeras.png" /></a>
    </th>
    
    <th scope="col">
     <a href="herramientas.php"title="Venta de herramientas"><img src="../img-menu-contenido/herramientas.jpg" /></a>
    </th>
  
    </tr>
  
  </table>
  </div>
  <br><br>
  <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>

   <th scope="col">
     <a href="inspeccion.php"title="Inspección  autos"><img src="../img-menu-contenido/inspeccion.png" /></a>
    </th>
    
   <th scope="col">
    <a href="junkers.php"title="Venta piezas usadas"><img src="../img-menu-contenido/junkers.png"  /></a>
    </th>
    <th scope="col">
      <a href="llave.php"title="Copias de llaves para autos"><img src="../img-menu-contenido/llaves.png" />
     </a></th>
  </tr>
      
  </table>
  </div>
  <br><br>
  <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
 
    
     
      <th scope="col">
      <a href="machine-shop.php"title="Machine shop , reparación motores"><img src="../img-menu-contenido/machine-shop.jpg" />
     </a></th>
    
      
      <th scope="col">
     <a href="mangas.php"title="Mangas Hidraulicas"><img src="../img-menu-contenido/mangas.png" /></a>
    </th>
    
    <th scope="col">
     <a href="mantenimiento.php"title="Mentenimiento para autos"><img src="../img-menu-contenido/mantenimiento.png"  /></a>
    </th>
    
    
     </tr>
     </table>
     </div>
     
      <br><br>
  <div id="table" style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>

    <th scope="col">
     <a href="motoras.php" title="Venta Motoras Puerto Rico"><img src="../img-menu-contenido/motoras-venta-.png" /></a>
    </th>
    
     <th scope="col">
   <a href="muffler.php" title="Reparación de Muffler"><img src="../img-menu-contenido/muffler.png"  /></a></th>
   
   
   
    <th scope="col">
     <a href="pintura-autos.php" title="Venta pinturas para autos"><img src="../img-menu-contenido/pinturas-autos.jpg" /></a>
    </th>
  </tr>
 
    
     </table>
  </div>
  <br><br>
  <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>

   <th scope="col">
     <a href="prestamo.php" title="Prestamos de autos en Puerto Rico"><img src="../img-menu-contenido/prestamo.jpg" /></a>
    </th>
   <th scope="col">
   <a href="radiadores.php" title="Venta y reparación de Radiadores Puerto Rico"><img src="../img-menu-contenido/radiadores.png" /></a>
   </th>
   
    <th scope="col">
    <a href="rotulacion.php"title="Rotulación autos,camiones,vans"><img src="../img-menu-contenido/rotulacion.jpg"/></a>
    </th>
    </tr>
     </table>
     
     </div>
     <br><br>
       <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
     <th scope="col">
    <a href="seguros.php"title="Seguros para autos"><img src="../img-menu-contenido/seguros.png"/></a>
    </th>
  <th scope="col">
     <a href="servicio-domicilio.php" title="Servicio a domicilio" ><img src="../img-menu-contenido/servicio.jpg" /></a>
     </th> 
      
  <th scope="col">
   <a href="Servicio-grua.php"title="Servicio de grua"><img src="../img-menu-contenido/Servicio-grua.png"  /></a>
  </th>
    </tr>
     </table>
      </div>
     <br><br>
       <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
 <th scope="col">
     <a href="hojalateria.php" title="Servicio de Hojalateria"><img src="../img-menu-contenido/taller-hojalateria.jpg" /></a>
    </th>

  <th scope="col">
      <a href="mecanica.php" title="Mecanica de Autos Puerto Rico"><img src="../img-menu-contenido/taller-mecanica.jpg" /></a>
     </th>
     <th scope="col">
      <a href="taller-mecanica-camiones.php" title="Mecanica de Autos Puerto Rico"><img src="../img-menu-contenido/taller-mecanica-camiones.jpg" /></a>
     </th>

    </tr>
     </table>
 </div>
 
  <br><br>
       <div id="table"  style="margin-top:00px;margin-left:5px;">
    <table id="table2" width="100%" border="0">
  <tr>
  
  <th scope="col">
     <a href="tapiceria.php" title="Servicio de tapiceria"><img src="../img-menu-contenido/tapiceria.png"  /></a>
    </th>
    
  
   <th style="width:33%;" scope="col">
   <a href="tinte-glass.php" title="tinte para autos" ><img src="../img-menu-contenido/Tinte-para=autos.jpg"  /></a>
   </th>
    
  <th style="width:33%;" scope="col">
   <a href="transmisiones.php" title="Reparación de transmisiones" ><img src="../img-menu-contenido/transmisiones.png"  /></a>
   </th>
   
       </tr>
     </table>
 </div>

 <div id="contenido">Este es el contenido</div>
    <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Accesorios, Aire acondicionado, Alineamiento autos, Alquiler autos, Asistencia en la carretera, Auto Parts, Autos nuevos, Autos usados, Body parts,  Camiones, Piezas para camiones, Cotización seguro, Cristales auto, Detailing, Distribuidor de Piezas, Electromecanico, Financiamiento autos, Gestoria, Gomeras, Herramientas, Centro de inspección y marbete, Junkers, Cerrajeria, Copias de llaves, Machine Shop, Mangas hidraulicas, Mantenimiento autos, Motoras venta y piezas, Mufflers, Pintura para autos, Prestamos autos, Radiadores, Rotulación autos vans camiones, Seguro autos, Servicio a Domicilio, Servicio de grua, Taller hojalateria, Taller Mecanica, Taller mecanica camiones, Tapiceria, Tinte glass, Transmisiones automaticas y mucho mas.....</h5></MARQUEE></div>
 <!-- Footer -->
	<section  id="footer">
			
				<div   class="col-xs-12 col-sm-4  ">
        <h5>Contact Info</h5>
        <p><strong>Adress:</strong> Urbanización Irlanda
        Heigths Calle Gemini FH-6.
Bayamón, PR 00956 <!-- Random Adress -->
</p>
        <p><strong>Email:</strong> t.autopr@gmail.com</p>
        <p><strong>Tel.:</strong> (787) 4597059</p>
        <p><strong>Tel.:</strong> (939) 3498482</p>
      </div>
	
   
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5  text-center">
					<ul class="list-unstyled list-inline social text-center">
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:t.autopr@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"><a href="tel:7874597059"><i class="fa  fa-mobile-alt"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/TodoAutoPR1"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						
						
                        
                        
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					
                    
                     <div class="copyright">Copyright © 2020 All Rights Reserved.</div>
				</div>
				</hr>
			</div>	
		        
	</section>
	<!-- ./Footer -->
</div>
</div>
<!---------------------Banner--------------------------------->

<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script>
    <script src="../dist/js/popper.min.js"></script>
     <script src="../dist/js/bootstrap.min.js"></script>
   
   
</body>
</html>