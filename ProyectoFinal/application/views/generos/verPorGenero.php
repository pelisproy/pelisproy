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
					<form action="" method="">
					<?php if (($this->session->userdata('idUsuario')==$info['idUsuario'])):?>
                    <a onclick="return confirm('¿Estás seguro de querer borrar esta pelicula?')" href="<?=base_url("films/borrarFicha/$idPeli");?>">
                    	<i class="glyphicon glyphicon-remove"></i>
                    </a>
                <?php endif;?>
					</form><span><?=$info['nombre'];?></span>
				</div>
				</a>
			</div>
<?php endforeach;
	}
?> 
</div>
</div>
