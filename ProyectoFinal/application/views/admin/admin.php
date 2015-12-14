<div class="administrar">
	<form action="<?= base_url();?>admin" method="post"></form>
	<table border="1px">
		<thead>
			<tr>
				<td>Nickname</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Tipo de usuario</td>
				<td>Biografía</td>
			</tr>
		</thead>
		<tbody>
		<?php if(isset($user)) { foreach($user as $datos){
		?>
			<tr>
				<form name="formulario" enctype="multipart/form-data" action="<?=base_url();?>admin/modificarFicha" method="post">
					<input type="text" name="id" value="<?php echo $datos->id;?>" hidden>
					<td><input type="text" name="nickname" value="<?php echo $datos->nickname;?>"></td>
					<td><input type="text" name="nombre" value="<?php echo $datos->nombre;?>"></td>
					<td><input type="text" name="apellido" value="<?php echo $datos->apellidos;?>"></td>
					<td><select name="tipoUsuario" >
					<?php if ($datos->tipoUsuario=="2"){?>
					<option >1</option>
					<option selected>2</option>  
					<?php } else {?>
					<option selected >1</option>
					<option>2</option>
					<?php }
					?>
					</select></td>
					<td><input type="text" name="biografia" value="<?php echo $datos->biografia;?>"></td>
					<td><input type="submit" value="Editar usuario"/></td><!-- <a href="<?=base_url();?>admin/modificarFicha?id=<?=$datos->id?>">Editar Usuario</a> -->
				</form>
				<form name="formulario" enctype="multipart/form-data" action="<?=base_url();?>admin/borrarUser/<?=$datos->id;?>" method="post">
					<td><button>Borrar usuario</button></td>
				</form>
			</tr>
		<?php }} else{ echo "";}?>
		</tbody>
	</table>
</div>
