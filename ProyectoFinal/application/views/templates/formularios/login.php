<div class="container">
<form class="form-horizontal" action="<?=base_url();?>login" method="post" id="login">
            	<div class="row">
                    <fieldset>
                        <legend> Indentifícate </legend>
                        <div class="form-group">
                            <div class="col-xs-3">
                                <label class="control-label"> Nick: </label>
                            </div>
                            <div class="col-xs-9 col-sm-5">
                                <input class="form-control" id="nick" name="username" type="text" placeholder="Nick" maxlength="20">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-xs-3">
                           		<label class="control-label"> Contraseña: </label>
                            </div>
                            <div class=" col-xs-9 col-sm-5">
                                <input class="form-control" id="contra" name="password" type="password" placeholder="Contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="error"><span>Usuario o contraseña incorrectos</span></div>
                        <br/>
                        <div class="link form-group col-xs-12">
                            <label><a href=""> Olvidé mi contraseña </a></label>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-primary"> Acceder </button>
                        </div>
                    </fieldset>
                </div>
			</form>
</div>