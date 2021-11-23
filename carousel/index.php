<?php
include "admin/db.php";
 $images = get_imgs();
?>
<!-- Powered by Evilnapsis http://evilnapsis.com/ -->
<!DOCTYPE html>
<html>
<head>
  <title>Carouseles</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">

 .navbar.navbar-toggle .icon-bar:hover {
	background-color:blue; 
}
#bs-example-navbar-collapse-1  a:hover {
  background-color: #F00;
  color:#FFF;
}
#bs-example-navbar-collapse-1  a {
  color:#FFF;
}
</style>
</head>
<body>


<div class="container" style="width:100%; margin-top:-20px;">
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
  <div class="controls" style="margin-top:30px;">
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</div>
<?php else:?>
  <h4 class="alert alert-warning">No hay imagenes</h4>
<?php endif; ?>
</div>
</div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>