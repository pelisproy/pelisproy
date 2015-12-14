$(function() {

	$('.perfil .glyphicon-pencil').on('click', function() {
		var name;
        if($(this).parent().parent().hasClass('infoPersonal')) {
			if($(this).siblings('b').text() == 'Nombre:') {
				name = "nombre";
			} else if($(this).siblings('b').text() == 'Apellidos:') {
				name = "apellidos";
			} else if($(this).siblings('b').text() == 'Fecha de nacimiento:') {
				name = "nacimiento";
			} else if($(this).siblings('b').text() == 'Sexo:') {
				name = "sexo";
			}
            if($(this).siblings('span').is(':hidden')) {
                if($(this).siblings('b').text() == 'Sexo:') {
                    $(this).siblings('form').siblings('span').text($('input:radio[name="sexo"]:checked').val()).show();
                } else {
                    $(this).siblings('form').children('.infoPersonalEdicion').hide().parent().siblings('span').text($(this).siblings('form').children('.infoPersonalEdicion').val().trim()).show();
                }
                $(this).siblings('form').submit().remove();
            } else {
                if($(this).siblings('b').text() == 'Nombre:' || $(this).siblings('b').text() == 'Apellidos:') {
                    $(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><input type="text" class="form-control input-sm infoPersonalEdicion" name="' + name + '" value="' + $(this).siblings('span').text() + '"/></form>');
                } else if($(this).siblings('b').text() == 'Fecha de nacimiento:') {
                    $(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><input type="text" class="form-control input-sm infoPersonalEdicion" data-date-format="YYYY-MM-DD" id="' + name + '" name="' + name + '" value="' + $(this).siblings('span').text() + '"/></form>');
                    $('#nacimiento').datetimepicker();
                } else if($(this).siblings('b').text() == 'Sexo:') {
                    if($(this).siblings('span').text() == 'Hombre') {
                        $(this).siblings('span').hide().after('<form class="col-xs-6 col-lg-7" action="" style="color:white;" method="POST"><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="hombre" value="Hombre" checked="checked"/> Hombre </label></div><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="mujer" value="Mujer"/> Mujer </label></div></form>');
                    } else if($(this).siblings('span').text() == 'Mujer') {
                        $(this).siblings('span').hide().after('<form class="col-xs-6 col-lg-7" action="" style="color:white;" method="POST"><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="hombre" value="Hombre"/> Hombre </label></div><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="mujer" value="Mujer" checked="checked"/> Mujer </label></div></form>');
                    } else {
                        $(this).siblings('span').hide().after('<form class="col-xs-6 col-lg-7" action="" style="color:white;" method="POST"><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="hombre" value="Hombre" checked="checked"/> Hombre </label></div><div class="radio col-xs-6" style="margin-top: 0;"><label><input type="radio" name="sexo" id="mujer" value="Mujer"/> Mujer </label></div></form>');
                    }
                }
            }
        } else if($(this).parent().parent().hasClass('restoPerfil')) {
            if($(this).siblings('div').has('p').is(':hidden')) {
                $('.biografiaEdicion').hide().parent().siblings('div').children('p').text($('.biografiaEdicion').val().trim()).parent().show();
                $('.biografiaEdicion').parent().submit().remove();
            } else {
                $(this).siblings('div').has('p').hide().after('<form class="col-xs-12" style="margin-top: 2%" action="" method="POST"><textarea rows="7" cols="50" class="form-control biografiaEdicion" name="biografia" wrap="off">' + $(this).siblings('div').has('p').text() + '</textarea></form>');
            }
        }
    });

	$('.perfil .glyphicon-remove').on('click', function() {
		$(this).siblings('div').children('p').text('');
	});

	$('.cabecera > img').on('mouseover', function() {
		$(this).css({
			'opacity' : '0.2',
			'cursor' : 'pointer'
		});
	});

	$('.cabecera > img').on('mouseleave', function() {
		$(this).css('opacity', '1');
	});

	$('.cabecera > img')
			.on(
					'click',
					function() {
						if ($('.cabecera input[type="file"]').length > 0) {
							var value = $('.cabecera input[type="file"]').val();
							switch (value.substring(value.lastIndexOf('.') + 1)
									.toLowerCase()) {
							case 'gif':
							case 'jpg':
							case 'png':
								$('.cabecera input[type="file"]').parent()
										.submit();
								$('.cabecera input[type="file"]').parent()
										.remove();
								break;
							default:
								value = '';
								alert("La extenisón de la imagen no es correcta. Debe ser .gif, .jpg o .png");
								break;
							}
						} else {
							$(this)
									.after(
											'<form style="display: none;" action=""><input type="file" name="actualizarImg"/><input type="submit"/></form>');
							$('.cabecera input[type="file"]').trigger('click');
						}
					});

});
