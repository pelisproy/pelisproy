$(function () {

    $('.principalInfo .glyphicon-pencil').on('click', function() {
        var name;
        if($(this).parent().parent().hasClass('principalInfo')) {
            if($(this).siblings('b').text() == 'Nombre: ') {
                name = "nombre";
            } else if($(this).siblings('b').text() == 'Fecha de estreno: ') {
                name = "estreno";   
            }else if($(this).siblings('b').text() == 'Género: ') {
                name = "genero";
            }
            if($(this).siblings('span').is(':hidden')) {
                $(this).siblings('form').children('.principalInfoEdicion').hide().parent().siblings('span').text($(this).siblings('form').children('.principalInfoEdicion').val().trim()).show();
                $(this).siblings('form').remove();
            } else {
                $(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action=""><input class="form-control input-sm principalInfoEdicion" name="' + name + '" value="' + $(this).siblings('span').text() + '"/></form>');
            }
        }
    });

    $('.sinopsis .glyphicon-pencil').on('click', function(){
        if($(this).siblings('p').is(':hidden')) {
            $(this).siblings('form').children('.sinopsisEdicion').hide().parent().siblings('p').text($(this).siblings('form').children('.sinopsisEdicion').val().trim()).show();
            $(this).siblings('form').remove();
        } else {
            $(this).siblings('p').hide().after('<form class="col-xs-12" style="margin-top: 3%" action=""><textarea rows="16" cols="50" class="form-control sinopsisEdicion" name="sinopsis" wrap="off">' + $(this).siblings('p').text() + '</textarea></form>');
        }
    });

    $('.trailer .glyphicon-pencil').on('click', function() {
        if($('.trailer iframe').is(':hidden')) {
            $(this).css({'display':'block', 'margin-left':'13%'}).siblings('form').children('.trailerEdicion').hide().parent().siblings('iframe').removeAttr('src').attr('src', $(this).siblings('form').children('.trailerEdicion').val().trim().replace("watch?v=", "v/")).show();
            $(this).siblings('form').remove();
        } else {
            $(this).css({'display':'inline-block', 'margin-left':'0'}).siblings('iframe').hide().after('<form class="col-xs-5 col-sm-4" action=""><input class="form-control input-sm trailerEdicion" name="trailer" value="' + $(this).siblings('iframe').attr('src') + '"/></form>');
        }
    });

    $('.comentario .glyphicon-remove').on('click', function() {
        if(confirm('¿Desea eliminar el comentario?')) {
            //LOADING 3s
            //EL SIGUIENTE ALERT 1.5s
            alert('Comentario eliminado con éxito');
            //RECARGAR LA PÁGINA Y QUE NO APAREZCA YA EL COMENTARIO
        }
    });

    $('.imagenPelicula > img').on('mouseover', function() {
        $(this).css({'opacity': '0.2', 'cursor': 'pointer'});
    });

    $('.imagenPelicula > img').on('mouseleave', function() {
        $(this).css('opacity', '1');
    });

    $('.imagenPelicula > img').on('click', function() {
        if($('.imagenPelicula input[type="file"]').length > 0) {
            var value = $('.imagenPelicula input[type="file"]').val();
            switch(value.substring(value.lastIndexOf('.') + 1).toLowerCase()){
                case 'gif': 
                case 'jpg': 
                case 'png':
                    $('.imagenPelicula input[type="file"]').parent().submit();
                    $('.imagenPelicula input[type="file"]').parent().remove();
                break;
                default:
                    value = '';
                    alert("La extenisón de la imagen no es correcta. Debe ser .gif, .jpg o .png");
                break;
            } 
        } else {
            $(this).after('<form style="display: none;" action="" method=""><input type="file"/><input type="submit"/></form>');
            $('.imagenPelicula input[type="file"]').trigger('click');
        }
    });
	
});

function activarError() {
    if(document.querySelector('.comentariosPelicula .comentar form textarea').value.trim().length < 3) {
        document.querySelector('.comentariosPelicula .comentar form .error').style.display = 'block';
    } else {
        document.querySelector('.loading').style.display = 'block';
        document.querySelector('.container').style.opacity = '0.1';
        document.querySelector('.footer').style.opacity = '0.1';
        document.querySelector('body').style.overflow = 'hidden';
        setTimeout(function() {
            document.comentar.submit();
        }, 2000);
    }
}