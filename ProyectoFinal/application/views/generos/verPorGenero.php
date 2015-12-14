<div class="busquedaGenero">
<?php
if($genero!=null){
		foreach ($genero as $info):?>
			<div>
				<div class="generoNombre">
					<span><?php echo $info['nombreGenero'];?>
					<i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>">
				<div class="resultados">
					<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre'];?>"/>
					<span><?=$info['nombre'];?></span>
				</div>
				</a>
			</div>
<?php endforeach;
	}
else{
	echo "<h2>No hay géneros que mostrar</h2>";
}
?> 
</div>
</div>
