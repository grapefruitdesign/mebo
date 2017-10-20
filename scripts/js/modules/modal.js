

$(document).ready(function()
{
    try {
        var modal_vid_1 = videojs("modal-vid-1");
    } catch (error) {/**/}

    try {
        var modal_vid_2 = videojs("modal-vid-2");
    } catch (error) {/**/}

    try {
        var modal_vid_3 = videojs("modal-vid-3");
    } catch (error) {/**/}

    try {
        var modal_vid_4 = videojs("modal-vid-4");
    } catch (error) {/**/}


    
    $(".modal-video").on('hide.bs.modal', function(){
         try {
            modal_vid_1.currentTime(0);
            modal_vid_1.pause();
        } catch (error) {/**/}

        try {
	        modal_vid_2.currentTime(0);
	        modal_vid_2.pause();
        } catch (error) {/**/}

         try {
            modal_vid_3.currentTime(0);
            modal_vid_3.pause();
        } catch (error) {/**/}

         try {
            modal_vid_4.currentTime(0);
            modal_vid_4.pause();
        } catch (error) {/**/}
    });
    
    $(".modal-video").on('show.bs.modal', function(){
        setTimeout( function(){
            $('.modal-open').css('padding-right', '')
        },0)
    });

});



