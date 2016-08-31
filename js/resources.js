(function( $ ) {
    "use strict";
$(function() {
            $('.thumbnail').hover(
            function(){
                $(this).find('.caption').slideDown(400); //.fadeIn(250)
                },
             function(){
                 $(this).find('.caption').slideUp(250); //.fadeOut(205)
                }
    );

        })
})
(jQuery);