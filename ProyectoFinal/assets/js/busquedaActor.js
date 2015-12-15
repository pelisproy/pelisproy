$(function () {
    $('.actorNombre').on('click', function() {
        if($(this).siblings('a').children('.resultados').css('display') == 'none') {
            $(this).siblings('a').children('.resultados').slideDown();
            $(this).find('.glyphicon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    	} else {
            $(this).siblings('a').children('.resultados').slideUp();
            $(this).find('.glyphicon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
    });
	
});