<div class="busquedaActor">
<?php
	if($actores!=null){
		foreach ($actores as $info):?>
			<div>
				<div class="actorNombre">
					<span><?php echo $info['actor'];?><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>">
				<div class="resultados">
					<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre']?>"/>
					<form action="" method="">
					<?php if (($this->session->userdata('idUsuario')==$info['idUsuario'])):?>
                    <a onclick="return confirm('¿Estás seguro de querer borrar esta pelicula?')" href="<?=base_url("films/borrarFicha/$idPeli");?>">
                    	<i class="glyphicon glyphicon-remove"></i>
                    </a>
                <?php endif;?>
					</form>
					<span><?=$info['nombre'];?></span>
				</div>
				</a>
			</div>
<?php endforeach;
	}
else{
	echo "<h2>No hay actores que mostrar</h2>";
}
    ?>  
</div>
</div>