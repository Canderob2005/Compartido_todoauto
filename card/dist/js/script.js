 $(function () { $('#navbarCollapse .dropdown-menu a:not(.dropdown-toggle)').bind('click touchstart', function () { $('.navbar-toggle:visible').click(); }); });
$(function(){ 
     var navMain = $(".navbar-collapse");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });
  
    