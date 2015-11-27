<h3>COMENTARIOS</h3>
<?php
if($contenido!=null){
foreach ($contenido as $comentario):?>
<div id="comentario">
<?php 
$idCom=$comentario['id'];
$idPeli=$comentario['idPelicula'];
?>
	<h6><?php echo $comentario['nombre'];?></h6>
	<input type="hidden" name="idCom" value="<? echo "$idCom"?>"/>
	<img src="<?=base_url('/assets/images/users/'.$comentario['avatar']);?>"/>
	<div id="texto" name="texto">
		<?php echo $comentario['texto']?>
	</div>
		<a href="<?=base_url("films/modificarComentario/$idCom");?>" onclick="modificarComentario(<?php echo $idCom ?>)">Modificar</a>
		<a href="<?=base_url("films/borrarComentario/$idCom");?>">Borrar</a>
		<input type="button" onclick="modificarComentario(<?php echo $idCom ?>)" value="Modificar">
	</div>
</div>
<?php 
endforeach;
}
else{
	echo "<h3>No hay comentarios aún, se tú el primero en comentar</h3>";	
}
?>
<form id="nuevoComentario" action="<?=base_url('films/nuevoComentario');?>" method="post">
<textarea rows="5" cols="30" name="texto"></textarea>
<input type="submit" value="Nuevo Comentario"/>
<input type="hidden" name="idPeli" value="<?=$idPeli?>"/>
</form>