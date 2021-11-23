<?php
function addslashes__recursive($var){
if (!is_array($var))
return addslashes($var);
$new_var = array();
foreach ($var as $k => $v)$new_var[addslashes($k)]=addslashes__recursive($v);
return $new_var;
}
$_POST=addslashes__recursive($_POST);
$_GET=addslashes__recursive($_GET);
$_REQUEST=addslashes__recursive($_REQUEST);
$_SERVER=addslashes__recursive($_SERVER);
$_COOKIE=addslashes__recursive($_COOKIE);
?>
<html>
<head>
<link href="css/botones.css" rel="stylesheet" type="text/css"/>
<title>..:: Formulario de Contactos ::..</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script language="javascript" type="text/javascript">

	
	function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
	function validar()
	{
		var form=document.form;
//****************************************************************************		
		if (form.nom.value==0)
		{
			//alert("El campo nombre está vacío");
			document.getElementById("div_nom").innerHTML="<font color='#ff000'>El campo Nombre está vacío</font>";
			form.nom.value="";
			form.nom.focus();
			return false;
		}else
		{
			document.getElementById("div_nom").innerHTML="";
		}
//****************************************************************************		
		
//**************************************************************************
if(formulario.tel.value==0) {
			document.getElementById("div_tel").innerHTML="<font color='#ff000'>El campo Teléfono está vacío</font>";
			form.tel.focus();
			return false;
		}
		if(isNaN($("#tel").val())) {
			document.getElementById("div_tel").innerHTML="<font color='#ff000'>El teléfono solo debe contener números</font>";
			form.tel.focus();
			return false;
		}
		if($("#tel").val().length < 10) {
			document.getElementById("div_tel").innerHTML="<font color='#ff000'>El tel debe tener 10 caracteres. Ej. 7871112222</font>";
			form.tel.focus();		
		return false;
		}else
		{
			document.getElementById("div_tel").innerHTML="";
		}
//****************************************************************************
		if (form.correo.value==0)
		{
			document.getElementById("div_correo").innerHTML="<font color='#ff000'>El campo E-Mail está vacío</font>";
			form.correo.value="";
			form.correo.focus();
			return false;
		}else
		{
			document.getElementById("div_correo").innerHTML="";
		}
//****************************************************************************
		if (valida_correo(form.correo.value)==false)
		{
			document.getElementById("div_correo").innerHTML="<font color='#ff000'>Ingrese un E-Mail v&aacute;lido</font>";
			form.correo.value="";
			form.correo.focus();
			return false;
		}else
		{
			document.getElementById("div_correo").innerHTML="";
		}	
//****************************************************************************
		if (form.mensaje.value==0)
		{
			document.getElementById("div_mensaje").innerHTML="<font color='#ff000'>El campo Mensaje está vacío</font>";
			form.mensaje.value="";
			form.mensaje.focus();
			return false;
		}else
		{
			document.getElementById("div_mensaje").innerHTML="";
		}			
//****************************************************************************	
	form.submit();			
	}	
	function limpiar()
	{
		document.form.reset();
		document.form.nom.focus();
	} 
</script>
<style type="text/css">
@font-face {
	color:#FF0099 ;	
    font-family: 'Lobster14Regular';
    src: url('fonts/lobster-webfont.eot');
    src: url('fonts/lobster-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/lobster-webfont.woff') format('woff'),
         url('fonts/lobster-webfont.ttf') format('truetype'),
         url('fonts/lobster-webfont.svg#Lobster14Regular') format('svg');
    font-weight: normal;
    font-style: normal;
}
 
h3 {
	
	 font-family: 'Lobster14Regular';
    src: url('fonts/lobster-webfont.eot');
    src: url('fonts/lobster-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/lobster-webfont.woff') format('woff'),
         url('fonts/lobster-webfont.ttf') format('truetype'),
         url('fonts/lobster-webfont.svg#Lobster14Regular') format('svg');
    font-weight: normal;
    font-style: normal;	
	}		
	
	p {
		
	 font-family: 'Lobster14Regular';
    src: url('fonts/lobster-webfont.eot');
    src: url('fonts/lobster-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/lobster-webfont.woff') format('woff'),
         url('fonts/lobster-webfont.ttf') format('truetype'),
         url('fonts/lobster-webfont.svg#Lobster14Regular') format('svg');
    font-weight: normal;
    font-style: normal;	
	}		
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body onLoad="limpiar();">
<form name="form" id="formulario" action="proces.php" method="post"enctype="multipart/form-data">

<table align="center" width="440">

<tr>
<td valign="top" align="center" width="440" colspan="2">
<h3>Ingrese sus datos</h3>
</td>
</tr>

<tr>
<td valign="top" align="right" width="240">
<p>Nombre:</p>
</td>
<td valign="top" align="left" width="200">
<input type="text" name="nom">
<div id="div_nom"></div>
</td>
</tr>

<tr>
<td valign="top" align="right" width="240">
<p>Tel&eacute;fono:</p>
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tel" id="tel"/>
<div id="div_tel"></div>
</td>
</tr>

<tr>
<td valign="top" align="right" width="240">
<p>E-Mail:</p>
</td>
<td valign="top" align="left" width="200">
<input type="text" name="correo">
<div id="div_correo"></div>
</td>
</tr>

<tr>
<td valign="top" align="right" width="240">
<p>Mensaje:</p>
</td>
<td valign="top" align="left" width="200">
<textarea name="mensaje" cols="40" rows="10"></textarea>
<div id="div_mensaje"></div>
</td>
</tr>

<tr>
<td valign="top" align="center" width="420" colspan="2">
<input class='submit button selected'  type="button" value="Borrar" title="Borrar" onClick="limpiar();">
&nbsp;&nbsp;||&nbsp;&nbsp;
<input class='submit button selected' type="button" value="Enviar" title="Enviar" onClick="validar()">

</td>
</tr>

</table>

</form>

</body>
</html>
