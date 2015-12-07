<div class="busquedaGenero">
<?php
if($genero!=null){
		foreach ($genero as $info):?>
				<div class="generoNombre">
					<span><?php echo $info['nombreGenero'];?>
					<i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="resultados" onclick="">
					<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre'];?>"/>
					<form action="" method=""><i class="glyphicon glyphicon-remove"></i></form><a href="<?=base_url("/films/verPeli/".$info['id']);?>"><span><?=$info['nombre'];?></span></a>
				</div>
<?php endforeach;
	}
?> 
</div>
</div>
