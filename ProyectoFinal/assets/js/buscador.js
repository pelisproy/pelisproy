$( document ).ready(function() {

	$(window).resize(function() {
        if($(window).width() > 1100) {
            $('.buscador').children('div').removeClass('buscadorResponsive').children('.btn-success').css('display', 'none');
        }
    });

    $(window).resize(function() {
        if($(window).width() < 1101) {
            $('.buscador').children('div').addClass('buscadorResponsive').children('.btn-success').css('display', 'block');
        }
    });
	
	$('.buscador select').change(function() {
	    var opcion = $(this).val();
		if(opcion == 'defecto') {
			$('#campoBusqueda').attr('placeholder', 'Buscar...').blur();		
		}
	    else if(opcion == 'pelicula') {
	        $('#campoBusqueda').attr('placeholder', 'Buscar película...').blur();
	    }
	    else if(opcion == 'actor') {
	        $('#campoBusqueda').attr('placeholder', 'Buscar actor...').blur();
	    }
	    else if(opcion == 'director') {
	        $('#campoBusqueda').attr('placeholder', 'Buscar director...').blur();
	    }
	    else if(opcion == 'usuario') {
            $('#campoBusqueda').attr('placeholder', 'Buscar usuario...').blur();
        }
	});
	
});
