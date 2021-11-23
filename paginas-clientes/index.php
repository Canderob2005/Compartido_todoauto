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


    <title>Paginas Clientes </title>   
<meta name=" description" content="">  

<meta name="keywords" content="">

<link rel="shortcut icon" href=""/>
  </head>
<style>
@import url('Roboto.css');
.navbar a:hover {
	color: #FFFFFF;
	text-decoration: none;
	
}
.navbar a {
	 font-family: Verdana, Geneva, sans-serif;
   font-weight:800;
}
</style>
  



<style>
.dropdown-menu img {
	height:35px;
	width:35px;
}
#contenedor{	
	height:100%;
	min-height:100vw;		
}
#anuncio-footer h5 {
	font-size:14px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
@media only screen and (min-width: 767px) {

.dropdown-menu  {
	margin-top:45px;
}
#anuncio-footer h5 {
	font-size:20px;
	font-family:'Roboto';
  font-weight:300;
  margin-top:5px;	
}
}

</style>
<link href="css/principal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/footer.css"/>
<!------banners-------------------------->
<link rel="stylesheet" type="text/css" href="slide-mysql/engine1/style.css" />

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<body>

  <header>
    <div id="menu">
    
    <nav  class="navbar navbar-expand-md ">
      <a class="navbar-brand img-responsive" href="index.php">Gomera San Rafael</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
            <a class="nav-link" href="../clientes-servicios/servicio-cliente.php">Servicio <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="../contenido/quienes-somos.php">Quienes Somos<span class="sr-only">(current)</span></a>
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


    
    <div id="banners">
    
   <?php
	$database_cnx_slider = "u317430902_todoAuto";
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
   
  </header> 
  

  
  <div id="contenedor"> 
  <br />
 <h1>Bienvenido a esta tu Gomera</h1>
 <h2>Aqui encontrara los mejores precios</h2>
 <br /><br />

  <div  style="float:left;" class="col-sm-6">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title" style="color:#F00;">Si busca un servicio por pueblo, utilice el<p>Buscador</p> </h5>
        
        <a href="../indexbuscador.php" class="btn btn-primary">Buscador</a>
      </div>
    </div>
  </div>
  
  <div  style="float:left;" class="col-sm-6">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title" style="color:#F00;">Si busca un servicio en general, utilice el <p>Menu</p></h5>
        
        <a href="../contenido/menu.php" class="btn btn-primary">Menu</a>
      </div>
    </div>
  </div>
<br /><br /><br /><br /> <br /><br /><br /><br />


  <div  style="float:left;" class="col-sm-6">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title" style="color:#F00;">Si desea anunciar su Taller o servicio</h5>
        
        <a href="../clientes-servicios/intro-clientes.php" class="btn btn-primary">Anunciate</a>
      </div>
    </div>
  </div>
 
  <div  style="float:left;" class="col-sm-6">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h5 class="card-title" style="color:#F00;">Si deseas contactarnos</h5>
        
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Contactanos
</button>
      </div>
    </div>
  </div>

 </div>

  <div id="anuncio-footer"><MARQUEE WIDTH=100%  ALIGN=MIDDLE ><h5>Bienvenido a esta tu guia automotriz, aqui encontraras Autos nuevos usados, Camiones, Piezas nuevas usadas, Alquiler, Servicios y mucho mas.....</h5></MARQUEE></div>
 <!-- Footer -->
	<section  id="footer">
			
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
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa fa-whatsapp"></i></a></li>
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

<!-------Modal Contactanos-------------------------------->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5  text-center">
					<ul class="list-unstyled list-inline social text-center">
		
                       <li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=17874597059"><i class="fa  fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:t.autopr@gmail.com" target="_blank"><i class="fa  fa-envelope"></i></a></li>
                        <li class="list-inline-item"><a href="tel:7874597059"><i class="fa  fa-mobile-alt"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/Todo-Auto-2079979712295796"><i class="fa  fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/TodoAutoPR1"><i class="fa fa-3x fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa  fa-instagram"></i></a></li>
						
						
                        
                        
					</ul>
				</div>
				</hr>
			</div>
       
           
            
            <button style=" float:right;" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<script src="../js/respond.min.js"></script>
<!---------------------Banner--------------------------------->

<script type="text/javascript" src="../slide-mysql/engine1/wowslider.js"></script>
	<script type="text/javascript" src="../slide-mysql/engine1/script.js"></script> 
     
    <script src="../dist/js/bootstrap.min.js"></script>
     
   <script src="../js/ddba1ed91f.js" crossorigin="anonymous"></script>

   
</body>
</html>