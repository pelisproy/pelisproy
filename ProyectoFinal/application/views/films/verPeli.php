<div class="fichaPelicula">
<?php 
if($contenido!=null){
foreach ($contenido as $pelicula):?>
                <div class="datosSuperiores">
                    <div class="imagenPelicula">
                        <img src="<?=base_url("/assets/images/films/".$pelicula['caratula']);?>" alt="<?=$pelicula['nombre'];?>"/>
                    </div>
                    <div class="principalInfo">
                        <p><b>Nombre: </b><span><?php echo $pelicula['nombre'];?></span><?php if ($this->session->userdata('idUsuario')==$pelicula['idUsuario']):?><i class="glyphicon glyphicon-pencil"></i><?php endif;?></p>
                        <p><b>Fecha de estreno: </b><span><?php echo $pelicula['fechaestreno'];?></span><?php if ($this->session->userdata('idUsuario')==$pelicula['idUsuario']):?><i class="glyphicon glyphicon-pencil"></i><?php endif;?></p>
                        <p><b>Género: </b><span><?php echo $pelicula['nombreGenero'];?></span><?php if ($this->session->userdata('idUsuario')==$pelicula['idUsuario']):?><i class="glyphicon glyphicon-pencil"></i><?php endif;?></p>
                    </div>
                </div>
                <div class="col-xs-5 col-lg-4 reparto">
                    <span>Reparto:</span>
                    <ul>
                        <li><b>Director: </b></li>
                        <li><?php echo $pelicula['director'];?></li><br/>
                        <li><b>Actor principal: </b></li>
                        <li><?php echo $pelicula['actor'];?></li> <!-- Probar a enlazar a otras pelis del director y actor-->
                    </ul>
                </div>
                <div class="col-xs-7 col-lg-4 sinopsis">
                    <span>Sinopsis:</span><?php if ($this->session->userdata('idUsuario')==$pelicula['idUsuario']):?><i class="glyphicon glyphicon-pencil"></i><?php endif;?>
                    <p><?php echo $pelicula['sinopsis'];?></p>
                </div>
                <div class="col-xs-12 col-lg-4 trailer">
                    <span>Tráiler:</span><?php if ($this->session->userdata('idUsuario')==$pelicula['idUsuario']):?><i class="glyphicon glyphicon-pencil"></i><?php endif;?>
                    <iframe src="<?php echo $pelicula['trailer'];?>"></iframe>
                </div>
<?php endforeach;}?>
</div>