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

    <title>Sugerencias / Tips </title>
    <meta name="description" content="Sujerencias, consejos, pagina informativa, Tips al visitar un taller de servicios, que hacer cuando voy a un mecanico, el mecamico, taller y mucho mas">
  <meta name="keywords" content="Guia automotriz, Busqueda se servicios automotriz, telefono, direccion, taller, especialidad">
  
 <link rel="shortcut icon" href="../todoautopr.ico" />
 <script src="svg-injector.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/ddba1ed91f.js" crossorigin="anonymous"></script> 
  </head>
 
  
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/principal.css" rel="stylesheet" type="text/css">
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
<script type="text/javascript" src="../slogan-azul/js/jquery-2.1.1.min.js"></script>

   <script> $(document).ready(function (){ $("#click").click(function (){ $('html, body').animate({ scrollTop: $("#titulo").offset().top }, 2000); }); }); </script>
<script src="js/respond.min.js"></script>

</head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../fonts/css/all.css"/>

<!-- // -->
<style>
.dropdown-menu img {
	height:35px;
	width:35px;
}
@media only screen and (min-width: 799px) {


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
           <a class="dropdown-item" href="sugerencias.php">Tips y Sugerencias</a>
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
</nav>

</div>


    <div id="slogan-rojo">
    
    <letras>
<div class="div">Lo que buscas</div> 
<div class="div"> 
  <span>Encuentra-lo Aquí......</span>
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
  
  <div class="container-fluid">
 <div id="div1"></div> 
<body style="width:100%;">
<div id="contenedor"> 
<div class="container">
  

​<div class="card">
    <div class="card-body">
      <h1 class="card-title">Sugerencias y Consejos Útiles</h1>
      <h2 class="card-text">Siempre es importante comunicarle a una persona conocida</h2><h2> su intención de visitar algún taller de servicio o ventas.</h2>
      <br />
      <h2 class="card-text">Antes de salir al lugar, dejar por mensaje el teléfono, nombre </h2><h2>y dirección del taller o local a visitar de ser posible.</h2>
      <br />
      <h2 class="card-text">Al llegar al lugar, tomar una foto y si es posible, enviar</h2><h2> la ubicación del taller a un familiar o amigo, para que este al</h2><h2> tanto de sus movimientos.</h2>
      <br />
      <h2 class="card-text">Preguntar cual es el método de pago, si puede ser</h2><h2> electrónico, ATHmovil o tarjetas de crédito, ya que es</h2><h2> preferible no andar con mucho dinero en efectivo.</h2>
      <br />
      <h2 class="card-text">Saque los objetos de valor del auto.</h2>
      <br />
      <h2 class="card-text">No deje documentos importantes tales como, cartas </h2><h2>de banco, licencia, licencia del auto, pasaporte,</h2><h2> cartas con direcciones, etc en el auto.</h2>
      <br />
      <h2 class="card-text">Retire la llave principal del llavero, no deje </h2><h2>llaves del trabajo, casa, etc en el auto.</h2>
      <br />
      <h2 class="card-text">Verifique antes de dejar el auto, si tiene golpes,</h2><h2> rallados que usted no hubiera visto,  al recoger</h2><h2> el auto observe golpes nuevos o cualquier</h2><h2> irregularidad en el auto, antes de salir del lugar.</h2>
      <br />
      <h2 class="card-text">Recuerde que estos son consejos para evitar futuros</h2>
      <h2> inconvenientes, de esta manera su provedor de servicios</h2> 
      <h2>y usted podran disfrutar de una agradable experiencia.</h2>
    </div>
  </div>

 </div>	
    
 
  
   <script> $(document).ready(function (){ $("#click2").click(function (){ $('html, body').animate({ scrollTop: $("#div1").offset().top }, 2000); }); }); </script> 
  
    <br/> 
    
    

 </div>
 <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="margin-left:10%; margin-top:10%;" >Regresar</a>
                        <button style=" float:right; margin-top:10%;" class="btn btn-primary" id="click2">Ir al Arriba</button> 
						
					</div>
				</div>
 <div id="contenido">&nbsp;</div>
  <div id="anuncio-footer">&nbsp;</div>
  <div id="footer">&nbsp;</div>
</div>
</div>

<!---------------------Banner--------------------------------->

<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script>
     
    <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
     
     
   
</body>
</html>