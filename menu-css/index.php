<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS Responsive Dropdown Menu</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav>
        <div id="logo"><img src="../img-logo/todo-auto-pr.png"></div>

       <div id="toggle"> <label for="drop" class="toggle">Menu</label></div>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="#">Home</a></li>
                 <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">WordPress +</label>
                    <a href="#">WordPress</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="#">Themes and stuff</a></li>
                        <li><a href="#">Plugins</a></li>
                        <li><a href="#">Tutorials</a></li>
                    </ul> 

                </li>
                <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Web Design +</label>
                <a href="#">Web Design</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Links</a></li>
                    <li>
                       
                    <!-- Second Tier Drop Down -->        
                    <label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>         
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                    </li>
                </ul>
                </li>
               
            </ul>
        </nav>


        <p> A simple dropdown navigation menu made with CSS Only. Dropdowns are marked with a plus sign ( + )</p>
        <p> Resize the screen to see the look if the screen is smaller then 768px </p>
<!-- partial -->
  
</body>
</html>
