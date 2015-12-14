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
<script>
	$('.principalInfo .glyphicon-pencil').on('click', function() {
	    var name;
	    if($(this).parent().parent().hasClass('principalInfo')) {
	        if($(this).siblings('b').text() == 'Nombre: ') {
	            name = "nombre";
	        } else if($(this).siblings('b').text() == 'Fecha de estreno: ') {
	            name = "estreno";   
	        }else if($(this).siblings('b').text() == 'Género: ') {
	            name = "genero";
	        }
	        if($(this).siblings('span').is(':hidden')) {
		        if($(this).siblings('form').children('.principalInfoEdicion').attr('id') == 'generoPeli') {
		        	$(this).siblings('form').children('.principalInfoEdicion').hide().parent().siblings('span').text($(this).siblings('form').children('.principalInfoEdicion option:selected').html()).show();
		            $(this).siblings('form').submit().remove(); 
			    } else {
			    	$(this).siblings('form').children('.principalInfoEdicion').hide().parent().siblings('span').text($(this).siblings('form').children('.principalInfoEdicion').val().trim()).show();
		            $(this).siblings('form').submit().remove();
				}
	        } else {
	            if($(this).siblings('b').text() == 'Nombre: ') {
	                $(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><input class="form-control input-sm principalInfoEdicion" name="' + name + '" value="' + $(this).siblings('span').text() + '"/></form>');
	            } else if($(this).siblings('b').text() == 'Fecha de estreno: ') {
	                $(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><input type="text" class="form-control input-sm principalInfoEdicion" data-date-format="YYYY-MM-DD" id="' + name + '" name="' + name + '" value="' + $(this).siblings('span').text() + '"/></form>');
	                $('#estreno').datetimepicker();
	            } else if($(this).siblings('b').text() == 'Género: ') {
	            	$(this).siblings('span').hide().after('<form class="col-xs-5 col-sm-4" action="" method="POST"><select class="form-control principalInfoEdicion" name="genero[]" id="generoPeli"><?php foreach ($genero as $gen):?><option value="<?php print_r( $gen['id']);?>"><?php print_r($gen['nombreGenero']);?></option><?php endforeach;?></select></form>');
	            }
	        }
	    }
	});
</script>