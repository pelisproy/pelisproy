<div class="busquedaDirector">
<?php
	if($directores!=null){
		foreach ($directores as $info):?>
			<div>
				<div class="directorNombre">
					<span><?php echo $info['director'];?><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>">
				<div class="resultados">
					<img src="<?=base_url("assets/images/films/".$info['caratula']);?>" alt="<?=$info['nombre'];?>"/>
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
	echo "<h2>No hay directores que mostrar</h2>";
}
    ?>  
</div>
</div>
