<?php
$title="Carousel Bootstrap 3 con PHP y MySQL";
/* Llamar la Cadena de Conexion*/ 
include ("config/conexion.php");
$active="active";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
    .container #carousel-example-captions {
				width:100%;
}
    .container #carousel-example-captions img {
				width:100%;
				min-height:85px;
}
    .container .item .carousel-caption  .btn {
		font-size:10px;
		margin-bottom:-80px;
		width:40%;
		margin-left:200px;
		text-align:center;
}
#inventario img{
	max-height:110px;
	text-align:center;
	margin-left:120px
}
#inventario h4{
		text-align:center;
}
@media only screen and (min-width: 767px) {
    .container #carousel-example-captions {
				width:100%;
}
    .container #carousel-example-captions img {
				width:100%;
				min-height:85px;
}
    .container .item .carousel-caption  .btn {
		font-size:18px;
		margin-bottom:-80px;
		width:40%;
		margin-left:200px;
		text-align:center;
}	
}

    </style>
  </head>
  <body>
  <hr>
    <div class="row-fluid">
    <div class="container" style="width:100%;">
   
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-9">
			<div id="carousel-example-captions" class="carousel slide" data-ride="carousel"> 
				<?php
					$sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
					$nums_slides=mysqli_num_rows($sql_slider);
				?>
				 
				<div class="carousel-inner" role="listbox"> 
				<?php
					$active="active";
					while ($rw_slider=mysqli_fetch_array($sql_slider)){
				?>
						<div class="item <?php echo $active;?>"> 
							<img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="img/slider/<?php echo $rw_slider['url_image'];?>" data-holder-rendered="true"> 
							<div class="carousel-caption"> 
							
								
								<a class='btn btn-<?php echo $rw_slider['estilo_boton'];?> text-right' href="<?php echo $rw_slider['url_boton'];?>"><?php echo $rw_slider['texto_boton'];?></a>
							</div> 
						</div>
						<?php
						$active="";
					}
				?>
					
					 
					
				</div> 
				<a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
				<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
			</div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			<div id="inventario">
			<h4 class='text-center'>Sistema de inventario</h4>
			<a href="http://obedalvarado.pw/sistema-de-control-de-inventario/" target="_blank"><img src="http://obedalvarado.pw/img/sistema-control-inventario.png" class="img-responsive"></a>
		</div>
          </div>
    </div>
	
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>

