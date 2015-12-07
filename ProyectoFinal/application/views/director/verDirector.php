<div class="busquedaDirector">
<?php
	if($directores!=null){
		foreach ($directores as $info):?>
				<div class="directorNombre">
					<span><?php echo $info['director'];?><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="resultados" onclick="">
					<img src="<?=base_url("assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre'];?>"/>
					<form action="" method=""><i class="glyphicon glyphicon-remove"></i></form><a href="<?=base_url("/films/verPeli/".$info['id']);?>"><span><?=$info['nombre'];?></span></a>
				</div>
<?php endforeach;
	}
else{
	echo "<h2>No hay directores que mostrar</h2>";
}
    ?>  
</div>
</div>
