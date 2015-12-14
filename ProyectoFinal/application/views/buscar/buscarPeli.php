<div class="busquedaDirector">
<?php
	if($buscadorPeli!=null){
		foreach ($buscadorPeli as $info):?>
			<div>
				<div class="directorNombre">
					<span><?php echo $info['nombre'];?><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="resultados">
					<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre']?>"/>
					<form action="" method=""><i class="glyphicon glyphicon-remove"></i></form><a href="<?=base_url("/films/verPeli/".$info['id']);?>"><span><?=$info['nombre'];?></span></a>
				</div>
			</div>
<?php endforeach;
	}
else{
	echo "<h2>No hay directores que mostrar</h2>";
}
    ?>  
</div>
</div>