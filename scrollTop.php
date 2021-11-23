<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (){
            $("#click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#div1").offset().top
                }, 2000);
            });
        });
    </script>
    <div id="div1" style="height: 1000px; width 100px">
        Test
    </div>
    <br/>
    <div id="div2" style="height: 1000px; width 100px">
        Test 2
    </div>
    <button id="click">Click me</button>

</body>
</html>