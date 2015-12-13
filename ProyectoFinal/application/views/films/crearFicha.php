<div class="crearPeli">
<form class="form-horizontal" name="creacionPeli" id="creacionPeli" enctype="multipart/form-data" action="<?=base_url('films/crearFicha');?>" method="post">
                <fieldset>
                    <legend> Crear película <br/><strong> (<span class="obligatorio">*</span>) Campos obligatorios </strong></legend>
                    <div class="left">
                    	<div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Nombre película <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre película" maxlength="40" data-toggle="tooltip" title="Debe tener al menos 3 caracteres"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Fecha de estreno <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                            <input class="form-control" id="datetimepicker" name="datetimepicker" type="text" placeholder="Fecha de estreno (Año-Mes-Día)" maxlength="4" data-toggle="tooltip" title="Formato AAAA-MM-DD" data-date-format="YYYY-MM-DD"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Género <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                        	<select class="form-control" name="genero[]" id="generoPeli">
								    <?php foreach ($genero as $gen):?>
								    <option value="<?php print_r( $gen['id']);?>"><?php print_r($gen['nombreGenero']);?></option>
								    <?php endforeach;?>
								</select>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Sinopsis <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                            <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Sinopsis" rows="5" data-toggle="tooltip" title="Debe tener mínimo 100 caracteres"></textarea>
	                        </div>
	                    </div>
                    </div>
                    <div class="right">
                    	<div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Tráiler <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                            <input class="form-control" id="trailer" name="trailer" type="text" placeholder="URL del tráiler" maxlength="500" data-toggle="tooltip" title="URL del tráiler"/>
	                        </div>
	                    </div>
                    	<div class="form-group">
	                        <div class="col-sm-4">
	                            <label class="control-label"> Director <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-8 col-lg-6">
	                            <input class="form-control" id="director" name="director" type="text" placeholder="Director" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
					        <div class="col-sm-4">
					            <label class="control-label"> Actor principal <span class="obligatorio">*</span></label>
					        </div>
					        <div class="col-sm-8 col-lg-6">
					            <input class="form-control" id="actor" name="actor" type="text" placeholder="Actor principal" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
					        </div>
					    </div>
	                    <div class="file form-group">
	                        <div class="col-xs-5 col-sm-4">
	                            <label class="control-label"> Carátula </label>
	                        </div>
	                        <div class="col-xs-7 col-sm-8 col-lg-6">
	                            <button onclick="" class="seleccionImg"> Seleccionar </button>
	                            <input id="caratula" name="caratula" type="file"/>
	                        </div>
	                    </div>
                    </div>
                    <br/><br/>
                    <div class="button">
                        <input type="button" class="btn btn-success" onclick="validar()" value="Agregar película"/>
                    </div>
                </fieldset>
            </form>
       </div>