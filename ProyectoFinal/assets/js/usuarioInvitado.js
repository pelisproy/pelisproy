$(function() {
	
	$(window).resize(function() {
        if($(window).width() < 1201) {
            $('.listas > div > div:last-child div img').attr({
                'data-toggle': 'tooltip',
                'title': 'NombrePelícula'
            }).tooltip();
        }
    });
	
});