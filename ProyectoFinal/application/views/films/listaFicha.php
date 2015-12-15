<?php 
if($this->session->flashdata("borrarFichaFallido")){
?>
<div class="alert alert-danger text-center" role="alert"> 
<?=$this->session->flashdata('borrarFichaFallido'); ?>
</div>
<?php }
if($this->session->flashdata("fichaBorradaCor")){
	?>
<div class="alert alert-success text-center fichaBorradaCor" role="alert"> 
<?=$this->session->flashdata('fichaBorradaCor'); }?>
</div>
<?php
if($this->session->userdata('idUsuario')):
?>
<div class="agregarPelicula">
	<a href="<?php base_url();?>cargarFormCrearFicha"><button>Crear Película</button></a>
</div>
<?php endif;?>
<div class="busquedaPeli">
<?php if($contenido!=null){
foreach ($contenido as $pelicula):
$idPeli=$pelicula['id'];
?>
			<div class="resultados">
				<img src="<?=base_url("assets/images/films/".$pelicula['caratula'])?>" alt="" height="120" width="120"/>
				<?php if (($this->session->userdata('idUsuario')==$pelicula['idUsuario'])||($this->session->userdata('tipoUsuario')==2)):?>
                    <a onclick="return confirm('¿Estás seguro de querer borrar esta pelicula?')" href="<?=base_url("films/borrarFicha/$idPeli");?>">
                    	<i class="glyphicon glyphicon-remove"></i>
                    </a>
                <?php endif;?>
                <a href="<?=base_url('films/verPeli/'.$pelicula['id'])?>"><span><?=$pelicula['nombre']?></span></a>
			</div>
<?php endforeach;}?> 
</div>      
</div>