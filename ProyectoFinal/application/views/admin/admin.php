
<form action="<?= base_url();?>admin" method="post">


</form>

<table border="1px">

<thead>

<tr>
<td>nickname</td>
<td>nombre</td>
<td>apellidos</td>
<td>Tipo de Usuario</td>
<td>Biografia</td>

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
<?php if ($datos->tipoUsuario=="0"){?>
<option selected>0</option> 
<option >1</option> 
<?php } else {?>
<option>0</option>
<option selected >1</option>
<?php }
?>
</select></td>
<td><input type="text" name="biografia" value="<?php echo $datos->biografia;?>"></td>
<td><button><a href="<?=base_url();?>admin/borrarUser/<?=$datos->id;?>">Borrar Usuario</a></button></td>
<td><input type="submit" value="Editar Usuario"/></td><!-- <a href="<?=base_url();?>admin/modificarFicha?id=<?=$datos->id?>">Editar Usuario</a> -->

</form>
</tr>
<?php }} else{ echo "";}?>
</tbody>
</table>

