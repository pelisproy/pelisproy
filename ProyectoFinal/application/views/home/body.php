	<div class="carrusel">
		<img src="<?= base_url(); ?>/assets/images/carrusel/1.jpg" alt="Film Project - Tu Web de Películas"/>
	</div>
	<div class="listas">
				<div class="ultimasAgregadas col-md-3">
					<div>
						<span>Últimas películas agregadas</span>
					</div>
					<div>
					<?php
					foreach ($nuevosPeli as $pelicula):?>	
						<div>
						<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>" alt=""/>
						<span>
						<a href="<?=base_url("films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
						</span>
						</div>
					
					<?php 
					endforeach;
					?>
					</div>
				</div>
				<div class="estrenos col-md-3">
					<div>
						<span>Últimos estrenos</span>
					</div>
					<div>
					<?php
					foreach ($estrenos as $pelicula):?>
						<div>
						<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>" alt=""/>
						<span>
						<a href="<?=base_url("films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
						</span>
						</div>
					<?php endforeach;?>
					</div>
				</div>
				<div class="usuariosRecientes col-md-3">
					<div>
						<span>Últimos cinéfilos</span>
					</div>
					<div>
					<?php
					foreach ($nuevosUsu as $usuarios):?>	
						<div>
						<img src="<?=base_url("assets/images/users/".$usuarios['avatar']);?>" alt=""/>
						<span><?=$usuarios['nickname']?></span>
						</div>
					<?php endforeach;?>
					</div>
				</div>
			</div>
		
	<div class="bannerPubli">
		<img src="<?= base_url(); ?>assets/images/publicidad.jpg" alt="Publicidad"/>
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