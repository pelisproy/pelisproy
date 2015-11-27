<form class="form-horizontal" name="creacionPeli" id="creacionPeli" enctype="multipart/form-data" action="<?=base_url();?>/films/crearFicha" method="post">
                <fieldset>
                    <legend> Crear película <br/><strong> (<span class="obligatorio">*</span>) Campos obligatorios </strong></legend>
                    <div class="left">
                    	<div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Nombre película <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre película" maxlength="40" data-toggle="tooltip" title="Debe tener al menos 3 caracteres"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Fecha de estreno <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <input class="form-control" id="datetimepicker" name="fechaEstreno" type="text" placeholder="Fecha de estreno (Día-Mes-Año)" maxlength="4" data-toggle="tooltip" title="Formato DD-MM-AAAA" data-date-format="DD-MM-YYYY"/>
	                        </div>
	                    </div>
	                    <!--<div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Género <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <input class="form-control" id="genero" name="genero" type="text" placeholder="Género" maxlength="20" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
	                        </div>
	                    </div>-->
	                    <select name="genero[]" id="genero">
    <?php foreach ($genero as $gen):?>
    <option value="<?php echo $gen['id'];?>"><?php echo $gen['nombreGenero']?></option>
    <?php endforeach;?>
</select>
	                    <div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Sinopsis <span class="obligatorio">*</span></label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <textarea class="form-control" id="sinopsis" placeholder="Sinopsis" rows="5" data-toggle="tooltip" title="Debe tener mínimo 100 caracteres"></textarea>
	                        </div>
	                    </div>
	                    <div class="formResponsive">
	                    	<div class="form-group">
		                        <div class="col-md-5">
		                            <label class="control-label"> Tráiler </label>
		                        </div>
		                        <div class="col-sm-10 col-md-6">
		                            <input class="form-control" id="trailerResponsive" name="trailer" type="text" placeholder="URL del tráiler" maxlength="500" data-toggle="tooltip" title="URL del tráiler"/>
		                        </div>
		                    </div>
	                    	<div class="form-group">
		                        <div class="col-md-5">
		                            <label class="control-label"> Director <span class="obligatorio">*</span></label>
		                        </div>
		                        <div class="col-sm-10 col-md-6">
		                            <input class="form-control" id="directorResponsive" name="director" type="text" placeholder="Director" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
		                        </div>
		                    </div>
		                    <div class="form-group" id="actores">
		                        <div class="col-md-5">
		                            <label class="control-label"> Actores </label>
		                        </div>
		                        <div class="col-xs-8 col-sm-7 col-md-4">
		                            <input class="form-control" name="actor" type="text" placeholder="Actor" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
		                        </div>
		                        <div class="col-xs-4 col-sm-3 col-md-2">
		                            <input type="button" onclick="validarActorResponsive()" value="Agregar"/>
		                        </div>
		                        <div class="col-sm-10 col-md-6">
		                            <textarea class="form-control" id="actoresAgregadosResponsive" placeholder="Actores agregados" rows="4" disabled="disabled"></textarea>
		                        </div>
		                    </div>
		                    <div class="file form-group">
		                        <div class="col-xs-5 col-sm-3 col-md-5">
		                            <label class="control-label"> Carátula </label>
		                        </div>
		                        <div class="col-sm-9 col-md-6">
		                            <button onclick="" class="seleccionImg"> Seleccionar </button>
		                        </div>
		                    </div>
	                    </div>
                    </div>
                    <div class="right">
                    	<div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Tráiler </label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <input class="form-control" id="trailer" name="trailer" type="text" placeholder="URL del tráiler" maxlength="500" data-toggle="tooltip" title="URL del tráiler"/>
	                        </div>
	                    </div>
                    	<div class="form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Director </label>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <input class="form-control" id="director" name="director" type="text" placeholder="Director" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
	                        </div>
	                    </div>
	                    <div class="actores form-group">
	                        <div class="col-md-5">
	                            <label class="control-label"> Actores </label>
	                        </div>
	                        <div class="col-sm-7 col-md-4">
	                            <input class="form-control" name="actor" type="text" placeholder="Actor" maxlength="70" data-toggle="tooltip" title="Debe tener al menos 3 letras"/>
	                        </div>
	                        <div class="col-sm-3 col-md-2">
	                            <input type="button" onclick="validarActor()" value="Agregar"/>
	                        </div>
	                        <div class="col-sm-10 col-md-6">
	                            <textarea class="form-control" id="actoresAgregados" placeholder="Actores agregados" rows="4" disabled="disabled"></textarea>
	                        </div>
	                    </div>
	                    <div class="file form-group">
	                        <div class="col-sm-3 col-md-5">
	                            <label class="control-label"> Carátula </label>
	                        </div>
	                        <div class="col-sm-9 col-md-6">
	                            <button onclick="" class="seleccionImg"> Seleccionar </button>
	                            <input id="caratula" name="caratula" type="file"/>
	                        </div>
	                    </div>
                    </div>
                    <br/><br/>
                    <div class="button">
                        <!-- <input type="button" class="btn btn-success" onclick="validar()" value="Agregar película"/>-->
                        <input type="submit" class="btn btn-success" value="Agregar película"/>
                    </div>
                </fieldset>
            </form>
<input type="button" class="btn btn-success" onclick="validar()" value="Agregar película"/>