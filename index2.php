<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?> 
<?php
include "conexiones/db.php";
 $images = get_imgs();
 include "conexiones/conexion.php";

?>
<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
 

           
    <title>Todo Auto / Todo Auto Pr </title>   
<meta name=" description" content="Servicios para Autos Camiones y motoras, Talleres se mecanica, Taller de Hojalatero, Taller de Electromecanico , Taller de camiones, piezas de camiones, Dealesr en Puerto rico, seguros de autos, Alquiler de autos y camiones, Taller de Radiadores, Body part, Detailing , Aros, Marbete, inspeccion de vehiculos puerto rico, Autos nuevos puerto rico, Autos usados puerto rico, Junkers puerto rico, Piezas nuevas, piezas usadas, Financiamiento de autos puerto rico,  prestamos con titulo puerto rico, Servicio de Gruas puerto rico, Gomas Nuevas, gomas Usadas,Distribuidores piezas puerto rico, Accesorios para autos, Auto parts puerto rico, renovación de marbete puerto rico, licencia Conducir puerto rico, traspaso Vehiculo puerto rico, autoexpreso multas puerto rico, Multas, Machine shop puerto rico">  

<meta name="keywords" content="Servicios especialidad en puerto rico , Talleres en puerto rico, Dealers en puerto rico, numero telefono de Dealers en puerto rico,  numero telefono de talleres en puerto rico,  direccion de Dealers en puerto rico, Busqueda taller por especialidad en Puerto rico, Busqueda de Dealers en Puerto rico, Busqueda de seguros para autos en Puerto rico, Busqueda de centro de inspeccion en Puerto rico, Busqueda de compañias de prestamos de auto con titulo en Puerto rico, Busqueda de financiamiento de autos en Puerto rico">

<link rel="shortcut icon" href="todoautopr.ico"/>

 <link href="card/css-card/estilos2.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="foto-3/slick.css"/>
 <link rel="stylesheet" type="text/css" href="foto-3/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="foto-3/anuncio-destadado.css"/>
<style>
.button {
	width:100%;
  background-color: #F00;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  margin-bottom:2px;
}
</style>
<style>
#Carousel  {
	max-height:200px;
	margin-top:100px;
}
#myCarousel  {

	margin-top:200px;
}
#myCarousel img  {
	max-height:70px;
	margin-top:px;
}
#myCarousel .carousel-control-prev  {
	margin-top:25%;
}
#myCarousel  .carousel-control-next {
	margin-top:25%;
}
#myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
}
#myCarousel h4{
	font-size:80%;
	margin-bottom:15px;
	color:#FFF;
	line-height:100%;
	letter-spacing:0.5px;
	font-weight:600;
}
#myCarousel p{
	font-size:14px;
	margin-bottom:15px;
	color:#d5d5d5;
}
#myCarousel .carousel-item a{background:#F47735; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
#myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
#myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#myCarousel .container {max-width: 1430px;  }
#myCarousel .carousel-item{height:20%; min-height:100px; }
#myCarousel{position:relative; z-index:1; background:url(https://i.imgur.com/6axE29k.jpg) center center no-repeat; background-size:cover; }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}


 
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}


</style>
  </head>

  



<style>

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
  font-weight:700;	
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
.table-responsive {
    display: table;
}
.table h4 {
	font-family:'Roboto';
  font-weight:300;
}
.table td {
	width:33%;
}

</style>

<!------banners-------------------------->
<script type="text/javascript" src="slogan-azul/js/jquery-2.1.1.min.js"></script>
<body>

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
				  <img src="slide-mysql/data1/images/<?php echo $row_ms_slider['imagen']; ?>" 
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
    <div id="slogan-azul"><?php include ("slogan-azul/slogan-azul.php") ?></div>
    <div id="items">
     <div class="items">
     <div><img src="imagen/toyota-carro.jpg"></div>
     <div><img src="Fotos para pagina/20201224_093945.jpg"></div>
     <div><img src="Fotos para pagina/20210129_143012.jpg"></div>
     <div><img src="Fotos para pagina/20210308_140403.jpg"></div>
     <div><img src="Fotos para pagina/20210308_140423.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/preview/03_r_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/04_g_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/01_b_car.jpg"></div>
 </div>
    </div>
    
</body>

    
  </header> 
 

  
  <div id="contenedor"> 
 <div id="titulo">
  <h1 style="color:#0B0B61;" >Todo Auto Puerto rico</h1>
  
   <h2 style="color:#0B0B61;" >¿Buscas un servicio automotriz? ¿Piezas para tu auto? ¿Un auto nuevo o usado?</h2>
  <p style="color:#0B0B61;  margin-left:20px;" >Llegaste el lugar indicado, aqui encuentra autos nuevos / usados , camiones, motoras, auto parts, body parts, hojalateria, mecanica, electromecanica, inspección, marbete y mucho mas para tu auto</p>
   <h1 style="color:#F00;" >Menu </h1>
  
  
  
<div id="cards">
<div class="container2" style="background-color:#FFFFFF;">
<div class="row">

  <?php

$sql = "SELECT id, info, servicio, image, pueblo FROM cards ORDER BY `servicio`  ASC";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
  
<div class="col-sm-6">
<div class="card " style="background-color:#d6eaf8;">
<div class="card-body">
  <div class="card-img-top">
  
<img  style="margin-top:5%;" src="card/img-menu-contenido/<?php echo $record['image']; ?> ">
</div>
<div class="card-body info">
<h5 class="card-title"><?php echo $record['servicio']; ?></h5>
<p class="card-title">Encuentre los mejores servicios aqui...</p>
</div>

<div class="card-footer btn bg-primary  " style="width:100%;">
<a href="<?php echo $record['info']; ?>">Para información Click aqui </a>
</div>
</div>
</div>
</div>
<?php } ?>
</div> 
</div>
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
<link href="css/principal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
 
 <link rel="stylesheet" type="text/css" href="css/menu-fotos.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<link rel="stylesheet" type="text/css" href="slide-mysql/engine1/style.css" />
<script src="jquery.min.js"></script>

<script src="js/respond.min.js"></script>
<!---------------------Banner--------------------------------->

<script type="text/javascript" src="slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="slide-mysql/engine1/script.js"></script> 
     
    <script src="dist/js/bootstrap.min.js"></script>
     
   <script src="js/ddba1ed91f.js" crossorigin="anonymous"></script>

   <script>
 $('#myCarousel').carousel({
    interval: 5000,
 })
</script>
<script type="text/javascript" src="foto-3/slick.min.js"></script>
</body>
<script type="text/javascript" src="foto-3/anuncio-destadado.js"></script>
</html>