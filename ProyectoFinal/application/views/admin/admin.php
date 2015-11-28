
<form action="<?= base_url();?>admin" method="get">
<input type="text" name="adm">
<input type="submit" value="buscar">

</form>

<table border="1px">

<thead>

<tr>
<td>nickname</td>
<td>nombre</td>
<td>apellidos</td>

</tr>
</thead>
<tbody>
<?php if(isset($user)) { foreach($user as $datos){
?>
<tr>
<form name="formulario" enctype="multipart/form-data" action="<?=base_url();?>admin/modificarFicha" method="post">
<input type="text" name="id" value="<?php echo $datos->id;?>" hidden>
<td><input type="text" name="nickname" value="<?php echo $datos->nickname;?>"</td>
<td><input type="text" name="nombre" value="<?php echo $datos->nombre;?>"</td>
<td><input type="text" name="apellido" value="<?php echo $datos->apellidos;?>"</td>
<td><a href="<?=base_url();?>admin/borrarUser/<?=$datos->id;?>">Borrar Usuario</a></td>
<td><input type="submit" value="Editar Usuario"/></td><!-- <a href="<?=base_url();?>admin/modificarFicha?id=<?=$datos->id?>">Editar Usuario</a> -->

</form>
</tr>
<?php }} else{ echo "";}?>
</tbody>
</table>

