<?php include '../conexiones/DBController.php';
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  

    <title>Buscador Todo Auto PR</title> 
  <meta name="description" content="Buscador de servicios automotriz por especialidad ,Busqueda de numero telefono de negocio, Busqueda direccion de negocios, Busqueda taller por especialidad, Busqueda de Dealers, Busqueda de seguros para autos, Busqueda de centro de inspeccion, Busqueda de compañias de prestamos de auto, Busqueda de financiamiento de autos">
  
<meta name="keywords" content="Buscador Servicios para Autos, Camiones, motoras, mecanica, Hojalatero, Electromecanico ,Dealesr , seguro, Alquiler, Radiadores, Body part, Detailing , Aros, Marbete, inspeccion, Autos nuevos, Autos usados, Junkers, Piezas, Piezas nuevas, piezas usadas, Financiamiento, prestamos, Gruas, Gomas,Distribuidores, Accesorios ">  
<link rel="shortcut icon" href="../todoautopr.ico" />
 <link rel="stylesheet" type="text/css" href="../css/footer.css"/>

  </head>

<link href="css/estilos-menu.css" rel="stylesheet" type="text/css">  
<link href="../css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css"/>
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
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>  
<script src="../js/respond.min.js"></script>

<script src="../js/ddba1ed91f.js" crossorigin="anonymous"></script>
    <script type = "text/javascript">
        $(function () {
            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
    </script>

</head>
<style>
@font-face {
    font-family: "Roboto-BlackItalic";
    src: url('fonts/Roboto-BlackItalic.ttf');
}
@font-face {
    font-family: "Roboto-Medium";
    src: url('fonts/Roboto-Medium.ttf');
}
td a:link {
	color: #00F;
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
.dropdown-menu img {
	height:35px;
	width:35px;
}

#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
@media only screen and (min-width: 799px) {
#dropodown  {
	margin-top:25px;
}
.dropdown-menu  {
	margin-top:45px;
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
        <a class="nav-link" href="formulario.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>
         
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="formulario.php">Anunciate</a>
          <a class="dropdown-item" href="../clientes-servicios/servicio-cliente.php">Servicios</a>
          <a class="dropdown-item" href="../contenido/quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="../contenido/sugerencias.php">Tips y Sugerencias</a>
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
   
     
</div>
 
  
 <div id="contenedor-menu">
 <div id="div1"></div> 
 <section class="cards contenedor">
        <h2 class="titulo">Galeria de servicios</h2>
        <div class="content-cards">
            <article class="card">
              <img src="img-menu-contenido/accesorios.jpg" title=" accesorios para autos, camiones vans, motoras" alt="accesorios para autos, camiones vans, motoras"class="responsive">

              <h3> accesorios para autos, camiones vans, motoras</h3>
                <p>Aquí encontrara los mejores tiendas de Accesorios para autos por pueblo.</p>
              <a href="../contenido/accesorios.php" class="cta">Buscar</a>
          </article>
          
            <article class="card">
              <img src="img-menu-contenido/aire-autos.jpg" title="Taller de Aires acondicionado para auto" alt="Taller de Aires acondicionado"class="responsive">

              <h3>Taller de Aires acondicionado</h3>
                <p>Aquí encontrara los mejores Talleres de Aires acondicionado para autos por pueblo.</p>
              <a href="../contenido/aire.php" class="cta">Buscar</a>
          </article>
          
            <article class="card">
              <img src="img-menu-contenido/alineamiento.jpg"  title=" taller de alineamiento" alt="taller de alineamiento"class="responsive">
                <h3>taller de alineamiento</h3>
                <p>Aquí encontrara los mejores Talleres de alineamiento y reparación de tren delantero por pueblo.</p>
                <a href="../contenido/alineamiento.php" class="cta">Buscar</a>
          </article>
          
           <article class="card">
             <img src="img-menu-contenido/alquiler-autos.jpg"  title=" alquiler autos camiones vans" alt="alquiler autos camiones vans"class="responsive">
                <h3>Compañias de alquiler de autos camiones vans</h3>
                <p>Aquí encontrara las mejores compañias de alquiler de autos camiones vans por pueblo.</p>
                <a href="../contenido/alquiler.php" class="cta">Buscar</a>
          </article>
          
           <article class="card">
             <img src="img-menu-contenido/asistencia.jpg"  title=" asistencia en la carretera" alt="asistencia en la carretera"class="responsive">
                <h3>Asistencia en la carretera</h3>
                <p>Aquí encontrara los mejores servicios en asistencia en la carretera por pueblo.</p>
                <a href="../contenido/asistencia.php" class="cta">Buscar</a>
          </article>
          
           <article class="card">
             <img src="img-menu-contenido/auto-parts.jpg"  title=" auto parts" alt="auto parts"class="responsive">
                <h3>Auto parts</h3>
                <p>Aquí encontrara los mejores especiales en piezas de repuesto, nuevas, originales y remplaso por pueblo.</p>
                <a href="../contenido/auto-parts.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img-menu-contenido/autos-nuevos.jpg"  title="Dealers de autos nuevos" alt="Dealers de autos nuevos"class="responsive">
                <h3>Dealers de autos nuevos</h3>
                <p>Aquí encontrara los mejores dealers por marcas, precio, servicio y garantia en autos nuevos y los  por pueblo.</p>
                <a href="../contenido/autos-nuevos.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img-menu-contenido/autos-nuevos-usados.jpg"  title="Dealers de autos nuevos y usados" alt="Dealers de autos nuevos y usados"class="responsive">
                <h3>Dealers de autos nuevos y usados</h3>
                <p>Aquí encontrara los mejores Dealers por marcas, precio, servicio y garantia en autos nuevos y usados por pueblo.</p>
                <a href="../contenido/autos-nuevos-usados.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img-menu-contenido/autos-usados.jpg"  title="Dealer de autos usados" alt="Dealer de autos usados"class="responsive">
                <h3>Dealer de autos usados</h3>
                <p>Aquí encontrara los mejores Dealers por marcas, precio, servicio y garantia en autos  usados por pueblo.</p>
                <a href="../contenido/autos-usados.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img-menu-contenido/body-parts.jpg"  title=" Body parts" alt="Body parts"class="responsive">
                <h3>Body parts</h3>
                <p>Aquí encontrara los mejores precios en piezas de carroceria americanas, Koreanas, Japonesas, chinas, europeas y mucho mas por pueblo.</p>
                <a href="../contenido/body-parts.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img-menu-contenido/camiones-dealer.jpg"  title=" Dealers de camiones nuevos y usados" alt="Dealers de camiones nuevos y usados"class="responsive">
                <h3>Dealers de camiones nuevos y usados</h3>
                <p>Aquí encontrara los mejores dealers de camiones nuevos y usados por marcas, precio, servicio y garantia  por pueblo.</p>
                <a href="../contenido/camiones.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
          
           <article class="card"><img src="img/gomera.jpg"  title=" taller gomas" alt="taller gomas"class="responsive">
                <h3>Reparación gomas</h3>
                <p>Aquí encontrara los mejores Talleres de reparación de gomas por pueblo.</p>
                <a href="../contenido/gomera.php" class="cta">Buscar</a>
          </article>
        </div>
    </section>
 
 
 
 </div>
  <div class="form-group">
					<div>
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="float:left;margin-left:10%; margin-top:10%;" >Regresar</a>
                          <button style=" float:right; margin-top:10%; margin-right:10%;" class="btn btn-primary" ><a href="javascript:;" id="scrollToTop">Arriba</a></button>  
						
					</div>
   <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></MARQUEE></div>
   <!-- Footer -->
	<div id="footer">
			
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
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa  fa-whatsapp"></i></a></li>
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
		        
	</div>
	<!-- ./Footer -->
</div>

<!---------------------Banner--------------------------------->

<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script>
     
    <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
 
     
  
</body>
</html>