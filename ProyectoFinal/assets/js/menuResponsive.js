$(function() {

    $('.glyphicon-menu-hamburger').on('click', function() {
		if($('.menu').css('display') == 'none') {
    		$('.menu').css('display', 'block');
    	} else {
    		$('.menu').css('display', 'none');
    	}
    });

});