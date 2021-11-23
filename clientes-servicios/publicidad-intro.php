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
<title>Untitled Document</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/clientes-servicios.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/clientes-servicios.css">

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
<script src="js/respond.min.js"></script>
</head>
 <style type="text/css">
	
#cabecera {
	background-color:#F00;
	width:100%;
	color:#FFF;
	margin-bottom:-15px;
}
#cabecera h2{
	font-size:140%;
	
}


    </style>
<body>

<header>
   <div id="menu">
    
    <nav  class="navbar navbar-expand-md  ">
      <a class="navbar-brand img-responsive" href="../index.php"><img src="img-logo/todo-auto-pr.png"  alt="Todo Auto PR" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item active">
        <a class="nav-link" href="../indexbuscador.php" title="Buscador">Buscador</a>
        </li>
         
          <li class="nav-item active">
        <a class="nav-link" href="intro-clientes.php">Anunciate</a>
        </li>
        
         <li class="nav-item active">
         <a class="nav-link" href="publicidad-intro.php">Servicio</a>
        </li>
        
          <li class="nav-item active">
             <a class="nav-link" data-toggle="modal" data-target="#contactanosModal" href="#">Contactanos</a>
          </li>       
         
    </ul>

  </div>
</nav>

</div>
 <div id="cabecera">
           
			  <h2 style="text-align:center; margin-top:-2PX;">Departamentos</h2>
            </div>
    </header>
  <div id="contenedor">
    <div id="titulo"><h1 style="color:#F00; margin-left:10px;">BIENVENIDOS</h1></div>
     <div id="titulo"><h2 style="color:#F00; margin-left:10px;">Favor de escoger la opción deseada</h2></div>

    <div id="card">
    
   <div class="card ">
  <div class="card-body">
    <h4 class="card-title">Anuncia Tu Negocio / Servicio / Gratis</h4>
    <p class="card-text">Ingrese su información.</p>
    <a href="anuncio-opcion.php" class="btn btn-primary stretched-link">Para Comenzar Click Aqui</a>
  </div>
</div>
   
   
        </div>
        
    <div id="card2">
    
    <div class="card">
  <div class="card-body">
    <h4 class="card-title">Departamento de Servicio al Cliente </h4>
    <p class="card-text">Reclamaciones.</p>
    <a href="servicio-cliente.php" class="btn btn-primary stretched-link">Para Comenzar Click Aqui</a>
  </div>
</div>
    
    
</div>
        
    <div id="card3">
    
    <div class="card">
  <div class="card-body">
    <h4 class="card-title">Departamento de promociones</h4>
    <p class="card-text">Información.</p>
    <a href="departamento-promociones.php" class="btn btn-primary stretched-link">Para Comenzar Click Aqui</a>
  </div>
</div>
    
    
   
    </div>

  
</div>
 <!-- Modal -->
<div class="modal fade" id="contactanosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <table style="background-color:#;">
  <tr>
    <td div id="img" > <a href="https://api.whatsapp.com/send?phone=17874597059"><img src="../imagen/whatsapp.png" height="50%" width="40%" ></a></td>
    <td div id="img" > <a  href="mailto:t.autopr@gmail.com"><img src="../imagen/email.png"height="50%" width="40%" ></td>
    <td div id="img"><a href="tel:7874597059"><img src="../imagen/Telefono.png"height="50%" width="40%" ></a></td>
    <td div id="img"><a href="https://www.facebook.com/Todo-Auto-2079979712295796"><img src="../imagen/face.png"height="50%" width="40%" ></a></td>
  </tr>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  
</div>

    <script src="../dist/js/script.js"></script>
    <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	
</body>
</html>
