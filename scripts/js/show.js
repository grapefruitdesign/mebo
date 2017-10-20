function smoothScrollTo(anchor) {
    var duration= 700;
    var targetY = $(anchor).offset().top;
    $("html, body").animate({
        "scrollTop" : targetY-125
    }, duration);
}

$(document).ready(function() {

	setTimeout(function() { 
		var hashURL = location.hash;
		if (hashURL != "" && hashURL.length > 1) {
			$(window).scrollTop(0);
			smoothScrollTo(hashURL);
		}
	 }, 200);

});