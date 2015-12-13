$(document).ready(function() {

    $(function() {
    	
		$('#datetimepickerNacimiento').datetimepicker();

	    $('.glyphicon-menu-hamburger').on('click', function() {
			if($('.menu').css('display') == 'none') {
	    		$('.menu').css('display', 'block');
	            $('#registro fieldset div:nth-child(3)').css('z-index', '-1');
	    	} else {
	    		$('.menu').css('display', 'none');
	            $('#registro fieldset div:nth-child(3)').css('z-index', '1');
	    	}
	    });

		$('#registro').bootstrapValidator({
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					validators: {
						notEmpty: {
							message: 'El nombre es requerido.'
						},
						stringLength: {
							min: 3,
							message: 'El nombre debe contener al menos 3 caracteres.'
						},
						regexp: {
							regexp: /[a-zA-Z]/,
							message: 'El nombre solo puede contener letras.'
						}
					}
				},
				apellidos: {
					validators: {
						notEmpty: {
							message: 'Los apellidos son requeridos.'
						},
						stringLength: {
							min: 3,
							message: 'Los apellidos deben contener al menos 3 caracteres.'
						},
						regexp: {
							regexp: /[a-zA-Z]/,
							message: 'Los apellidos solo pueden contener letras.'
						}
					}
				},
				nickname: {
					validators: {
						notEmpty: {
							message: 'El nick es requerido.'
						},
						stringLength: {
							min: 3,
							message: 'El nick debe contener al menos 3 caracteres.'
						}
					}
				},
				password: {
					validators: {
						notEmpty: {
							message: 'El password es requerido y no puede ser vacío.'
						},
						stringLength: {
							min: 8,
							message: 'El password debe contener al menos 8 caracteres.'
						},
						identical: {
							field: 'password2',
							message: 'El password no coincide.'
						}
					}
				},
				password2: {
					validators: {
						notEmpty: {
							message: 'El password es requerido y no puede ser vacío.'
						},
						stringLength: {
							min: 8,
							message: 'El password debe contener al menos 8 caracteres.'
						},
						identical: {
							field: 'password',
							message: 'El password no coincide.'
						}
					}
				},
				correo: {
					validators: {
						notEmpty: {
							message: 'El correo es requerido y no puede ser vacío.'
						},
						emailAddress: {
						 	message: 'El correo electrónico no es válido.'
						}
					}
				},
				datetimepickerNacimiento: {
					validators: {
						notEmpty: {
							message: 'La fecha de nacimiento es requerida y no puede ser vacía.'
						},
						date: {
							format: 'YYYY-MM-DD',
							message: 'La fecha de nacimiento no es válida.'
						}
					}
				},
			}
		});

	});

});

/*function condicionesUso() {

	if(!document.querySelector('input[type="checkbox"]').checked) {
		$('.alert').css('display', 'block');
	} else {
		document.registro.submit();
		document.registro.reset();
		$('.alert').css('display', 'none');
	}

}*/

function alertRegistro() {
	
	var nombre = document.getElementById('nombre').value.trim();
	var apellidos = document.getElementById('apellidos').value.trim();
	var nick = document.getElementById('nickname').value.trim();
	var pass = document.getElementById('password').value.trim();
	var repPass = document.getElementById('password2').value.trim();
	var mail = document.getElementById('correo').value.trim();
	var nacimiento = document.getElementById('datetimepickerNacimiento').value.trim();
	var nacionalidad = document.getElementById('nacionalidad');
	
	var seleccion = nacionalidad.options[nacionalidad.selectedIndex].text;
	
	if(nombre == ''||apellidos == ''||nick == ''||pass == ''||repPass == ''||mail == ''||nacimiento == '') {
		document.querySelector('.alert').style.display = 'block';
		document.querySelector('.alert').innerHTML = "No puede haber <strong> campos vacíos </strong>";
	} else if(!document.querySelector('input[type="checkbox"]').checked) {
		document.querySelector('.alert').style.display = 'block';
		document.querySelector('.alert').innerHTML = "Para continuar debes aceptar las <strong> Condiciones de Uso </strong>";
	} else if (seleccion == 'Seleccione') {
		document.querySelector('.alert').style.display = 'block';
		document.querySelector('.alert').innerHTML = "Debe seleccionar una <strong> nacionalidad </strong>";
	} else {
		document.querySelector('.loading').style.display = 'block';
		document.querySelector('.container').style.opacity = '0.1';
		document.querySelector('.footer').style.opacity = '0.1';
		document.querySelector('body').style.overflow = 'hidden';
		setTimeout(function() {
			document.registro.submit();
			document.registro.reset();
			document.querySelector('.alert').style.display = 'none';
		}, 2000);
	}
}


