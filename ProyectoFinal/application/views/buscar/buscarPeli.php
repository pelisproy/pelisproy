<div class="busquedaDirector">
<?php
	if($buscadorPeli!=null){
		foreach ($buscadorPeli as $info):?>
			<div>
				<div class="directorNombre">
					<span><?php echo $info['nombre'];?><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>">
				<div class="resultados">
					<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre']?>"/>
					<span><?=$info['nombre'];?></span>
				</div>
				</a>
			</div>
<?php endforeach;
	}
else{
	echo "<h2>No hay directores que mostrar</h2>";
}
    ?>  
</div>
</div>