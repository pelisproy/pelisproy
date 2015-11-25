$(function() {
	
	$('.perfil .glyphicon-pencil').on('click', function() {
        if($(this).parent().parent().hasClass('infoPersonal')) {
            if($(this).siblings('span').is(':hidden')) {
                $('#infoPersonalEdicion').hide().parent().siblings('span').text($('#infoPersonalEdicion').val()).show();
                $('#infoPersonalEdicion').parent().remove();
            } else {
                $(this).siblings('span').hide().after('<form class="col-xs-5"><input class="form-control input-sm" id="infoPersonalEdicion" value="' + $(this).siblings('span').text() + '"/></form>');
            }
        } else if($(this).parent().parent().hasClass('restoPerfil')) {
            if($(this).siblings('div').has('p').is(':hidden')) {
                $('#biografiaEdicion').hide().parent().siblings('div').children('p').text($('#biografiaEdicion').val().trim()).parent().show();
                $('#biografiaEdicion').parent().remove();
            } else {
                $(this).siblings('div').has('p').hide().after('<form class="col-xs-12" style="margin-top: 2%"><textarea rows="7" cols="50" class="form-control" id="biografiaEdicion" wrap="off">' + $(this).siblings('div').has('p').text() + '</textarea></form>');
            }
        }
    });

    $('.perfil .glyphicon-remove').on('click', function() {
        $(this).siblings('div').children('p').text('');
    });

    $('.cabecera > img').on('mouseover', function() {
        $(this).css({'opacity': '0.2', 'cursor': 'pointer'});
    });

    $('.cabecera > img').on('mouseleave', function() {
        $(this).css('opacity', '1');
    });

    $('.cabecera > img').on('click', function() {
        if($('.cabecera input[type="file"]').length > 0) {
            var value = $('.cabecera input[type="file"]').val();
            switch(value.substring(value.lastIndexOf('.') + 1).toLowerCase()){
                case 'gif': 
                case 'jpg': 
                case 'png':
                    $('.cabecera input[type="file"]').parent().submit();
                    $('.cabecera input[type="file"]').parent().remove();
                break;
                default:
                    value = '';
                    alert("La extenisón de la imagen no es correcta. Debe ser .gif, .jpg o .png");
                break;
            } 
        } else {
            $(this).after('<form style="display: none;" action="" method=""><input type="file"/><input type="submit"/></form>');
            $('.cabecera input[type="file"]').trigger('click');
        }
    });
	
});


