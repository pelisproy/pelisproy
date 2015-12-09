<?php
if($this->session->userdata('idUsuario')):
?>
<a href="<?php base_url();?>cargarFormCrearFicha">Crear Ficha</a>
<?php endif;?>
<div class="busquedaPeli">
			<!-- <div class="contador">
				<span> Se han encontrado X resultados </span>
			</div>-->
<?php if($contenido!=null){
foreach ($contenido as $pelicula):
$idPeli=$pelicula['id'];
?>
			<a href="<?=base_url('films/verPeli/'.$pelicula['id'])?>">
			<div class="resultados">
				<img src="<?=base_url("assets/images/films/".$pelicula['caratula'])?>" alt="" height="120" width="120"/>
				<?php if ($this->session->userdata('tipoUsuario')==0 || $this->session->userdata('idUsuario')==$pelicula['idUsuario']):?>
                    <a onclick="return confirm('¿Estás seguro de querer borrar esta pelicula?')" href="<?=base_url("films/borrarFicha/$idPeli");?>">
                    	<i class="glyphicon glyphicon-remove"></i>
                    </a>
                <?php endif;?>
                <span><?=$pelicula['nombre']?></span>
			</div>
			</a>
<?php endforeach;}?> 
</div>      
</div>