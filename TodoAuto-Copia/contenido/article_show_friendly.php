<?php

include_once('../conexiones/conexion-frendly.php');

# connect to mysql  database
if(!$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass)){
    echo 'could not connect database';
    }
    
# use database
if(!mysqli_select_db($link, $mysql_database)){
   echo "Database not found";
   die();       
   }

# look for articles
$query = mysqli_query($link, "SELECT * 
                              FROM clientes 
                              WHERE friendly_url = '{$_GET['url']}' ");
							 

# if article not found then go back to aritcles list page
if(mysqli_num_rows($query) == 0){
   header('Location: informacion.php');
   die();
   }
else{
    $row = mysqli_fetch_assoc($query);
    }
       
?><!DOCTYPE html PUBLIC "-#W3C#DTD XHTML 1.0 Transitional#EN" "http:#www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:#www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/principal.css">
		<script src="../js/jquery-2.1.1.min.js"></script>
		<script src="../dist/js/bootstrap.min.js"></script>	

<title> <?php # show article title here 
echo $row['nombreNegocio'];?></title>
<style type="text/css">

@import url('Roboto.css');
#nombre h1 {
	font-size:170%;
	font-family:'Roboto';
   font-weight:800;
    text-align:center;
	color:#0B0B61
}

.table .let   p {
	font-size:110%;
	font-family:'Roboto';
   font-weight:400;
}
.table td  a {
	font-size:100%;
	font-family:'Roboto';
   font-weight:400;
   color:#0B0B61;
}
.table td  .fa {
	font-size:180%;
    color:#009900;
}

.let p {
    text-transform: lowercase;
}

.let p:first-letter {
    text-transform: uppercase;
}

@media only screen and (min-width: 799px) {
#nombre h1 {
	font-size:320%;
	font-family:'Roboto';
   font-weight:800;
    text-align:center;
	color:#0B0B61
}

.table td  p {
	font-size:170%;
	font-family:'Roboto';
   font-weight:400;
}
.table td  a {
	font-size:110%;
	font-family:'Roboto';
   font-weight:400;
   color:#0B0B61;
}
.table td  .fa {
	font-size:230%;
    color:#009900;
}
.let p {
    text-transform: lowercase;
}

 .let p:first-letter {
    text-transform: capitalize;

}




</style>
</head>

<body>
<div id="Cabecera" style=" background-color:#0B0B61; text-align:center;" > <a href="../index.php"><img src="../img-logo/todo-auto-pr.png" alt="Todo Auto Pr" />
</a> </div>
<br />
<div id="nombre">
<h1><strong><?php echo $row['nombreNegocio']; ?></strong></h1>
</div>
<div class="container">
			
			
			
						


						
		
			
                             
                              <br />
                        <hr / style="color:rgb(0,0,255); border:solid 3px;"> 
                        <div class="table-responsive-xl"> 
                
                <table class="table" style="text-align:center;color:#0B0B61; width:100%; min-width:100%;">
              

  
   <tr>
    <td class="let"  width="50%"><p>Servicios</p></td>
    <td class="let" width="50%"><p><?php echo $row['id_serv']; ?></p></td>
  </tr>
   <tr>
    <td class="let" width="50%"><p>Numero negocio</p></td>
    <td class="let" width="50%"><a href="tel:<?php echo $row['telefonoNegocio']; ?>"><p><?php echo $row['telefonoNegocio']; ?></p></a></td>
  </tr>
  <tr>
    <td class="let" width="50%"><p>Enviar mensaje<br />según disponibilidad</p></td>
    <td class="let" width="50%"><a href="https://api.whatsapp.com/send?phone=+1 <?php echo $row['telefonoNegocio']; ?>&text=Cortesia%20de%20Todoautopr.com%20---------%20Favor%20escribir%20mensaje:%20"><p><i class="fa">&#xf232;</i>
    </p></a></td>
   

  </tr>
 <div id="let">
   <tr>
    <td class="let" width="50%"><p class="let">Dirección negocio</p></td>
    <td class="let" width="50%"><p class="let"><?php echo $row['direccionNegocio']; ?></p></td>
  </tr>
  </div>
   <tr>
    <td class="let" width="50%"><p>Pueblo</td>
    <td class="let" width="50%"><p><?php echo $row['pueblo']; ?></p></td>
  </tr>
  <tr>
    <td class="let" width="50%"><p>Servicio a domicilio</td>
    <td class="let" width="50%"><p><?php echo $row['serv_dom']; ?></p></td>
  </tr>
   <tr>
    <td class="let" width="50%"><p>Numero anuncio</p></td>
    <td class="let" width="50%"><p>#<?php echo $row['id']; ?></p></td>
  </tr>
  
  </table>
</div>

        <form>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="javascript: history.go(-1)" class="btn btn-primary">Regresar</a>
                        
					
					</div>
				</div>
			</form>
		</div>
</body>
</html>