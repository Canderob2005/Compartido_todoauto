<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?>
<!--& nbsp; ---->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<!-- InstanceBegin template="/Templates/menu.dwt.php" codeOutsideHTMLIsLocked="false" -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Accesorios para autos, camiones, motoras</title>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Servicios para Autos, Camiones,motoras, Accesorios para autos, camiones, motoras,Distribuidores,Accesorios, bocinas, radio,luces,focos,reflectores,aplificador" />
 <meta name="keywords" content="Guia automotriz,Busqueda de servicios automotriz, telefono, direccion, taller, especialidad" /> 
<!-- InstanceEndEditable -->
    
<link rel="shortcut icon" href="todoautopr.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="contenido/css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/principal.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="slide-mysql/engine1/style.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/all.css"/>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<script type="text/javascript" src="slogan-azul/js/jquery-2.1.1.min.js"></script>
<script src="contenido/svg-injector.min.js"></script>
<script src="https://kit.fontawesome.com/ddba1ed91f.js" crossorigin="anonymous"></script> 
<script src="contenido/js/respond.min.js"></script>
  <script src="js/jquery.min.js"></script>
   <script src="js/button.js"></script>
    <script type = "text/javascript">
        $(function () {
            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
    </script>





<!-- // -->
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
td a:link {
	color: #0B0B61;
}
td a:visited {
	color: #0B0B61;
}
td a:hover {
	color: #FF0000;
}
td a:active {
	color: #0B0B61;
}
.dropdown-menu img {
	height:35px;
	width:35px;
}


#contenedor #titulo  h1 {
	text-align:center;
	font-size:14px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h2 {
	font-size:10px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenedor table  h1 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor table  h5 {
	font-size:16px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenido2 h2 a:link {
	color: #FFF;
}
#contenido2 h2 a:visited {
	color: #FFF;
}
#contenido2 h2 a:hover {
	color: #FF0000;
}
#contenido2 h2 a:active {
	color: #FFF;
}
#contenido2 #subtitulo h2{
	text-align:center;
	font-size:10px;;
	font-family:'Roboto';
  font-weight:300;	
}
#contenido2 {
clear: both;
	float: left;
	margin-left:px;
	width: 100%;
	min-width:100%;
	display:block;
	color:#FFFFFF;
	background-color:#0B0B61;
}
#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
#imgContenedor img {
	width:110%;
}

.qcont:first-letter { 
 
    text-transform: capitalize 
 
}
@media only screen and (min-width: 799px) {


#contenedor #titulo  h1 {
	text-align:center;
	font-size:24px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h2 {
	font-size:21px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenedor table  h1 {
	font-size:24px;
	font-family:'Roboto';
  font-weight:700; 	
}
#contenedor table  h5 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;	
}
#contenido2 #subtitulo h2{
	text-align:center;
	font-size:21px;
	font-family:'Roboto';
  font-weight:300;	
}
#anuncio-footer h5 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
#imgContenedor img {
	width:100%;
	margin-top:70px;
}

.qcont:first-letter { 
 
    text-transform: capitalize 
 
}
#contenido2 {
	clear: both;
	float: left;
	margin-left:px;
	width: 100%;
	min-width:100%;
	display:block;
	color:#FFFFFF;
	background-color:#0B0B61;
}
}

</style>
<body>



<div class="gridContainer clearfix">
  <header>
   <div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="index.php"><img src="img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
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
Anunciate</a>
        </li>
        
         
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
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
    
   <!-- InstanceBeginEditable name="slider" -->
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
				  <img src="slide-mysql/data1/images/<?php echo $row_ms_slider['imagen']; ?>" 
				 id="wows1_0"/>
				</a>
          </li>
		   <?php } while ($row_ms_slider = mysqli_fetch_assoc($ms_slider)); ?>
		</ul>
	</div>
    <?php
mysqli_free_result($ms_slider);
?>
<!-- InstanceEndEditable -->
			 
</div>
    
</div>
    <div id="slogan-azul"><?php include ("slogan-azul/slogan-azul.php") ?></div>
  </header> 
  
  <div class="container-fluid">
  

<div id="contenedor"> 
<div id="imgContenedor">
<!-- InstanceBeginEditable name="titulo" -->
 <div id="titulo"><h1><strong>Accesorios para autos, camiones, motoras</strong></h1></div><!--titulo-->
  <div id="titulo"><h2><strong>ventas instalación de accesorios y mucho mas.</strong></h2></div><!--titulo-->
<!-- InstanceEndEditable -->
 </div>
 <hr / style="color:#00F; border:solid 3px; width:100%;">
<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?>
<?php

include_once('conexiones/conexion-frendly.php');

# connect to mysql  database
if(!$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)){
    echo 'could not connect database';
    }
    
# use database
if(!mysqli_select_db($link, $mysql_database)){
   echo "Database not found";
   die();       
   }
?>
<?php
# this script will create friendly URLs strings for all articles on database   
include_once('informacion.php');

?>

<table id="informacion"   style="text-align:center;width:100%; min-width:100%;" >
	<thead>
       
	  <th style="width:33%;"><h1><strong>Nombre</strong></h1></th>
        <th style="width:33%;"><h1><strong>Especialidad</strong></h1></th>
        <th style="width:33%;"><h1><strong>Pueblo</strong></h1></th>
     
        
	</thead>
	</table>
<!-- InstanceBeginEditable name="id-serv" -->
<?php
			$db = $cnx_slider;
			try{	
					$sql = $sql = "SELECT DISTINCT * FROM clientes WHERE (estatus= 'si') AND (id_serv =  'Accesorios') ORDER BY pago='no' ASC";
				
				foreach ($db->query($sql) as $row) {
					?>
<!-- InstanceEndEditable -->
<table   style="width:100%; min-width:100%;text-align:center;">
  <tbody><tr>
    
     <td class=".qcont" style="width:33%;color:#0B0B61;"><strong><h5> <?php echo "<a href=informacion-{$row['friendly_url']}.php>{$row['nombreNegocio']}</a><br>" ?></h5></strong></td>
      <td style="width:33%;color:#0B0B61;"><strong><h5><?php echo ($row["id_serv"]); ?></h5></strong></td>
   
    <td style="width:33%;color:#0B0B61;"><strong><h5><?php echo ($row["pueblo"]); ?></h5></strong></td>
    
   
    
    </td>
    
    
    
    </tr>
    <?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			;

		?>
  </tbody>
</table>

  </div><!--contenedor-->
 
  
  
  
    <br/> 
    
    

 </div>
 <div class="form-group">
					<div>
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="margin-left:10%; margin-top:10%;" >Regresar</a>
                          <button style=" float:right; margin-top:10%; margin-right:10%;" class="btn btn-primary" ><a href="javascript:;" id="scrollToTop">Arriba</a></button>  
						
					</div>
</div>
<!-- InstanceBeginEditable name="contenido" -->
 <div id="contenido2">contenido</div>
 
<?php
			$db = $cnx_slider;
			try{	
					$sql = $sql = "SELECT DISTINCT * FROM clientes WHERE (estatus= 'si') AND (id_serv =  'Accesorios') ORDER BY pago='no' ASC";
				
				foreach ($db->query($sql) as $row) {
					?>
<!-- InstanceEndEditable -->
 <!-- InstanceBeginEditable name="marquee" -->
   <div id="anuncio-footer"><marquee width="100%"  align="middle" ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></marquee></div>
<!-- InstanceEndEditable -->
 <!-- Footer -->
	<section  id="footer">
			
				<div   class="col-xs-12 col-sm-4">
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
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa fa-2x fa-whatsapp"></i></a></li>
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
	 
</div>
</div>
</body>
<!-- InstanceEnd --></html>