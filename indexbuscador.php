
<?php include 'conexiones/DBController.php';
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
 
$db_handle = new DBController();
$id_servResultado = $db_handle->runQuery("SELECT DISTINCT id_serv FROM clientes WHERE (estatus= 'si') ORDER BY id_serv ASC ");

$puebloResultado = $db_handle->runQuery("SELECT DISTINCT pueblo FROM clientes WHERE (estatus= 'si') ORDER BY pueblo ASC");

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
<link rel="shortcut icon" href="todoautopr.ico" />
 <link rel="stylesheet" type="text/css" href="css/footer.css"/>

  </head>

  
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/principal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"/>
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="slide-mysql/engine1/style.css" />
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
<script type="text/javascript" src="slogan-azul/js/jquery-2.1.1.min.js"></script>  
<script src="js/respond.min.js"></script>

<script src="js/ddba1ed91f.js" crossorigin="anonymous"></script>
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
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
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
#contenedorBuscador {	
	height:100%;
	min-height:100vw;		
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
#contenedorBuscador {	
	height:100%;
	min-height:100vw;		
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
        <a class="nav-link" href="formulario/formulario.php"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span>
Anunciate</a>
        </li>
         
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="formulario/formulario.php">Anunciate</a>
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
    <div id="buscador">
 <div class="form-group">
    
<form method="POST" name="Busqueda"  action="indexbuscador.php" class="form-inline">
       
 <div id="servicios">
 <div class="col-sm-10">
    <select  class="form-control"  name="id_serv[]"  >
            <option value="0" >Seleccione Servicio</option>
            <?php
   if (! empty($id_servResultado)) {
   foreach ($id_servResultado as $key => $value) {
   echo '<option value="' . $id_servResultado[$key]['id_serv'].'">'.$id_servResultado[$key]['id_serv'].'</option>';
      }
	}
?>
          </select>
          </div>
 
 </div>
    <div id="pueblo">
    <div   class=" col-sm-4 col-sm-12">
    <select  class="form-control"  name="pueblo[]"  >
            <option  value="0">Seleccione pueblo</option>
            <?php
         if (! empty($puebloResultado)) {
         foreach ($puebloResultado as $keyy => $value) {
         echo '<option  value="' . $puebloResultado[$keyy]['pueblo'] . '">' . $puebloResultado[$keyy]['pueblo'] . '</option>';
              }
        }
?>
          </select>
          </div>
          </div>
<div id="button">
 <div  class="col-sm-10"> 
    <button type="submit" name="submit" class="btn btn-primary"  >
  BUSCAR
</button>
</div>
</div>
         
    
 </form>       
</div>  



</div>
  </header> 
   <div id="div1"></div> 
   
  <div id="contenedorBuscador"> 
   <?php
  if ((! empty($_POST['id_serv'])) or (! empty($_POST['pueblo'])) ) {?>
      <table id="tabla"    class="table">
        <thead >
          <tr>
            <th><strong><p>Información</p></strong></th>
            <th><strong><p>Especialidad</p></strong></th>
            <th><strong><p>Pueblo</p></strong></th>
            
          </tr>
        </thead>
        <tbody>
          <?php
  $query = "SELECT * from clientes";
  $i = 0;
  $id_serv="";
  $union="" ;
  if (! empty($_POST['id_serv'])){
	  $seleccionCount = count($_POST['id_serv']);
  $seleccion = "";
  while ($i < $seleccionCount) {
  $seleccion = $seleccion . "'" . $_POST['id_serv'][$i] . "'";
     if ($i < $seleccionCount - 1) {
         $seleccion = $seleccion . ", ";
         }
     $i++;
	$id_serv="id_serv in (".$seleccion.")"; 
  }
  
}
  $mipueblo="";
  if (!empty($_POST['pueblo'])) {  
  $sa = count($_POST['pueblo']);
  $pseleccionCount = count($_POST['pueblo']);
//Profesion
  $ii = 0;
  $pseleccion = "";
  while ($ii < $pseleccionCount) {
  $pseleccion = $pseleccion . "'" . $_POST['pueblo'][$ii] . "'";
     if ($ii < $pseleccionCount - 1) {
         $pseleccion = $pseleccion . ", ";
         }
     $ii++;
  }
  $mipueblo=" pueblo in (".$pseleccion.")";
  } // cierra post profesion


if ((isset($_POST['id_serv'])) && (isset($_POST['pueblo'])) ) {
	if (($_POST['id_serv']>=1) &&($_POST['pueblo']>=1) ) {  
	$union=" and ";
}

}  
  $query = $query." WHERE $id_serv $union $mipueblo  AND `estatus`=('si') ORDER BY  pago = 'no';";  
  
  $result = $db_handle->runQuery($query);
  }
  
  if (! empty($result)) {
// Mostramos resultados de la busqueda
  foreach ($result as $key => $value) {
  ?>
 
          <tr>
            
         
          <td  style="width:33%;"><strong><h5 style="color:#00F;"> <?php echo  "<a href=informacion-{$result[$key]['friendly_url']}.php>{$result[$key]['nombreNegocio']}</a><br>" ?></h5></strong></td>
            <td style="width:33%;color:#0B0B61;"><strong><h5><?php echo $result[$key]["id_serv"]; ?></h5></strong></td>
   
    <td style="width:33%;color:#0B0B61;"><strong><h5><?php echo $result[$key]["pueblo"]; ?></h5></strong></td>
          </tr>
          <?php
    }
    ?>
          <?php
 }
               
?>
        </tbody>
      </table>
      <div class="form-group">
					<div>
                    
						<a href="javascript:history.go(-1)" class="btn btn-danger" style="float:left;margin-left:10%; margin-top:10%;" >Regresar</a>
                          <button style=" float:right; margin-top:10%; margin-right:10%;" class="btn btn-primary" ><a href="javascript:;" id="scrollToTop">Arriba</a></button>  
						
					</div>
</div>
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

<script type="text/javascript" src="slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="slide-mysql/engine1/script.js"></script>
     
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
 
     
  
</body>
</html>