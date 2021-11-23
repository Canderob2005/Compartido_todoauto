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
<html lang="en"><!-- InstanceBegin template="/Templates/contenido-servicios.dwt.php" codeOutsideHTMLIsLocked="false" -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Quienes Somos</title>
    <!-- InstanceEndEditable -->
    
<link rel="shortcut icon" href="../todoautopr.ico" />

<!-- Bootstrap CSS -->
    <link  href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
<link href="../css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="../slide-mysql/engine1/style.css" />


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
<!-- InstanceBeginEditable name="head" -->
 
    <meta name="description" content="Somos una empresa netamente Puertorriqueña dedicada a ofrecer información sobre talleres, dealer que ofrcen Servicios para Autos, Camiones, mecanica, Electromecanico, Autos nuevos, Autos usados, Piezas, Piezas nuevas y mucho mas en Puerto rico">
  <meta name="keywords" content="Guia automotriz, Busqueda se servicios automotriz, telefono, direccion, taller, especialidad">
<!-- InstanceEndEditable -->
</head>
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>

<script src="../js/ddba1ed91f.js" crossorigin="anonymous"></script> 
<script src="../js/respond.min.js"></script>
   <script> $(document).ready(function (){ $("#click").click(function (){ $('html, body').animate({ scrollTop: $("#titulo").offset().top }, 2000); }); }); </script>





<!-- // -->
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
.dropdown-menu img {
	height:35px;
	width:35px;
}


#contenedor #titulo  h1 {
	text-align:center;
	font-size:20px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h2 {
	font-size:14px;
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
#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
@media only screen and (min-width: 799px) {

#contenedor #titulo  h1 {
	text-align:center;
	font-size:24px;
	font-family:'Roboto';
  font-weight:700;	
}
#contenedor #titulo  h3 {
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
#anuncio-footer h5 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
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
        <a class="nav-link" href="../formulario/formulario.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>
       
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="../formulario/formulario.php">Anunciate</a>
          <a class="dropdown-item" href="../clientes-servicios/servicio-cliente.php">Servicio</a>
           <a class="dropdown-item" href="quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="sugerencias.php">Tips y Sujerencias</a>
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
			  <li><!-- InstanceBeginEditable name="slider" -->
				<a href="<?php echo $row_ms_slider['link']; ?>">
				  <img src="../slide-mysql/data1/images/<?php echo $row_ms_slider['imagen']; ?>" 
				 id="wows1_0"/>
				</a>
          </li><!-- InstanceEndEditable -->
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
  
  <div class="container-fluid">
  
 <div id="div1"></div> 
<div id="contenedor"> 
<!-- InstanceBeginEditable name="titulo" -->

 <div class="card">
    <div class="card-body">
      <h1 class="card-title" style="text-align:center;">Quienes Somos</h1>
      <h2 class="card-text" style="text-align:justify; margin-left:40px; margin-right:40px;">Somos una empresa netamente Puertorriqueña dedicada
      a brindar información  de los  servicios ofrecidos
      en la rama automotriz en Puerto Rico.</h2>
    </div>
  </div>


​<div class="card">
    <div class="card-body">
      <h1 class="card-title" style="text-align:center;">Objetivos</h1>
      <h2 class="card-text" style="text-align:justify; margin-left:30px; margin-right:30px;">1) Nuestro objetivo es brindar la información correcta y precisa,
      tanto para nuestros usuarios como para nuestros
      suscriptores de la industria automotriz.</h2>
      
      <h2 class="card-text" style="text-align:justify; margin-left:30px; margin-right:30px;">2) Aunmentando los provedores para los
      usuarios y a su vez aumentando la clientera
      para nuestros suscriptores.</h2>
    </div>
  </div>
  
  
 

<div class="card">
    <div class="card-body">
      <h1 class="card-title" style="text-align:center;">Nuestra Meta:</h1>
      <h2 class="card-text" style="text-align:justify; margin-left:30px; margin-right:30px;">Nuestra meta es alcanzar lo mas preciado para nuestra empreza,
       Confiabilidad en la información ofrecida.</h2>
      
    </div>
  </div>
		
   ​<div class="card">
    <div class="card-body">
      <h1 class="card-title" style="text-align:center;">Nuestra Experiencia</h1>
      <h2 class="card-text" style="text-align:justify; margin-left:30px; margin-right:30px;">Nuestra compañia cuenta con un personal altamente
       calificado, con basta experiencia en Ventas y promociones.
       Contamos con un personal con gran experiencia en el manejo de  
      programas dirigidos exclusivamente a la industria automotriz.</h2>
    </div>
  </div> 
<!-- InstanceEndEditable -->
 
 
<!-- InstanceBeginEditable name="id-serv" -->



    
<!-- InstanceEndEditable -->
  </div><!--contenedor-->
 
  
   <script> $(document).ready(function (){ $("#click2").click(function (){ $('html, body').animate({ scrollTop: $("#div1").offset().top }, 2000); }); }); </script> 
  
    <br/> 
    
    

 </div>
 <div class="form-group">
					<div>
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="margin-left:10%; margin-top:10%;" >Regresar</a>
                         <button style=" float:right; margin-top:10%;" class="btn btn-primary" id="click2">Ir al Arriba</button> 
						
					</div>
				</div>
 <div id="contenido">contenido</div>
   <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></MARQUEE></div>
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
	<!-- ./Footer -->  
</div>
</div>

<!---------------------Banner--------------------------------->

<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script>
     
    <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
     
     
   
</body>
<!-- InstanceEnd --></html>