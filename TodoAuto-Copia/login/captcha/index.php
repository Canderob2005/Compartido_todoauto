<?php 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Google Recapcha</title>
<script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>

</head>

<body>
<form id="form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
usuario: <input type="text" name="name" />
<br /><br />
password: <input type="password" name="password" />
<br /><br /> 
<div class="g-recaptcha" data-sitekey="6Ld7zNIUAAAAABNU7I6mMCohgtfQI7Jcw2Ltp9ou"></div>
<br />
<input type="submit" name="login" value="Login" />


</form>
</body>
</html>