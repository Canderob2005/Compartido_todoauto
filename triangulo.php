<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/x-javascript">
$('input[type="text"]').qcont(function(evt){

      // force: true to lower case all letter except first
      var cp_value= ucfirst($(this).val(),true) ;

      // to capitalize all words  
      //var cp_value= ucwords($(this).val(),true) ;


      $(this).val(cp_value );

   });
</script>
</head>
<style type="text/css">


    #regresar a
        {
             cursor:pointer;
             background-color:#0090CB;
             display:inline-block;
             height:40%;
             width:10%;;
             color:#fff;
             font-size:20pt;
             text-align:center;
             text-decoration:none;
             line-height:40px;
			 float:left;
			 margin-left:10%; 
			 margin-top:10%;
			
        }
		 #scrollToTop a
        {
             cursor:pointer;
             background-color:#0090CB;
             display:inline-block;
             height:40%;
             width:10%;
             color:#fff;
             font-size:20pt;
             text-align:center;
             text-decoration:none;
             line-height:40px;
			 float:right;
			 margin-top:10%;
			 margin-right:10%;
        }
.triangle-up {
  width: 0;
  height: 0;
  border-left: 25px solid transparent;
  border-right: 25px solid transparent;
  border-bottom: 50px solid rgb(246, 156, 85);
}
.triangle-left {
  width: 0;
  height: 0;
  border-top: 25px solid transparent;
  border-bottom: 25px solid transparent;
  border-right: 50px solid #0000FF;
}



</style>
<body>
<h1>triangulo</h1>
<div class="triangle-up"></div>
<div class="triangle-left"></div>
<div id="regresar" >
<a href="javascript:history.go(-1)"  >&#x25C4;</a>
</div>
<div id="scrollToTop">
<a href="javascript:;"  >&#x25B2;</a>
</div>
<div class="qcont"><h1>CABALLO bimu di swks</h1></div>
</body>
</html>