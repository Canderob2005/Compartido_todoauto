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
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>Taller Mecanica Camiones</title>
    <!-- TemplateEndEditable -->
    
<link rel="shortcut icon" href="../todoautopr.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="../contenido/css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
<link href="../css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="../slide-mysql/engine1/style.css" />
<link href="../css/font-awesome.min.css" rel="stylesheet">

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
<!-- TemplateBeginEditable name="head" -->
<meta name="description" content="Taller Mecanica Camiones, Mecanica y reparación de Camiones desel, gaslina, gas y mucho mas.">
 <meta name="keywords" content="Guia automotriz,Busqueda de Taller Mecanica Camiones, Servicio Mecanica y reparación de Camiones desel, gaslina, gas y mucho mas, telefono, direccion"> 
<!-- TemplateEndEditable -->
</head>
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>
<script src="../contenido/svg-injector.min.js"></script>
<script src="https://kit.fontawesome.com/ddba1ed91f.js" crossorigin="anonymous"></script> 
<script src="../contenido/js/respond.min.js"></script>
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
#contenedor #titulo  h3 {
	font-size:17px;
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
          <li class="nav-item active">
            <a class="nav-link" href="../contenido/menu.php" title="Menu"><i class="fa fa-bars" aria-hidden="true"></i>
Menu</a>
          </li>
          <div id="dropodown">
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="../formulario/formulario.php">Anunciate</a>
          <a class="dropdown-item" href="../clientes-servicios/servicio-cliente.php">Servicio</a>
           <a class="dropdown-item" href="../contenido/quienes-somos.php">Quienes Somos</a>
           <a class="dropdown-item" href="../contenido/sugerencias.php">Tips y Sugerencias</a>
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
				 id="wows1_0"/>
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
  
  <div class="container-fluid">
  
 <div id="div1"></div> 
<div id="contenedor"> 
<!-- TemplateBeginEditable name="titulo" -->
 <div id="titulo"><h1><strong>Taller Mecanica Camiones</strong></h1></div><!--titulo-->
  <div id="titulo"><h3><strong> Mecanica y reparación de Camiones desel, gaslina, gas y mucho mas.</strong></h3></div><!--titulo-->
<!-- TemplateEndEditable -->
 
 <hr / style="color:#00F; border:solid 3px; width:100%;">
<table id="informacion"   style="text-align:center;width:100%; min-width:100%;" >
	<thead>
       
		<th style="width:50%;"><h1><strong>Nombre</strong></h1></th>
        <th style="width:30%;"><h1><strong>Pueblo</strong></h1></th>
        <th style="width:20%;"><h1><strong>Info</strong></h1></th>
        
	</thead>
	</table>
<!-- TemplateBeginEditable name="id-serv" -->
<?php
			$db = $cnx_slider;
			try{	
					$sql = $sql = "SELECT DISTINCT * FROM clientes WHERE (estatus= 'si') AND (id_serv =  'Taller Mecanica Camiones') ORDER BY pago='no' ASC";
				
				foreach ($db->query($sql) as $row) {
					?>
<!-- TemplateEndEditable -->
<table   style="text-align:center;width:100%; min-width:100%;" >
  <tbody><tr>
    
    
    <td style="width:50%;"><h5><strong><?php echo ($row["nombreNegocio"]); ?></strong></h5></td>
    <td style="width:30%;"><h5><strong><?php echo ($row["pueblo"]); ?></strong></h5></td>
    
    <td style="width:20%;"><?php echo $row[] = "<a href='../clientes-servicios/informacion-clientes.php?id=".$row['id']."' class='btn btn-primary btn-sm'>Info</span></a>"?></td><br />
    
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
 
  
   <script> $(document).ready(function (){ $("#click2").click(function (){ $('html, body').animate({ scrollTop: $("#div1").offset().top }, 2000); }); }); </script> 
  
    <br/> 
    
    

 </div>
 <div class="form-group">
					<div>
                    
						<a href="../contenido/menu.php" class="btn btn-danger" style="margin-left:10%; margin-top:10%;" >Regresar</a>
                         <button style=" float:right; margin-top:10%;" class="btn btn-primary" id="click2">Ir al Arriba</button> 
						
					</div>
				</div>
 <div id="contenido">Este es el contenido</div>
   <div id="anuncio-footer">"anuncio-footer"</div>
 <!-- Footer -->
	<section  id="footer">
			
				<div   class="col-xs-12 col-sm-4">
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
</html>