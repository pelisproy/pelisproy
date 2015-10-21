<div class="container">
			<form class="form-horizontal" action="<?=base_url()?>/registro/registro_usuario" method="post">
            	<div class="row">
                    <fieldset>
                        <legend> Regístrate </legend>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label class="control-label"> Nombre <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Apellidos <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="ape" name="apellidos" type="text" placeholder="Apellidos" maxlength="40">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Nick <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="nick" name="nickname" type="text" placeholder="Nick" maxlength="20">
                            </div>
                            <span class="incorrect" hidden="hidden"> Nick existente </span>
                            <span class="correct" hidden="hidden"> Nick v�lido </span>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Contraseña <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="pass" name="password" type="password" placeholder="Contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> Rep contraseña <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="pass2" type="password" placeholder="Repetir contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-md-3">
                           		<label class="control-label"> E-Mail <span class="obligatorio">*</span></label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input class="form-control" id="mail" name="correo" type="text" placeholder="E-Mail" maxlength="40">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-xs-12 col-md-3">
                           		<label class="control-label"> Fecha nacimiento </label>
                            </div>
                            <div class="col-xs-4 col-md-2 col-lg-1">
                                <select class="form-control">
									<option> 1 </option>
								  	<option> 2 </option>
								  	<option> 3 </option>
								</select>
							</div>
							<div class="col-xs-4 col-md-2 col-lg-2">
                                <select class="form-control">
									<option> Enero </option>
								  	<option> Febrero </option>
								  	<option> Marzo </option>
								</select>
                            </div>
                            <div class="col-xs-4 col-md-2 col-lg-1">
                                <select class="form-control">
									<option> 1999 </option>
								  	<option> 2000 </option>
								  	<option> 2001 </option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-xs-12 col-md-3">
                           		<label class="control-label"> Nacionalidad </label>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <select class="form-control" name="nacionalidad">
									<option> Afghanistán </option>
								  	<option> Albania </option>
								  	<option> Alemania </option>
								  	<option> Andorra </option>
								  	<option> Angola </option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-xs-4 col-sm-3 col-md-3">
                           		<label class="control-label"> Sexo </label>
                            </div>
                            <div class="radio col-xs-4 col-sm-4 col-md-3 col-lg-1">
                                <label><input type="radio" name="sexo" id="opcion_1" value="h"> Hombre </label>
                            </div>
                            <div class="radio col-xs-4 col-sm-4 col-md-3 col-lg-1">
                                <label><input type="radio" name="sexo" id="opcion_2" value="m"> Mujer </label>
                            </div>
                        </div>
                        <div class="checkbox">
    						<label><input type="checkbox"> He leido y acepto las <a href="#">Condiciones de Uso</a> </label>
                       	</div>
                        <br>
                        <span> (<span class="obligatorio">*</span>) Campos obligatorios </span>
                        <br></br>
                        <div class="button">
                            <button type="submit" class="btn btn-success"> Ingresar </button>
                        </div>
                    </fieldset>
                </div>
