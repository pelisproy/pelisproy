	<div class="carrusel">
		<img src="<?= base_url(); ?>/assets/images/carrusel/1.jpg" alt="Film Project - Tu Web de Películas" height="600px" width="100%"/>
	</div>
	<div class="listas">
		<div class="populares">
			
		</div>
		<div class="estrenos">
			
		</div>
		<div class="futurosEstrenos">
			
		</div>
	</div>
	<div class="bannerPubli">
		<img src="<?= base_url(); ?>/assets/images/publicidad.jpg" alt="Publicidad"/>
	</div>
</div>
<script>
	setInterval(function(){
	    if($('.carrusel img').attr('src') == '<?= base_url(); ?>/assets/images/carrusel/1.jpg') {
	        $('.carrusel img').fadeOut(0).attr('src', '<?= base_url(); ?>/assets/images/carrusel/2.jpg').fadeIn(1200);
	    } else if($('.carrusel img').attr('src') == '<?= base_url(); ?>/assets/images/carrusel/2.jpg') {
	        $('.carrusel img').fadeOut(0).attr('src', '<?= base_url(); ?>/assets/images/carrusel/3.jpg').fadeIn(1200);
	    } else if($('.carrusel img').attr('src') == '<?= base_url(); ?>/assets/images/carrusel/3.jpg') {
	        $('.carrusel img').fadeOut(0).attr('src', '<?= base_url(); ?>/assets/images/carrusel/1.jpg').fadeIn(1200);
	    }       
	}, 3000);
</script>