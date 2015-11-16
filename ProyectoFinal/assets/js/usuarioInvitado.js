$(function () {

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