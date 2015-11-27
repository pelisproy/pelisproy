	<div class="carrusel">
		<img src="<?= base_url(); ?>/assets/images/carrusel/1.jpg" alt="Film Project - Tu Web de Películas" height="600px" width="100%"/>
	</div>
	<div class="lista">
		<h3>Damos la bienvenida a estos nuevos usuarios</h3>
		<?php
					foreach ($nuevosUsu as $usuarios):?>	
		<?=$usuarios['nickname']?></a>
							<img src="<?=base_url("assets/images/users/".$usuarios['avatar']);?>"/><br/>
						<?php 
						endforeach;
						?>
		</div>
		<div class="lista">
		<h3>Peliculas recientemente añadidas</h3>
					<?php
					foreach ($nuevosPeli as $pelicula):?>	
		<a href="<?=base_url("/films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
							<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>"/><br/>
						<?php 
					endforeach;
					?>
					</div>	
		<div class="populares">
		<h3>Próximos estrenos</h3>
					<?php
					foreach ($estrenos as $pelicula):?>
							<a href="<?=base_url("films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
							<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>"/><br/>
		
					<?php endforeach;?>
</div>
	<div class="bannerPubli">
		<img src="<?= base_url(); ?>assets/images/publicidad.jpg" alt="Publicidad"/>
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