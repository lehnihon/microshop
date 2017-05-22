( function( $ ) {
	$(function() {
		

	});

	$(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
        	$(".anima-rino").addClass('animated wobble');
     	}
	});

} )( jQuery );