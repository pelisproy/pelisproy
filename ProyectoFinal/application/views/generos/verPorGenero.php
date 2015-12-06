<div class="busquedaGenero">
				<div class="generoNombre">
					<span> Suspense <i class="glyphicon glyphicon-chevron-down"></i></span>
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

<h3>Listado por género</h3>

<?php
if($genero!=null){
		foreach ($genero as $info):?>
		<table border="0">
			<tr>
			<td>
			<h4>
				<?php 
					echo $info['nombreGenero']."<br/>";
				?>
			</h4>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>"><?=$info['nombre']?></a>
				<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" height="400" width="280"/><br/>
			</td>
			</tr>
			</table>
	<?php endforeach;
	}
?> 

-->