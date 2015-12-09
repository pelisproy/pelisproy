<h3>Se han encontrado los siguientes resultados</h3>
<?php foreach ($buscadorPeli as $pelicula):?>
	<a href="<?=base_url("films/verPeli/".$pelicula['id']);?>"><?=$pelicula['nombre']?></a>
	<img src="<?=base_url("assets/images/films/".$pelicula['caratula']);?>" alt="<?=$pelicula['nombre']?>" height="120" width="120"/><br/>
<?php endforeach;?>