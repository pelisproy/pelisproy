$(document).ready(function() {

    $(function() {

    	$('[data-toggle="tooltip"]').tooltip();

		$('#datetimepicker').datetimepicker();

	    $('.glyphicon-menu-hamburger').on('click', function() {
	    	$('#creacionPeli fieldset .left .formResponsive div:first-child div:last-child').css('z-index', '1');
			if($('.menu').css('display') == 'none') {
	    		$('.menu').css('display', 'block');
	    		$('#creacionPeli fieldset .left div:first-child').css('z-index', '1');
	    	} else {
	    		$('.menu').css('display', 'none');
	            $('#creacionPeli fieldset .left div:first-child').css('z-index', '-1');
	    	}
	    });

	    $('.file div button').on('click', function(e) {
	    	e.preventDefault();
	    	$('.file div input[type=file]').click();
	    });

	    $('#file div button').on('click', function(e) {
	    	e.preventDefault();
	    	$('.file div input[type=file]').click();
	    });

	});

});

function validar() {
	colorOriginal();

	var nombre = document.getElementById('nombre').value.trim();
	var estreno = document.getElementById('datetimepicker').value.trim();
	var sinopsis = document.getElementById('sinopsis').value.trim();
	var trailer = document.getElementById('trailer').value.trim();
	var director = document.getElementById('director').value.trim();
	var actor = document.getElementById('actor').value.trim();
	var caratula = document.getElementById('caratula').value.trim();

	var correcto = true;

	var regExNombre = /^[A-Za-z0-9áéíóúñüÜ&$:,\s!]{3,}$/;
	var regExEstreno = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;
	var regExGenero = /^[A-Za-záéíóúñ\s]{3,}$/;
	var regExSinopsis = /^[\wáéíóúñÁÉÍÓÚüÜ.:,;\(\)\"\-\s!]{100,}$/;
	var regExDirectorActor = /^[A-Za-záéíóúñ\(\).\s]{3,}$/;

	if(!regExNombre.test(nombre)) {
		document.getElementById('nombre').style.backgroundColor = '#FFADAD';
		document.getElementById('nombre').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('nombre').focus();
		}
		correcto = false;
	} else {
		document.getElementById('nombre').style.backgroundColor = '';
		document.getElementById('nombre').style.borderColor = '';
	}

	if(!regExEstreno.test(estreno)) {
		document.getElementById('datetimepicker').style.backgroundColor = '#FFADAD';
		document.getElementById('datetimepicker').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('datetimepicker').focus();
		}
		correcto = false;
	} else {
		document.getElementById('datetimepicker').style.backgroundColor = '';
		document.getElementById('datetimepicker').style.borderColor = '';
	}

	if(!regExSinopsis.test(sinopsis)) {
		document.getElementById('sinopsis').style.backgroundColor = '#FFADAD';
		document.getElementById('sinopsis').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('sinopsis').focus();
		}
		correcto = false;
	} else {
		document.getElementById('sinopsis').style.backgroundColor = '';
		document.getElementById('sinopsis').style.borderColor = '';
	}

	if(validarUrl(trailer) == false) {
		document.getElementById('trailer').style.backgroundColor = '#FFADAD';
		document.getElementById('trailer').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('trailer').focus();
		}
		correcto = false;
	} else {
		document.getElementById('trailer').style.backgroundColor = '';
		document.getElementById('trailer').style.borderColor = '';
	}

	if(!regExDirectorActor.test(director)) {
		document.getElementById('director').style.backgroundColor = '#FFADAD';
		document.getElementById('director').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('director').focus();
		}
		correcto = false;
	} else {
		document.getElementById('director').style.backgroundColor = '';
		document.getElementById('director').style.borderColor = '';
	}

	if(!regExDirectorActor.test(actor)) {
		document.getElementById('actor').style.backgroundColor = '#FFADAD';
		document.getElementById('actor').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('actor').focus();
		}
		correcto = false;
	} else {
		document.getElementById('actor').style.backgroundColor = '';
		document.getElementById('actor').style.borderColor = '';
	}

	if(correcto) {
		if(comprobarExtension('creacionPeli', caratula)) {
			document.querySelector('.loading').style.display = 'block';
			document.querySelector('.container').style.opacity = '0.1';
			document.querySelector('.footer').style.opacity = '0.1';
			document.querySelector('body').style.overflow = 'hidden';
			setTimeout(function() {
				document.creacionPeli.submit();
			}, 2000);
		}
	}
}

function colorOriginal() {
	document.getElementById('nombre').backgroundColor = '';
	document.getElementById('datetimepicker').backgroundColor = '';
	document.getElementById('sinopsis').backgroundColor = '';
	document.getElementById('trailer').backgroundColor = '';
	document.getElementById('director').backgroundColor = '';
	document.getElementById('actor').backgroundColor = '';

	document.getElementById('nombre').borderColor = '';
	document.getElementById('datetimepicker').borderColor = '';
	document.getElementById('sinopsis').borderColor = '';
	document.getElementById('trailer').borderColor = '';
	document.getElementById('director').borderColor = '';
	document.getElementById('actor').borderColor = '';
}

function validarUrl(url) {
	var regExUrl = /^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/;

	return regExUrl.test(url);
}

function comprobarExtension(formulario, archivo) {
	extensionesPermitidas = new Array('.gif', '.jpg', '.png'); 
    error = ''; 

    if(!archivo) { 
      	alert('No has seleccionado ninguna imagen'); 
    } else { 
       	extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase(); 
       	permitida = false; 
       	for(var i = 0; i < extensionesPermitidas.length; i++) { 
          	if (extensionesPermitidas[i] == extension) { 
          		permitida = true; 
          		break; 
          	} 
       	} 
       	if(!permitida) { 
         	alert('Comprueba la extensión de la imagen a subir.\n\nSólo se pueden subir archivos con extensiones: ' + extensionesPermitidas.join()); 
         	return false;
      	} else { 
      		return true;
      	} 
    }  
}



