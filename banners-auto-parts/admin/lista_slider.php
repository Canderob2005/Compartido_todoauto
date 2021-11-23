<?php
$cnx_slider = new mysqli('localhost','u317430902_canderob','camara','u317430902_todoAuto');

// Check connection
if ($cnx_slider -> connect_errno) {
  echo "Failed to connect to MySQL Otra Vez: " .$cnx_slider -> connect_error;
  exit();
}
?> 
<?php

$query_ms_slider = "SELECT * FROM sliderautoparts";
$ms_slider = mysqli_query($cnx_slider,$query_ms_slider) or die(mysql_error());
$row_ms_slider = mysqli_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysqli_num_rows($ms_slider);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Banners Auto Parts</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="row">
        <div class="col-md-12">
          <h2>Banners Auto Parts</h2>
        </div>
        <div class="col-md-12">
          <p><a class="btn btn btn-success" href="registro_slider.php" role="button">Registrar Slider</a></p>
        </div>
        <div class="col-md-12">
        	
       	    <table class="table table-bordered table-hover">
        	    <tbody>
        	      <tr>
        	        <th>Título </th>
        	        <th>Imágen </th>
        	        <th>Orden </th>
        	        <th>Estado </th>
        	        <th>Acciones </th>
       	          </tr>
             
        	      <?php do { ?>
       	          <tr>
       	            <td><?php echo $row_ms_slider['titulo']; ?></td>
       	            <td><img src="../data1/images/<?php echo $row_ms_slider['imagen']; ?>" width="230" height="84"></td>
       	            <td><?php echo $row_ms_slider['orden']; ?></td>
       	            <td><?php if ($row_ms_slider['estado'] == 1)
								  echo "Activado";
							   else
							   	  echo "Desactivado"; ?></td>
       	            <td><a class="btn btn btn-primary btn-sm" href="editar_slider.php?recordID=<?php echo $row_ms_slider['id_slider']; ?>" role="button">Editar</a>
       	              <a class="btn btn btn-danger btn-sm" href="eliminar_slider.php?recordID=<?php echo $row_ms_slider['id_slider']; ?>" role="button">Eliminar</a>      	            </td>
      	          </tr>
        	        <?php } while ($row_ms_slider = mysqli_fetch_assoc($ms_slider)); ?>
       	        </tbody>
       	    </table>
        	  
        </div>
      </div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>
<?php
mysqli_free_result($ms_slider);
?>