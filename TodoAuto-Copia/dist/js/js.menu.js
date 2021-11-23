// JavaScript Document
jQuery.noConflict();
(function($){
    $('ul#menu-menu-with-anchors li a, a[href="#top"]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - ($('body').hasClass('admin-bar') ? 160 : 130)
        }, 500);
        return false;
    });

    bindUnbindNavToggle($);
    $(window).resize(function(){
        bindUnbindNavToggle($);
    });

})(jQuery);

function bindUnbindNavToggle($){
    if( $('button.navbar-toggle').css('display') != 'none' ) {
        $('.navbar-collapse ul li a').on('click', function(){
           $('.navbar-collapse').collapse('hide');
            return false;
        });
    }
    else {
        $('.navbar-collapse ul li a').on('click', function(){
            return false;
        });
    }
}