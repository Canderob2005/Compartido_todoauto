<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<script src="jquery.min.js"></script>
<script src="foto-3/bootstrap.min.js"></script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fotos pequenas 3</title>
<style type="text/css">

.items {
    background-color: #FFF;
}

.items {
    width: 100%;
	max-height:150px;
    margin: 0px auto;
    margin-top: 0px
}

.slick-slide {
    margin: 10px
}

.slick-slide img {
    width: 50%;
    border: 0px solid #fff;
	margin-left:20%;
	margin-top:-50px;
}
</style>
 <!--Slick Carousel Slider-->
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <script type="text/javascript" src="slick.min.js"></script>
 <div class="items">
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/preview/03_r_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/04_g_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/01_b_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/preview/03_r_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/04_g_car.jpg"></div>
     <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190714/gallery/preview/01_b_car.jpg"></div>
 </div>
</body>
<script>
$(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 2000,
autoplay: true,
autoplaySpeed: 7000,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});
</script>
</html>