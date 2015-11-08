$(document).ready(function() {

    $(function() {

		$('#datetimepicker').datetimepicker();

	    $('.glyphicon-menu-hamburger').on('click', function() {
			if($('.menu').css('display') == 'none') {
	    		$('.menu').css('display', 'block');
	    		$('fieldset .left div:first-child div:first-child').css('z-index', '-1');
	    		$('fieldset .left div:first-child div:last-child').css('z-index', '-1');
	    		$('.formResponsive div:first-child div:last-child').css('z-index', '1');
	    	} else {
	    		$('.menu').css('display', 'none');
	            $('fieldset .left div:first-child div:first-child').css('z-index', '1');
	            $('fieldset .left div:first-child div:last-child').css('z-index', '1');
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

function agregarActor(actor) {
	var textarea = document.querySelector('.actores div textarea');

	var element = document.createTextNode(actor + '\n');

	textarea.appendChild(element);
	document.querySelector('.actores div input[type="text"]').value = '';
}

function agregarActorResponsive(actor) {
	var textarea = document.querySelector('#actores div textarea');

	var element = document.createTextNode(actor + '\n');

	textarea.appendChild(element);
	document.querySelector('#actores div input[type="text"]').value = '';
}

function validarActor() {
	document.querySelector('.actores div input[type="text"]').style.backgroundColor = '';
	document.querySelector('.actores div input[type="text"]').style.borderColor = '';

	var actor = document.querySelector('.actores div input[type="text"]').value.trim();
	var regEx = /^[A-Za-záéíóúñ]{3,}$/;

	if(regEx.test(actor)) {
		agregarActor(actor);
	} else {
		document.querySelector('.actores div input[type="text"]').style.backgroundColor = '#FFADAD';
		document.querySelector('.actores div input[type="text"]').style.borderColor = '#A10000';
	}
}

function validarActorResponsive() {
	document.querySelector('#actores div input[type="text"]').style.backgroundColor = '';
	document.querySelector('#actores div input[type="text"]').style.borderColor = '';

	var actor = document.querySelector('#actores div input[type="text"]').value.trim();
	var regEx = /^[A-Za-záéíóúñ]{3,}$/;

	if(regEx.test(actor)) {
		agregarActorResponsive(actor);
	} else {
		document.querySelector('#actores div input[type="text"]').style.backgroundColor = '#FFADAD';
		document.querySelector('#actores div input[type="text"]').style.borderColor = '#A10000';
	}
}

function validar() {
	colorOriginal();

	var trailer;
	var director;

	if(window.innerWidth > 768) {
		trailer = document.getElementById('trailer').value.trim();
		director = document.getElementById('director').value.trim();
	} else {
		trailer = document.getElementById('trailerResponsive').value.trim();
		director = document.getElementById('directorResponsive').value.trim();
	}

	var nombre = document.getElementById('nombre').value.trim();
	var estreno = document.getElementById('datetimepicker').value.trim();
	var genero = document.getElementById('genero').value.trim();
	var sinopsis = document.getElementById('sinopsis').value.trim();
	var caratula = document.getElementById('caratula').value.trim();

	var correcto = true;

	var regExNombre = /^[A-Za-záéíóúñ&$:!]{3,}$/;
	var regExEstreno = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
	var regExGenero = /^[A-Za-záéíóúñ]{3,}$/;
	var regExSinopsis = /^[\wáéíóúñ.:,!]{100,}$/;
	var regExDirector = /^[A-Za-záéíóúñ]{3,}$/;

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

	if(!regExGenero.test(genero)) {
		document.getElementById('genero').style.backgroundColor = '#FFADAD';
		document.getElementById('genero').style.borderColor = '#A10000';
		if(correcto) {
			document.getElementById('genero').focus();
		}
		correcto = false;
	} else {
		document.getElementById('genero').style.backgroundColor = '';
		document.getElementById('genero').style.borderColor = '';
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

	if(trailer != '') {
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
	}

	if(director != '') {
		if(!regExDirector.test(director)) {
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
	document.getElementById('genero').backgroundColor = '';
	document.getElementById('sinopsis').backgroundColor = '';
	document.getElementById('trailer').backgroundColor = '';
	document.getElementById('director').backgroundColor = '';
	document.querySelector('.actores div input[type="text"]').backgroundColor = '';
	document.querySelector('#actores div input[type="text"]').backgroundColor = '';

	document.getElementById('nombre').borderColor = '';
	document.getElementById('datetimepicker').borderColor = '';
	document.getElementById('genero').borderColor = '';
	document.getElementById('sinopsis').borderColor = '';
	document.getElementById('trailer').borderColor = '';
	document.getElementById('director').borderColor = '';
	document.querySelector('.actores div input[type="text"]').borderColor = '';
	document.querySelector('#actores div input[type="text"]').borderColor = '';
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

