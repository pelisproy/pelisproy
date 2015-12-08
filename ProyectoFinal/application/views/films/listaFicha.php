<div class="busquedaPeli">
			<!-- <div class="contador">
				<span> Se han encontrado X resultados </span>
			</div>-->
<?php if($contenido!=null){
foreach ($contenido as $pelicula):?>
			<a href="<?=base_url('films/verPeli/'.$pelicula['id'])?>">
			<div class="resultados">
				<img src="<?=base_url("assets/images/films/".$pelicula['caratula'])?>" alt="" height="120" width="120"/>
				<span><?=$pelicula['nombre']?></span>
			</div>
			</a>
<?php endforeach;}?> 
</div>      
</div>