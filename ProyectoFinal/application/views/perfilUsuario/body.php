<div class="perfil">
	<div class="cabecera">
					<?php foreach ($contenido as $datosPerfil):?>
		<img src="<?= base_url(); ?>assets/images/users/<?=$datosPerfil['avatar']?>"
			alt="Avatar del usuario" /> <span class="nick">
			
			
	<?php
        if (!isset($nick)) {
        	echo $this->session->userdata('username');
        } else { 
        	echo $nick; 
        }
      ?>
			
			
			</span>
		<div class="infoPersonal">
			<p>
				<b>Nombre:</b><span><?=$datosPerfil['nombre']?></span>
				
		<?php
        if (!isset($nick)) {
             
      ?>
          <i class="glyphicon glyphicon-pencil"></i>
      <?php 
        }
      ?>
			</p>
			<p>
				<b>Apellidos:</b><span><?=$datosPerfil['apellidos']?></span>
					<?php
        if (!isset($nick)) {
             
      ?>
          <i class="glyphicon glyphicon-pencil"></i>
      <?php 
        }
      ?>
			</p>
			<p>
				<b>Fecha de nacimiento:</b><span><?=$datosPerfil['fechaNacimiento']?></span>
					<?php
        if (!isset($nick)) {
             
      ?>
          <i class="glyphicon glyphicon-pencil"></i>
      <?php 
        }
      ?>
			</p>
			<p>
				<b>Sexo:</b><span>
						<?php
						
						if ($datosPerfil ['sexo'] == "Ho") {
							echo "Hombre";
						} else if ($datosPerfil ['sexo'] == "Mu") {
							echo "Mujer";
						}
						?></span>
							<?php
        if (!isset($nick)) {
             
      ?>
          <i class="glyphicon glyphicon-pencil"></i>
      <?php 
        }
      ?>
			</p>
		</div>


	</div>
	<div class="restoPerfil">
		<div class="biografia">
			<span class="title">Acerca de 	<?php
        if (!isset($nick)) {
        	echo $this->session->userdata('username');
     
        }else{ echo $nick; }
      ?>
			
			
			</span>
				<?php
        if (!isset($nick)) {
             
      ?>
          <i class="glyphicon glyphicon-pencil"></i>
      <?php 
        }
      ?>
			
			

			<div>
				<p><?=$datosPerfil['biografia']?></p>
			</div>
		</div>
		<?php endforeach;?>
		<div class="comentarios">
		<span class="title">Últimos comentarios de 	<?php
        if (!isset($nick)) {
        	echo $this->session->userdata('username');
     
        }else{ echo $nick; }
      ?>
			</span>
			
		<?php foreach ($comentario as $datosComen):?>
			<div>
				<p>
					En <a href="<?=base_url('films/verPeli/'.$datosComen['idPelicula']);?>"><span><?=$datosComen['nombre']?></span></a>:
				</p>
				<p><?=$datosComen['texto']?></p>
			</div>
		<?php endforeach;?>
		</div>
		<div class="pelisAgregadas">
		<span class="title">Últimas películas agregadas por 	<?php
        if (!isset($nick)) {
        	echo $this->session->userdata('username');
     
        }else{ echo $nick; }
      ?>
			</span><br />
			
		<?php foreach ($peliculas as $datosPelis):?>
			<div>
				<a href="<?=base_url('films/verPeli/'.$datosPelis['id']);?>"> <img
					src="<?= base_url(); ?>/assets/images/films/<?=$datosPelis['caratula']?>"
					alt="NombrePelicula" height="90px" width="90px" /><br />
				</a>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>