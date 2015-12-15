<script type="text/javascript">
$(document).ready(function(){               
    var datos;
    $("#nickname").blur(function(e){
        if($("#nickname").val().length > 2) {
           datos=$("#nickname").val();
                      $.ajax({
                            type: "POST",
                            url: "<?=base_url('registro/buscaNick');?>",
                            data: "nickname="+datos,
                      	error: function(asd){
                      		$('#resultadoNick').html('<p>Error en la petición ajax</p>');
                      },
						success:function(asd){
							if(asd){
								$('#resultadoNick').html('<span class="correct"> Válido </span>');
							}
							else if(asd==false){
								$('#resultadoNick').html('<span class="incorrect"> Existente </span>');
							}
						}
                }); 
        } else {
        	$('#resultadoNick').html('');
        }          
    });
                          
});
</script>
<?php
if(($this->session->flashdata("registroFallido"))):
?>
<div class="alert alert-danger text-center" role="alert"> 
<?=$this->session->flashdata('registroFallido'); ?>
</div>
<?php endif;?>
<div class="container">
			<form class="form-horizontal" action="<?=base_url()?>registro/registro_usuario" method="post" id="registro" name="registro">
            	<div class="row">
                    <fieldset>
                        <legend> Regístrate </legend>
                        <div class="alert alert-danger">
                        	Para continuar debes aceptar las <strong> Condiciones de Uso </strong>
                    	</div>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label class="control-label"> Nombre <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Apellidos <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" maxlength="40">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Nick <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="nickname" name="nickname" type="text" placeholder="Nick" maxlength="20">
                            </div>
							<div id="resultadoNick"></div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Contraseña <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Rep contraseña <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="password2" name="password2" type="password" placeholder="Repetir contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> E-Mail <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="correo" name="correo" type="text" placeholder="E-Mail" maxlength="40">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Fecha nacimiento </label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <input class="form-control" id="datetimepickerNacimiento" name="datetimepickerNacimiento" type="text" placeholder="Fecha de nacimiento (Año-Mes-Día)" maxlength="10" data-date-format="YYYY-MM-DD"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Nacionalidad </label>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <select class="form-control" name="nacionalidad" id="nacionalidad">
									<option value="">Seleccione</option> 
									<option value="Argentina">Argentina</option> 
									<option value="Afganistán">Afganistán</option> 
									<option value="Albania">Albania</option> 
									<option value="Alemania">Alemania</option> 
									<option value="Andorra">Andorra</option> 
									<option value="Angola">Angola</option> 
									<option value="Anguilla">Anguilla</option> 
									<option value="Antártida Argentina">Antártida Argentina</option> 
									<option value="Antigua y Barbuda">Antigua y Barbuda</option> 
									<option value="Antillas Holandesas">Antillas Holandesas</option> 
									<option value="Arabia Saudita">Arabia Saudita</option> 
									<option value="Argelia">Argelia</option> 
									<option value="Armenia">Armenia</option> 
									<option value="Aruba">Aruba</option> 
									<option value="Australia">Australia</option> 
									<option value="Austria">Austria</option> 
									<option value="Azerbaiján">Azerbaiján</option> 
									<option value="Bahamas">Bahamas</option> 
									<option value="Bahrain">Bahrain</option> 
									<option value="Bangladesh">Bangladesh</option> 
									<option value="Barbados">Barbados</option> 
									<option value="Bélgica">Bélgica</option> 
									<option value="Belice">Belice</option> 
									<option value="Benin">Benin</option> 
									<option value="Bhutan">Bhutan</option> 
									<option value="Bielorrusia">Bielorrusia</option> 
									<option value="Bolivia">Bolivia</option> 
									<option value="Bosnia Herzegovina">Bosnia Herzegovina</option> 
									<option value="Botswana">Botswana</option> 
									<option value="Brasil">Brasil</option> 
									<option value="Brunei">Brunei</option> 
									<option value="Bulgaria">Bulgaria</option> 
									<option value="Burkina Faso">Burkina Faso</option> 
									<option value="Burundi">Burundi</option> 
									<option value="Cabo Verde">Cabo Verde</option> 
									<option value="Camboya">Camboya</option> 
									<option value="Camerún">Camerún</option> 
									<option value="Canadá">Canadá</option> 
									<option value="Chad">Chad</option> 
									<option value="Chile">Chile</option> 
									<option value="China">China</option> 
									<option value="Chipre">Chipre</option> 
									<option value="Colombia">Colombia</option> 
									<option value="Comoros">Comoros</option> 
									<option value="Congo">Congo</option> 
									<option value="Corea del Norte">Corea del Norte</option> 
									<option value="Corea del Sur">Corea del Sur</option> 
									<option value="Costa de Marfil">Costa de Marfil</option> 
									<option value="Costa Rica">Costa Rica</option> 
									<option value="Croacia">Croacia</option> 
									<option value="Cuba">Cuba</option> 
									<option value="Darussalam">Darussalam</option> 
									<option value="Dinamarca">Dinamarca</option> 
									<option value="Djibouti">Djibouti</option> 
									<option value="Dominica">Dominica</option> 
									<option value="Ecuador">Ecuador</option> 
									<option value="Egipto">Egipto</option> 
									<option value="El Salvador">El Salvador</option> 
									<option value="Em. Arabes Un.">Em. Arabes Un.</option> 
									<option value="Eritrea">Eritrea</option> 
									<option value="Eslovaquia">Eslovaquia</option> 
									<option value="Eslovenia">Eslovenia</option> 
									<option value="España">España</option> 
									<option value="Estados Unidos">Estados Unidos</option> 
									<option value="Estonia">Estonia</option> 
									<option value="Etiopía">Etiopía</option> 
									<option value="Fiji">Fiji</option> 
									<option value="Filipinas">Filipinas</option> 
									<option value="Finlandia">Finlandia</option> 
									<option value="Francia">Francia</option> 
									<option value="Gabón">Gabón</option> 
									<option value="Gambia">Gambia</option> 
									<option value="Georgia">Georgia</option> 
									<option value="Ghana">Ghana</option> 
									<option value="Gibraltar">Gibraltar</option> 
									<option value="Grecia">Grecia</option> 
									<option value="Grenada">Grenada</option> 
									<option value="Groenlandia">Groenlandia</option> 
									<option value="Guadalupe">Guadalupe</option> 
									<option value="Guam">Guam</option> 
									<option value="Guatemala">Guatemala</option> 
									<option value="Guayana Francesa">Guayana Francesa</option> 
									<option value="Guinea">Guinea</option> 
									<option value="Guinea Ecuatorial">Guinea Ecuatorial</option> 
									<option value="Guinea-Bissau">Guinea-Bissau</option> 
									<option value="Guyana">Guyana</option> 
									<option value="Haití">Haití</option> 
									<option value="Holanda">Holanda</option> 
									<option value="Honduras">Honduras</option> 
									<option value="Hong Kong">Hong Kong</option> 
									<option value="Hungría">Hungría</option> 
									<option value="India">India</option> 
									<option value="Indonesia">Indonesia</option> 
									<option value="Irak">Irak</option> 
									<option value="Irán">Irán</option> 
									<option value="Irlanda">Irlanda</option> 
									<option value="Islandia">Islandia</option> 
									<option value="Islas Cayman">Islas Cayman</option> 
									<option value="Islas Cook">Islas Cook</option> 
									<option value="Islas Faroe">Islas Faroe</option> 
									<option value="Islas Marianas del Norte">Islas Marianas del Norte</option> 
									<option value="Islas Marshall">Islas Marshall</option> 
									<option value="Islas Solomon">Islas Solomon</option> 
									<option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option> 
									<option value="Islas Vírgenes">Islas Vírgenes</option> 
									<option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option> 
									<option value="Israel">Israel</option> 
									<option value="Italia">Italia</option> 
									<option value="Jamaica">Jamaica</option> 
									<option value="Japón">Japón</option> 
									<option value="Jordania">Jordania</option> 
									<option value="Kazajstán">Kazajstán</option> 
									<option value="Kenya">Kenya</option> 
									<option value="Kirguistán">Kirguistán</option> 
									<option value="Kiribati">Kiribati</option> 
									<option value="Kuwait">Kuwait</option> 
									<option value="Laos">Laos</option> 
									<option value="Lesotho">Lesotho</option> 
									<option value="Letonia">Letonia</option> 
									<option value="Líbano">Líbano</option> 
									<option value="Liberia">Liberia</option> 
									<option value="Libia">Libia</option> 
									<option value="Liechtenstein">Liechtenstein</option> 
									<option value="Lituania">Lituania</option> 
									<option value="Luxemburgo">Luxemburgo</option> 
									<option value="Macao">Macao</option> 
									<option value="Macedonia">Macedonia</option> 
									<option value="Madagascar">Madagascar</option> 
									<option value="Malasia">Malasia</option> 
									<option value="Malawi">Malawi</option> 
									<option value="Mali">Mali</option> 
									<option value="Malta">Malta</option> 
									<option value="Marruecos">Marruecos</option> 
									<option value="Martinica">Martinica</option> 
									<option value="Mauricio">Mauricio</option> 
									<option value="Mauritania">Mauritania</option> 
									<option value="Mayotte">Mayotte</option> 
									<option value="México">México</option> 
									<option value="Micronesia">Micronesia</option> 
									<option value="Moldova">Moldova</option> 
									<option value="Mónaco">Mónaco</option> 
									<option value="Mongolia">Mongolia</option> 
									<option value="Montserrat">Montserrat</option> 
									<option value="Mozambique">Mozambique</option> 
									<option value="Myanmar">Myanmar</option> 
									<option value="Namibia">Namibia</option> 
									<option value="Nauru">Nauru</option> 
									<option value="Nepal">Nepal</option> 
									<option value="Nicaragua">Nicaragua</option> 
									<option value="Níger">Níger</option> 
									<option value="Nigeria">Nigeria</option> 
									<option value="Noruega">Noruega</option> 
									<option value="Nueva Caledonia">Nueva Caledonia</option> 
									<option value="Nueva Zelandia">Nueva Zelandia</option> 
									<option value="Omán">Omán</option> 
									<option value="Pakistán">Pakistán</option> 
									<option value="Panamá">Panamá</option> 
									<option value="Papua Nueva Guinea">Papua Nueva Guinea</option> 
									<option value="Paraguay">Paraguay</option> 
									<option value="Perú">Perú</option> 
									<option value="Pitcairn">Pitcairn</option> 
									<option value="Polinesia Francesa">Polinesia Francesa</option> 
									<option value="Polonia">Polonia</option> 
									<option value="Portugal">Portugal</option> 
									<option value="Puerto Rico">Puerto Rico</option> 
									<option value="Qatar">Qatar</option> 
									<option value="RD Congo">RD Congo</option> 
									<option value="Reino Unido">Reino Unido</option> 
									<option value="República Centroafricana">República Centroafricana</option> 
									<option value="República Checa">República Checa</option> 
									<option value="República Dominicana">República Dominicana</option> 
									<option value="Reunión">Reunión</option> 
									<option value="Rumania">Rumania</option> 
									<option value="Rusia">Rusia</option> 
									<option value="Rwanda">Rwanda</option> 
									<option value="Sahara Occidental">Sahara Occidental</option> 
									<option value="Saint Pierre y Miquelon">Saint Pierre y Miquelon</option> 
									<option value="Samoa">Samoa</option> 
									<option value="Samoa Americana">Samoa Americana</option> 
									<option value="San Cristóbal y Nevis">San Cristóbal y Nevis</option> 
									<option value="San Marino">San Marino</option> 
									<option value="Santa Elena">Santa Elena</option> 
									<option value="Santa Lucía">Santa Lucía</option> 
									<option value="Sao Tomé y Príncipe">Sao Tomé y Príncipe</option> 
									<option value="Senegal">Senegal</option> 
									<option value="Serbia y Montenegro">Serbia y Montenegro</option> 
									<option value="Seychelles">Seychelles</option> 
									<option value="Sierra Leona">Sierra Leona</option> 
									<option value="Singapur">Singapur</option> 
									<option value="Siria">Siria</option> 
									<option value="Somalia">Somalia</option> 
									<option value="Sri Lanka">Sri Lanka</option> 
									<option value="Sudáfrica">Sudáfrica</option> 
									<option value="Sudán">Sudán</option> 
									<option value="Suecia">Suecia</option> 
									<option value="Suiza">Suiza</option> 
									<option value="Suriname">Suriname</option> 
									<option value="Swazilandia">Swazilandia</option> 
									<option value="Taiwán">Taiwán</option> 
									<option value="Uruguay">Uruguay</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-xs-4 col-sm-3 col-md-3">
                           		<label class="control-label"> Sexo </label>
                            </div>
                            <div class="radio col-xs-4 col-sm-4 col-md-3 col-lg-1">
                                <label><input type="radio" name="sexo" id="opcion_1" value="h" checked="checked"> Hombre </label>
                            </div>
                            <div class="radio col-xs-4 col-sm-4 col-md-3 col-lg-1">
                                <label><input type="radio" name="sexo" id="opcion_2" value="m"> Mujer </label>
                            </div>
                        </div>
                        <br/>
                        <div class="checkbox">
    						<label><input type="checkbox"> He leido y acepto las <a href="<?=base_url();?>home/condicionesUso">Condiciones de Uso</a> </label>
                       	</div>
                        <br>
                        <span> (<span class="obligatorio">*</span>) Campos obligatorios </span>
                        <br></br>
                        <div class="button">
                            <input type="button" class="btn btn-success" onclick="alertRegistro()" value="Ingresar"/>
                        </div>
                    </fieldset>
                </div>
               </form>
               </div>