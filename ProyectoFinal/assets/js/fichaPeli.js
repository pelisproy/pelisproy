$(function () {

    $('.sinopsis .glyphicon-pencil').on('click', function(){
        if($(this).siblings('p').is(':hidden')) {
            $(this).siblings('form').children('.sinopsisEdicion').hide().parent().siblings('p').text($(this).siblings('form').children('.sinopsisEdicion').val().trim()).show();
            $(this).siblings('form').submit().remove();
        } else {
            $(this).siblings('p').hide().after('<form class="col-xs-12" style="margin-top: 3%" action="" method="POST"><textarea rows="16" cols="50" class="form-control sinopsisEdicion" name="sinopsis">' + $(this).siblings('p').text() + '</textarea></form>');
        }
    });

    $('.trailer .glyphicon-pencil').on('click', function() {
        if($('.trailer iframe').is(':hidden')) {
            $(this).css({'display':'block', 'margin-left':'13%'}).siblings('form').children('.trailerEdicion').hide().parent().siblings('iframe').removeAttr('src').attr('src', $(this).siblings('form').children('.trailerEdicion').val().trim().replace("watch?v=", "v/")).show();
            $(this).siblings('form').submit().remove();
        } else {
            $(this).css({'display':'inline-block', 'margin-left':'0'}).siblings('iframe').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><input class="form-control input-sm trailerEdicion" name="trailer" value="' + $(this).siblings('iframe').attr('src') + '"/></form>');
        }
    });

    $('.imagenPelicula > img').on('mouseover', function() {
        $(this).css({'opacity': '0.2', 'cursor': 'pointer'});
    });

    $('.imagenPelicula > img').on('mouseleave', function() {
        $(this).css('opacity', '1');
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