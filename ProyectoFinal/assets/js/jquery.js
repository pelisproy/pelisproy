$(function () {
	
    $('.buscador select').change(function () {
        var opcion = $(this).val();
		if (opcion == 'defecto') {
			$('#campo_busqueda').attr('placeholder', 'Buscar...').blur();		
		}
        else if (opcion == 'pelicula') {
            $('#campoBusqueda').attr('placeholder', 'Buscar película...').blur();
        }
        else if (opcion == 'actor') {
            $('#campoBusqueda').attr('placeholder', 'Buscar actor...').blur();
        }
        else if (opcion == 'director') {
            $('#campoBusqueda').attr('placeholder', 'Buscar director...').blur();
        }
    });

    $('.glyphicon-menu-hamburger').on('click', function() {
		if($('.menu').css('display') == 'none') {
    		$('.menu').css('display', 'block');
    	} else {
    		$('.menu').css('display', 'none');
    	}
    });
	
});