<?php
include "db.php";
 $images = get_imgs();
 ?>
 <?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?>



<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Estilo2</title>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrapslider.min.css">

<link href="css-card/estilos2.css" rel="stylesheet" type="text/css">
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
<link rel="stylesheet" type="text/css" href="dist/css/">
<link href="css-card/principal.css" rel="stylesheet" type="text/css">
<script src="dist/js/jquery-3.2.1.slim.min.js"></script>
<script src="dist/js/popper.min.js"></script>
<script src="dist/js//bootstrap.min.js"></script>
<script src="js/respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">


  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="carrusel" style="width:100%; margin-top:px;">
<div class="row">
<div class="col-m-0" >
<?php if(count($images)>0):?>
<!-- aqui insertaremos el slider -->
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicatodores -->
 

  <!-- Contenedor de las imagenes -->
  <div class="carousel-inner" role="listbox">
<?php $cnt=0; foreach($images as $img):?>
    <div class="item <?php if($cnt==0){ echo 'active'; }?>">
    <a href="<?php echo $img->link; ?>">
      <img src="<?php echo ' slide-mysql/data1/images/'.$img->imagen  ; ?>"  style="width:100%;"
       id="wows1_0" />
				</a>
    
      
    </div>
<?php $cnt++; endforeach; ?>
  </div>

  <!-- Controls -->

</div>
<?php else:?>
  <h4 class="alert alert-warning">No hay imagenes</h4>
<?php endif; ?>
</div>
</div>
</div>
<div id="slogan-rojo">
    
    <letras>
<div class="div">Lo que buscas</div> 
<div class="div"> 
  <span>Encuentralo Aqui......</span>
</div>
</letras>
    </div>

   
<div id="cards">
<div class="container">
<div class="row">

  <?php
include_once("db_connect.php");
$sql = "SELECT id, info, servicio, image, pueblo FROM cards ORDER BY `servicio`  ASC";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
  
<div class="col-sm-6">
<div class="card " style="background-color:#d6eaf8;">
<div class="card-body">
  <div class="card-img-top">
<img alt="" src="img-menu-contenido/<?php echo $record['image']; ?>">
</div>
<div class="card-body info">
<h5 class="card-title"><?php echo $record['servicio']; ?></h5>
<p class="card-title">Encuentre los mejores servicios aqui...</p>
</div>

<div class="card-footer btn bg-primary  " style="width:100%;">
<a href="<?php echo $record['info']; ?>">Informacion</a>
</div>
</div>
</div>
</div>
<?php } ?>.</div> </div></div></div>

<script src="js-card/jquery.min.js"></script>
</body>
</html>
