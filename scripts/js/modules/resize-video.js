'use strict';


$(window).on('load', function()
{
    resizeContent();
    initEventListeners();

})



function initEventListeners()
{
    window.addEventListener( 'resize', onWindowResize, false );

}



function onWindowResize()
{
    resizeContent();

}



function resizeContent()
{
    var $window = $(window);
    var windowWidth = $window.width();

    try {
        $('.video-js').css({'height': (windowWidth * 9/16) * 0.8});
        $('#inline-vid').css({'height': windowWidth * 9/16});
        $('#support-vid').css({'height': ( $( '#support-vid-container' ).width() * (9/16) ) });

    } catch(ERROR){/* */}
    

}


