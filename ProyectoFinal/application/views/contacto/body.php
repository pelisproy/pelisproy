<?php
if(($this->session->flashdata("correctoContacto"))):
?>
<div class="alert alert-danger text-center" role="alert"> 
<?=$this->session->flashdata('correctoContacto'); 
endif;
?>
</div>

<div class="contacto">
		<div class="localizacion">
			<p><span> Dirección: </span> Avd. de Irún s/n - 28830 San Fernando, Madrid </p>
			<p><span> Teléfono: </span> 916 730 241 </p>
			<p><span> Fax: </span> 916 741 584 </p>
			<p><span> Correo electrónico: </span> ies.reyfernando.sanfernando@educa.madrid.org </p>
			<div class="googleMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.360856714727!2d-3.531932184276595!3d40.42300776318085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42309caa01764d%3A0xcaf177acf3c669ef!2sInstituto+de+Educaci%C3%B3n+Secundaria+Ies+Rey+Fernando+VI!5e0!3m2!1ses!2ses!4v1447253088336" height="400" width="700" frameborder="0"></iframe>
			</div>
		</div>
		<div class="mail">
			<form class="form-horizontal" name="contactar" id="contactar" action="<?=base_url('contacto/enviarCorreo');?>" method="post">
                <fieldset>
                    <legend> Contacta con nosotros </legend>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" maxlength="50" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <input class="form-control" id="mail" name="mail" type="text" placeholder="Correo electrónico" maxlength="100" data-toggle="tooltip" title="Ejemplo de mail válido: filmproject@servidordecorreo.es"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <textarea class="form-control" id="contenido" name="contenido" placeholder="Cuéntanos" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="button">
                        <input type="button" class="btn btn-success" onclick="validarMsg()" value="Enviar"/>
                    </div>
                </fieldset>
            </form>
		</div>
	</div>