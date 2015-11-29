	<div class="carrusel">
		<img src="<?= base_url(); ?>/assets/images/carrusel/1.jpg" alt="Film Project - Tu Web de Películas" height="600px" width="100%"/>
	</div>
<!-- 
<div class="listas">
	<div class="populares col-md-3">
		<div>
			<span>Últimas películas agregadas</span>
		</div>
		<div>
			<div><img src="../images/carrusel/3.jpg" alt="" height="120" width="120"/><span> Torrente 2: Misión en Marbella </span></div>
			<div><img src="../images/carrusel/2.jpg" alt="" height="120" width="120"/><span> Torrente: El brazo tonto de la ley </span></div>
			<div><img src="../images/carrusel/1.jpg" alt="" height="120" width="120"/><span> Pretty Woman </span></div>
		</div>
	</div>
	<div class="estrenos col-md-3">
		<div>
			<span>Últimos estrenos</span>
		</div>
		<div>
			<div><img src="../images/carrusel/3.jpg" alt="" height="120" width="120"/><span> Torrente 2: Misión en Marbella </span></div>
			<div><img src="../images/carrusel/2.jpg" alt="" height="120" width="120"/><span> Torrente: El brazo tonto de la ley </span></div>
			<div><img src="../images/carrusel/1.jpg" alt="" height="120" width="120"/><span> Pretty Woman </span></div>
		</div>
	</div>
	<div class="futurosEstrenos col-md-3">
		<div>
			<span>Últimos cinéfilos</span>
		</div>
		<div>
			<div><img src="../images/carrusel/3.jpg" alt="" height="120" width="120"/><span> Torrente 2: Misión en Marbella </span></div>
			<div><img src="../images/carrusel/2.jpg" alt="" height="120" width="120"/><span> Torrente: El brazo tonto de la ley </span></div>
			<div><img src="../images/carrusel/1.jpg" alt="" height="120" width="120"/><span> Pretty Woman </span></div>
		</div>
	</div>
</div> 
-->
	<div class="listas">
				<div class="populares col-md-3">
					<div>
						<span>Últimas películas agregadas</span>
					</div>
					<div>
					<?php
					foreach ($nuevosPeli as $pelicula):?>	
						<div>
						<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>" alt="" height="120" width="120"/>
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
						<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>" alt="" height="120" width="120"/>
						<span>
						<a href="<?=base_url("films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
						</span>
						</div>
					<?php endforeach;?>
					</div>
				</div>
				<div class="futurosEstrenos col-md-3">
					<div>
						<span>Últimos cinéfilos</span>
					</div>
					<div>
					<?php
					foreach ($nuevosUsu as $usuarios):?>	
						<div>
						<img src="<?=base_url("assets/images/users/".$usuarios['avatar']);?>" alt="" height="120" width="120"/>
						<span><?=$usuarios['nickname']?></span>
						</div>
					<?php endforeach;?>
					</div>
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