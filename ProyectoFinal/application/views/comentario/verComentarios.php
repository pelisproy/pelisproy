<div class="comentariosPelicula">
<?php 
$idPeli=$idPelicula;
$idUser=$this->session->userdata('idUsuario');
?>
                <div class="titulo"><span>Comentarios:</span></div>
<?php
if($contenido!=null){
foreach ($contenido as $comentario):?>
<?php $idCom=$comentario['id']; ?>
                <div class="comentario">
                <?php if (($this->session->userdata('idUsuario')==$comentario['idUsuario'])||($this->session->userdata('tipoUsuario')==2)):?>
                    <a onclick="return confirm('¿Estás seguro de querer borrar este comentario?')" href="<?=base_url("films/borrarComentario/$idCom");?>">
                    <i class="glyphicon glyphicon-remove"></i>
                    </a>
                <?php endif;?>
                    <p><a href="<?php echo $comentario['id'];?>"><?php echo $comentario['nickname'];?></a> el <span class="horaComentario"><?php echo $comentario['fechaComentario'];?></span>:</p><br/>
                    <?php echo $comentario['texto']?>
                </div>
<?php 

endforeach;
}
else{
	echo "<h3>No hay comentarios aún, se tú el primero en comentar</h3>";
?>
<?php 
}
if(isset($idUser)){
?>
 <div class="comentar">
                    <form id="nuevoComentario" action="<?=base_url('films/nuevoComentario');?>" method="post" name="comentar">
                        <textarea name="texto" placeholder="Deja tu comentario!"></textarea>
                        <input type="button" onclick="activarError()" value="Comentar">
                        <div class="error"><span>Tu comentario debe tener al menos 3 caracteres</span></div>
                        <input type="hidden" name="idPeli" value="<?=$idPeli?>"/>
                        <input type="hidden" name="idUser" value="<?=$this->session->userdata('idUsuario')?>"/>
                    </form>
 </div>
 <?php }
 else{
 	?>
 	<h3>Usted no está registrado, no puede ver los comentarios de otra gente</h3>
 	
 	Si lo desea, puede registrarse <a href=".<?= base_url(); ?>home/nuevoUsuario"> haciendo click aquí</a>
<?php 
 }
 ?>
</div>
<!--
		<a onclick="return confirm('¿Estás seguro de querer borrar este comentario?')" href="<?=base_url("films/borrarComentario/$idCom");?>">Borrar</a>
		<input type="button" onclick="modificarComentario(<?php echo $idCom ?>)" value="Modificar">
	</div>
</div>
-->
</div>