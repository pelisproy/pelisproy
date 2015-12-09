$(function () {

    $('.busquedaActor glyphicon-remove').on('click', function() {
        if(confirm('¿Desea eliminar esta película?')) {
            //LOADING 3s
            //EL SIGUIENTE ALERT 1.5s
            alert('Película eliminada con éxito');
            //RECARGAR LA PÁGINA Y QUE NO APAREZCA YA LA PELÍCULA
        }
    });

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