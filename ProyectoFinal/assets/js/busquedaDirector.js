$(function () {

    $('.glyphicon-remove').on('click', function() {
        if(confirm('¿Desea eliminar esta película?')) {
            //LOADING 3s
            //EL SIGUIENTE ALERT 1.5s
            alert('Película eliminada con éxito');
            //RECARGAR LA PÁGINA Y QUE NO APAREZCA YA EL USUARIO
        }
    });

    $('.directorNombre').on('click', function() {
        if($(this).siblings('.resultados').css('display') == 'none') {
            $(this).siblings('.resultados').slideDown();
            $(this).find('.glyphicon').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        } else {
            $(this).siblings('.resultados').slideUp();
            $(this).find('.glyphicon').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
    });
	
});