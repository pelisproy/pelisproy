<div class="busquedaDirector">
				<div class="directorNombre">
					<span> Martin Scorsese <i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="resultados" onclick="">
					<img src="<?= base_url(); ?>/assets/images/carrusel/3.jpg" alt="NombrePelícula"/>
					<form action="" method=""><i class="glyphicon glyphicon-remove"></i></form><a href=""><span> Película 1 </span></a>
				</div>
				<div class="resultados" onclick="">
					<img src="<?= base_url(); ?>/assets/images/carrusel/2.jpg" alt="NombrePelícula"/>
					<form action="" method=""><i class="glyphicon glyphicon-remove"></i></form><a href=""><span> Película 2 </span></a>
				</div>
            </div>
            <br/>
            
            
            
            
            
            <!-- 
            
            
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
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>"><?=$info['nombre']?></a><br/>
				<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" height="400" width="280"/><br/>
			</td>
			</tr>
			</table>
	<?php endforeach;
	}
else{
	echo "<h2>No hay directores que mostrar</h2>";
}
    ?>        
             -->