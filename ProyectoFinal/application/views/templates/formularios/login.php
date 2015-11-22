<div class="container">
<form class="form-horizontal" action="<?=base_url();?>/login" method="post" id="login">
            	<div class="row">
                    <fieldset>
                        <legend> Indentifícate </legend>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label"> Nick: </label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" id="nick" type="text" placeholder="Nick" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-sm-2">
                           		<label class="control-label"> Contraseña: </label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" id="contra" type="password" placeholder="Contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="link form-group col-lg-12">
                            <label><a href=""> Olvidé mi contraseña </a></label>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-primary"> Acceder </button>
                        </div>
                    </fieldset>
                </div>
			</form>
</div>
<a href="<?=base_url();?>/home/">Volver atrás</a>