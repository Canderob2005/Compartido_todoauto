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
<script type="text/javascript">
function subirimagen(nombrecampo)
{
	self.name='opener';
	remote = open('gestionimagen.php?campo='+nombrecampo, 'remote', 
	'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=no,fullscreen=no,status=yes');
	remote.focus();
	}
</script>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE sliderautoparts SET titulo=%s, imagen=%s, noticia=%s, link=%s, orden=%s, estado=%s WHERE id_slider=%s",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['noticia'], "text"),
                       GetSQLValueString($_POST['link'], "text"),
                       GetSQLValueString($_POST['orden'], "int"),
                       GetSQLValueString($_POST['estado'], "int"),
                       GetSQLValueString($_POST['id_slider'], "int"));

  mysqli_select_db( $cnx_slider,$database_cnx_slider );
  $Result1 = mysqli_query($cnx_slider,$updateSQL) or die(mysql_error());

  $updateGoTo = "lista_slider.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$varDato_edit_slider = "0";
if (isset($_GET["recordID"])) {
  $varDato_edit_slider = (get_magic_quotes_gpc()) ? $_GET["recordID"] : addslashes($_GET["recordID"]);
}

$query_edit_slider = sprintf("SELECT * FROM sliderautoparts WHERE sliderautoparts.id_slider = %s", $varDato_edit_slider);
$edit_slider = mysqli_query($cnx_slider,$query_edit_slider) or die(mysqli_error());
$row_edit_slider = mysqli_fetch_assoc($edit_slider);
$totalRows_edit_slider = mysqli_num_rows($edit_slider);
?><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Banners Auto Parts</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

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
  <div class="col-md-2"></div>
  <div class="col-md-8">
		<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
	    <div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" name="titulo" value="<?php echo $row_edit_slider['titulo']; ?>"  required>
		</div>
		<div class="form-group">
			<label for="imagen">Imágen</label>
			<input type="text" class="form-control" name="imagen" value="<?php echo $row_edit_slider['imagen']; ?>" required>
			<br>
			<input class="btn btn-warning" type="button" name="button" id="button" value="Subir Imagen"
       onclick="javascript:subirimagen('imagen');"/>
	    </div>
		<div class="form-group">
			<label for="noticia">Noticia</label>
			<textarea name="noticia" class="form-control" rows="3"><?php echo $row_edit_slider['noticia']; ?></textarea>
	  	</div>
		<div class="form-group">
			<label for="link">Link</label>
			<input type="text" class="form-control" name="link" value="<?php echo $row_edit_slider['link']; ?>" required>
		</div>
		<div class="form-group">
			<label for="orden">Orden</label>
			<input type="text" class="form-control" name="orden" value="<?php echo $row_edit_slider['orden']; ?>" required>
		</div>
		<div class="form-group">
			<label for="orden">Estado</label>
		  	<select class="form-control" name="estado" required>
			  	<option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Activo</option>
             	<option value="0" <?php if (!(strcmp(0, ""))) {echo "SELECTED";} ?>>Desactivado</option>
			</select>
		</div>
	  <input type="submit" class="btn btn-primary" value="Actualizar registro">
	  
      <input type="hidden"  name="MM_update" value="form1">
      <input type="hidden" name="id_slider" value="<?php echo $row_edit_slider['id_slider']; ?>">
    </form>
    </div>
        
        <div class="col-md-2"></div>
      </div>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>
<?php
mysqli_free_result($edit_slider);
?>