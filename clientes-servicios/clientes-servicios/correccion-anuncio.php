
<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/departamento-promociones.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
 <title>Corregir Anuncio Todo Auto PR</title> 
  <meta name="description" content="Servicio al cliente,Arreglar telefono de negocio,Arreglar direccion de negocios,Arreglar taller por especialidad,Arreglar informacion">
<meta name="keywords" content="Servicios al cliente">
<!-- InstanceEndEditable -->
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="shortcut icon" href="../../todoautopr.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="../../css/principal.css" rel="stylesheet" type="text/css">
<link href="../../css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../dist/css/bootstrap.min.css">
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="../../slide-mysql/engine1/style.css" />
<link rel="stylesheet" type="text/css" href="css/clientes-servicios.css"/>
<script type="text/javascript" src="../../slogan-azul/js/jquery-2.1.1.min.js"></script>
<script src="../../js/ddba1ed91f.js" crossorigin="anonymous"></script>
  </head>
  <style type="text/css">
	
#cabecera {
	background-color:#F00;
	width:100%;
	color:#FFF;
	margin-bottom:-15px;
}
#cabecera h2{
	font-size:140%;
	
}
#card .btn {
	width:100%;
}

    </style>
    <style>
.dropdown-menu img {
	height:35px;
	width:35px;
}
#contenedor3{	
	height:100%;
	min-height:100vw;
	margin-top:60px;		
}
#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
@media only screen and (min-width: 767px) {

#contenedor3 {	
	height:100%;
	min-height:100vw;
	margin-top:60px;		
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



<header>
    <div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="../../index.php"><img src="img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="../../index.php"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
          
        <li class="nav-item active">
        <a class="nav-link" href="../../indexbuscador.php" title="Buscador"><i class="fa fa-fw fa-search"></i>Buscador</a>
        </li>
         
          <li class="nav-item active">
        <a class="nav-link" href="../../formulario/formulario.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>
         
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="../../formulario/formulario.php">Anunciate</a>
          <a class="dropdown-item" href="servicio-cliente.php">Servicios</a>
          <a class="dropdown-item" href="../../contenido/quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="../../contenido/sugerencias.php">Tips y Sugerencias</a>
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
				  <img src="../../slide-mysql/data1/images/<?php echo $row_ms_slider['imagen']; ?>" 
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
    <div id="slogan-azul"><?php include ("../../slogan-azul/slogan-azul.php") ?></div>
    <!-- InstanceBeginEditable name="cabecera" -->
	<div id="cabecera">
    <h2 style="text-align:center; margin-top:-2PX;">Departamento  Corrección de Anuncio</h2>
            </div>
	<!-- InstanceEndEditable -->
     
  </header> 
  <!-- InstanceBeginEditable name="contenedor" -->
  <div id="contenedor"> 


    <div id="titulo"><h1 style="color:#F00; margin-left:10px;">Para corregir anuncio</h1></div>
     <div id="titulo"><h2 style="color:#F00; margin-left:10px;">Favor de escoger tipo de cominicación</h2></div>
      <div id="titulo"><h2 style="color:#00F; margin-left:10px;">Favor de incluir su Nombre</h2></div>
      <div id="titulo"><h2 style="color:#00F; margin-left:10px;"> Numero de Anuncio.</h2></div>
      <div id="titulo"><h2 style="color:#00F; margin-left:10px;"> Numero de contacto(telefono).</h2></div>
       <div id="titulo"><h2 style="color:#00F; margin-left:10px;">Y una breve explicación.</h2></div>
        <div id="titulo"><h2 style="color:#F00; margin-left:10px;">Nos comunicaremos con usted a la mayor brebedad posible.</h2></div>
        <br /><br /><br />
    <div style="margin-top:140px;">
<table style="background-color:#00F; width:100%; text-align:center;" >
  <tr>
    <td> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fab fa-3x fa-whatsapp"></i></a></td>
    <td> <a  href="mailto:t.autopr@gmail.com"><i class="far fa-3x fa-envelope"></i></a></td>
    <td><a href="tel:7874597059"><i class="fas fa-3x fa-mobile-alt"></i></a></td>
    <td><a href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fab fa-3x fa-facebook-square"></i></a></td>
  </tr>
</table>
</div>
 </div>
<!-- InstanceEndEditable -->
 
 <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="margin-left:10%; margin-top:10%;" >Regresar</a>
                        <button style=" float:right; margin-top:10%;" class="btn btn-primary" id="click2">Ir al Arriba</button> 
						
					</div>
				</div>
<!---------------------Banner--------------------------------->
<!-- InstanceBeginEditable name="marquee" -->
 <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></MARQUEE></div>
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
	<!-- ./Footer -->  
<script type="text/javascript" src="../../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../../slide-mysql/engine1/script.js"></script> 
    <script src="../../dist/js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
     
   <script type="text/javascript">
   $(document).ready(function()
   { var height = $(window).height();
    $('#contenedorBuscador')
	.height(height); });
	 </script>
      
</body>
<!-- InstanceEnd --></html>