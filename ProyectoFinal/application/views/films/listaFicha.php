

<?php if ($this->session->userdata('username')):?>
<p>Si quieres añadir una nueva película a la base de datos, haz click <a href="<?=base_url();?>films/cargarFormCrearFicha">aquí</a>
<p>actualizar ficha: <a href="<?=base_url();?>films/cargarFormModFicha">aquí</a>
<?php endif;?>
<h1>Lista de películas</h1>


<?php
if($contenido!=null){
foreach ($contenido as $pelicula):?>
<table border="0">
<tr>
<td>
<b>Título</b><br/>
<a href="<?=base_url('films/verPeli/'.$pelicula['id'])?>"><?=$pelicula['nombre']?></a><br/>
<b>Fecha de estreno</b><br/>
<?=$pelicula['fechaEstreno']?><br/>
<img src="<?=base_url("assets/images/films/".$pelicula['caratula'])?>" height="400" width="280"/>
</td>
</tr>
</table>
<br/>
<?php if ($this->session->userdata('tipoUsuario')==0 || $this->session->userdata('idUsuario')==$pelicula['idUsuario']):?>
<a href="<?=base_url();?>films/cargarFormModFicha?id=<?=$pelicula['id']?>">Actualizar película</a>
<?php endif;?>
<p>
<?php if ($this->session->userdata('tipoUsuario')==0):?>
<a onclick="return confirm('¿Estás seguro de querer borrar esta ficha?')" href="<?=base_url();?>films/borrarFicha/<?=$pelicula['id']?>">Borrar película</a>
<?php endif;?>
<?php endforeach;}
else{
	echo "Aún no hay ninguna película en la base de datos";
}
?>
