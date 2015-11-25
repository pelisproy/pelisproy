$( document ).ready(function() {
	
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
