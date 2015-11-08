$(function () {

    $('.glyphicon-menu-hamburger').on('click', function() {
		if($('.menu').css('display') == 'none') {
    		$('.menu').css('display', 'block');
            $('fieldset div:nth-child(3)').css('z-index', '-1');
    	} else {
    		$('.menu').css('display', 'none');
            $('fieldset div:nth-child(3)').css('z-index', '1');
    	}
    });

    setInterval(function (){
        if($('.carrusel img').attr('src') == '../images/carrusel/1.jpg') {
            $('.carrusel img').fadeOut(0).attr('src', '../images/carrusel/2.jpg').fadeIn(1200);
        } else if($('.carrusel img').attr('src') == '../images/carrusel/2.jpg') {
            $('.carrusel img').fadeOut(0).attr('src', '../images/carrusel/3.jpg').fadeIn(1200);
        } else if($('.carrusel img').attr('src') == '../images/carrusel/3.jpg') {
            $('.carrusel img').fadeOut(0).attr('src', '../images/carrusel/1.jpg').fadeIn(1200);
        }       
    }, 3000);
	
});