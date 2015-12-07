
<div class="perfil">
	<div class="cabecera">
					<?php foreach ($contenido as $datosPerfil):?>
		<img src="assets/images/users/<?=$datosPerfil['avatar']?>"
			alt="Avatar del usuario" /> <span class="nick"><?php echo $this->session->userdata('username');?></span>
		<div class="infoPersonal">
			<p>
				<b>Nombre:</b><span><?=$datosPerfil['nombre']?></span><i
					class="glyphicon glyphicon-pencil"></i>
			</p>
			<p>
				<b>Apellidos:</b><span><?=$datosPerfil['apellidos']?></span><i
					class="glyphicon glyphicon-pencil"></i>
			</p>
			<p>
				<b>Fecha de nacimiento:</b><span><?=$datosPerfil['fechaNacimiento']?></span><i
					class="glyphicon glyphicon-pencil"></i>
			</p>
			<p>
				<b>Sexo:</b><span>
						<?php
						
						if ($datosPerfil ['sexo'] == "h") {
							echo "Hombre";
						} else if ($datosPerfil ['sexo'] == "m") {
							echo "Mujer";
						} else {
							echo "Hay un error en tu sexo";
						}
						?></span><i class="glyphicon glyphicon-pencil"></i>
			</p>
		</div>


	</div>
	<div class="restoPerfil">
		<div class="biografia">
			<span class="title">Acerca de <?php echo $this->session->userdata('username');?></span><i
				class="glyphicon glyphicon-remove"></i><i
				class="glyphicon glyphicon-pencil"></i>
			<div>
				<p><?=$datosPerfil['biografia']?></p>
			</div>
		</div>
		<?php endforeach;?>
		<div class="comentarios">
		<span class="title">Últimos comentarios de <?php echo $this->session->userdata('username');?></span>
			
		<?php foreach ($comentario as $datosComen):?>
			<div>
				<p>
					En <a href=""><span><?=$datosComen['nombre']?></span></a>:
				</p>
				<p><?=$datosComen['texto']?></p>
			</div>
		<?php endforeach;?>
		</div>
		<div class="pelisAgregadas">
		<span class="title">Últimas películas agregadas por <?php echo $this->session->userdata('username');?></span><br />
			
		<?php foreach ($peliculas as $datosPelis):?>
			<div>
				<a href=""> <img
					src="../images/carrusel/<?=$datosPelis['caratula']?>"
					alt="NombrePelicula" height="90px" width="90px" /><br /> <span><?=$datosPelis['nombre']?></span>
				</a>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>