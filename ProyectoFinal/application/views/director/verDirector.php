<h3>Directores</h3>
<?php
	if($directores!=null){
		foreach ($directores as $info):?>
		<table border="0">
			<tr>
			<td>
			<h4>
				<?php 
					echo $info['director']."<br/>";
				?>
			</h4>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>"><?=$info['nombre']?></a>
				<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>"/><br/>
			</td>
			</tr>
			</table>
	<?php endforeach;
	}
else{
	echo "<h2>No hay directores que mostrar</h2>";
}