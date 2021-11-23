<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','Camara123*','u317430902_todoAuto');
include '../db.php';
// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//Es" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="../css/style-contenido.css">
 <link rel="stylesheet" type="text/css" href="../css/stile-letras.css">
 

           
    <title>Todo Auto / Todo Auto Pr </title>   
<meta name=" description" content="Servicios para Autos Camiones y motoras, Talleres se mecanica, Taller de Hojalatero, Taller de Electromecanico , Taller de camiones, piezas de camiones, Dealesr en Puerto rico, seguros de autos, Alquiler de autos y camiones, Taller de Radiadores, Body part, Detailing , Aros, Marbete, inspeccion de vehiculos puerto rico, Autos nuevos puerto rico, Autos usados puerto rico, Junkers puerto rico, Piezas nuevas, piezas usadas, Financiamiento de autos puerto rico,  prestamos con titulo puerto rico, Servicio de Gruas puerto rico, Gomas Nuevas, gomas Usadas,Distribuidores piezas puerto rico, Accesorios para autos, Auto parts puerto rico, renovación de marbete puerto rico, licencia Conducir puerto rico, traspaso Vehiculo puerto rico, autoexpreso multas puerto rico, Multas, Machine shop puerto rico">  

<meta name="keywords" content="Servicios especialidad en puerto rico , Talleres en puerto rico, Dealers en puerto rico, numero telefono de Dealers en puerto rico,  numero telefono de talleres en puerto rico,  direccion de Dealers en puerto rico, Busqueda taller por especialidad en Puerto rico, Busqueda de Dealers en Puerto rico, Busqueda de seguros para autos en Puerto rico, Busqueda de centro de inspeccion en Puerto rico, Busqueda de compañias de prestamos de auto con titulo en Puerto rico, Busqueda de financiamiento de autos en Puerto rico">

<link rel="shortcut icon" href="todoautopr.ico"/>
  </head>

  <style>
  #cards a:link {
	color: #0B0B61;
	text-decoration: none;
}
#cards a:visited {
	color: #0B0B61;
	text-decoration: none;
}
#cards a:hover {
	color: #0B0B61;
	text-decoration: none;
}
#cards a:active {
	color:#0B0B61;
	text-decoration: none;
}
  </style>



<style>

#contenedor #titulo  h1 {
	text-align:center;
	font-size:14px;
	font-family:'Roboto';
  font-weight:500;	
}
#contenedor #titulo  h2 {
	font-size:12px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenedor #titulo  p {
	font-size:10px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenedor{	
	height:100%;
	min-height:100vw;		
}
#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}

#contenedor h4 {
	font-size:80%;
}
.table h4 {
	font-family:'Roboto';
  font-weight:300;
}
@media only screen and (min-width: 767px) {

#contenedor #titulo  h1 {
	text-align:center;
	font-size:24px;
	font-family:'Roboto';
  font-weight:500;	
}
#contenedor #titulo  h2 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenedor #titulo  p {
	font-size:16px;
	font-family:'Roboto';
  font-weight:300;	
}
#anuncio-footer h5 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
#contenedor h4 {
	font-size:150%;
}


</style>

<!------banners-------------------------->
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>
<body>

  <header>
    <div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="index.php"><img src="../img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
        <a class="nav-link" href="indexbuscador.php" title="Buscador"><i class="fa fa-fw fa-search"></i>Buscador</a>
        </li>
          <li class="nav-item active">
        <a class="nav-link" href="clientes-servicios/intro-clientes.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Registrate</a>
        </li>
         
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="clientes-servicios/intro-clientes.php">Anunciate</a>
          <a class="dropdown-item" href="clientes-servicios/servicio-cliente.php">Servicios</a>
          <a class="dropdown-item" href="contenido/quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="contenido/sugerencias.php">Tips y Sugerencias</a>
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
            <a class="dropdown-item"href="https://twitter.com/TodoAutoPR1"><i class="fa fa-2x fa-twitter"></i></a>
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
	$database_cnx_slider = "u317430902_todoAuto";
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
 
<br><br><br><br><br><br><br><br><br>
  
  <div id="contenedor"> 
 	<body class="hero-anime">
 <div id="titulo">
  <h1 style="color:#0B0B61;" >Todo Auto Puerto rico</h1>
   <h2 style="color:#0B0B61;" >¿Buscas un servicio automotriz? ¿Piezas para tu auto? ¿Un auto nuevo o usado?</h2>
  <p style="color:#0B0B61;" >Llegaste el lugar indicado, aqui encuentra autos nuevos / usados , camiones, motoras, auto parts, body parts, hojalateria, mecanica, electromecanica, inspección, marbete y mucho mas para tu auto</p>
</div>
 
  <div id="cards">
    <h1>Menu</h1>
<div class="container2" style="background-color:#FFFFFF;margin-left:7px; margin-right:7px;">
<div class="row">

   <?php

$sql = "SELECT DISTINCT * FROM clientes WHERE (estatus= 'si') AND (id_serv =  'Accesorios para autos, camiones, motoras') ORDER BY pago='no' ASC";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
while( $record = mysqli_fetch_assoc($resultset) ) {
	include "../informacion.php"
?>
  
<div class="col-sm-6">
<div class="card " style="background-color:#d6eaf8; 	min-height:400px;">
<div class="card-body">
  <div class="card-img-top">

<img  style="margin-top:5%;" src="../card/img-menu-contenido/<?php echo $record['imagen']; ?> ">
</div>
<div class="card-body info">
<h5 class="card-title" style="color:#0B0B61;"><?php echo $record['nombreNegocio']; ?></h5>
<h5 class="card-title" style="color:#0B0B61;"><?php echo $record['id_serv']; ?></h5>
<p class="card-title" style="color:#F00;">Click  aqui para comenzar...</p>
<strong><h5> <?php echo "<a href=../informacion-{$record['friendly_url']}.php>{$record['nombreNegocio']}</a><br>" ?></h5></strong>
</div>





</div>
</div>
</div>
<?php } ?>
</div> 
</div>
</body>
</div>

 

  <br /><br />


 </div>

  <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></MARQUEE></div>
 <!-- Footer -->
	<section  id="footer">
			
				<div   class="col-xs-12 col-sm-4  ">
        <h5>Contact Info</h5>
        <p><strong>Adress:</strong> Urbanización Irlanda
        Heigths Calle Gemini FH-6.
Bayamón, PR 00956 <!-- Random Adress -->
</p>
        <p><strong>Email:</strong> t.autopr@gmail.com</p>
        <p><strong>Tel.:</strong> 787-459-7059</p>
        <p><strong>Tel.:</strong> 939-349-8482</p>
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

<!-------Modal Contactanos-------------------------------->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5  text-center">
					<ul class="list-unstyled list-inline social text-center">
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa  fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:t.autopr@gmail.com" target="_blank"><i class="fa  fa-envelope"></i></a></li>
                        <li class="list-inline-item"><a href="tel:7874597059"><i class="fa  fa-mobile-alt"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fa  fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/TodoAutoPR1"><i class="fa fa-3x fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa  fa-instagram"></i></a></li>
						
						
                        
                        
					</ul>
				</div>
				</hr>
		</div>
       
           
            
            <button style=" float:right;" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
<link href="../card.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
<link rel="stylesheet" type="text/css" href="../slide-mysql/engine1/style.css" />


<script src="../js/respond.min.js"></script>
<!---------------------Banner--------------------------------->

<script type="text/javascript" src="slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script> 
     
    <script src="../dist/js/bootstrap.min.js"></script>
     
   <script src="../js/ddba1ed91f.js" crossorigin="anonymous"></script>
<script>$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');
	});</script>
   
</body>
</html>