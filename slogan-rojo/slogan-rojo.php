<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Untitled Document</title>
</head>

<style>
/* Mobile Layout: 480px and below. */

@import url('https://fonts.googleapis.com/css?family=Roboto:300');

letras  {
  text-align:center;
  font-family:'Roboto';
  font-weight:100;
 
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

 .div {
	 margin-top:-10px;
	text-align:center;
  font-family:'Roboto';
  font-weight:600;
	font-size:16px;
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.div:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 8s infinite;
}

.div:last-of-type {
  width:0px;
  animation: reveal 8s infinite;
}

.div:last-of-type span {
  margin-left:-355px;
  animation: slidein 8s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:155px;}
    80% {opacity:1;}
    100% {opacity:0;width:155px;}
}

@media only screen and (min-width: 599px) {


letras  {
  
  height:100vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

 .div {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.div:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 8s infinite;
}

.div:last-of-type {
  width:0px;
  animation: reveal 8s infinite;
}

.div:last-of-type span {
  margin-left:-355px;
  animation: slidein 8s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:225px;}
    80% {opacity:1;}
    100% {opacity:0;width:225px;}
}


@media only screen and (min-width: 1023px) {
letras  {
  
  height:100vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);

}

 .div {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.div:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 8s infinite;
}

.div:last-of-type {
  width:0px;
  animation: reveal 8s infinite;
}

.div:last-of-type span {
  margin-left:-355px;
  animation: slidein 8s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}
</style>

<letras>


<div class="div">Lo que buscas</div> 
<div class="div"> 
  <span>Encuentralo Aqui......</span>
</div>
</letras>
</html>