<?php require_once('../slide-mysql/Connections/cnx_slider.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="../slide-mysql/engine1/style.css" />
	<script type="text/javascript" src="../slide-mysql/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<body style="background-color:#d7d7d7">
<?php
mysqli_select_db($cnx_slider,$database_cnx_slider );
$query_ms_slider = "SELECT * FROM slider WHERE slider.estado = 1 ORDER BY slider.orden";
$ms_slider = mysqli_query($cnx_slider,$query_ms_slider );
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
				alt="<?php echo $row_ms_slider['titulo']; ?>" 
				title="<?php echo $row_ms_slider['titulo']; ?>" id="wows1_0" />
				</a>
				<?php echo $row_ms_slider['noticia']; ?>	          </li>
			  <?php } while ($row_ms_slider = mysqli_fetch_assoc($ms_slider)); ?>
		</ul>
	</div>
    <?php
mysqli_free_result($ms_slider);
?>
<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script>
</body>
</html>