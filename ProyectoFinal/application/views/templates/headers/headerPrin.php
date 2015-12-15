<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico"/>
		<title> Film Project - Tu Web de Películas </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Jorge Abejer García & Juan José Galiana Expósito & Miguel Ángel Caracuel Revilla">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Language" content="Spanish">
    	<meta name="Copyright" content="JorgeAbejer & JuanJoséGaliana & MiguelÁngelCaracuel">
    	<!-- JQuery -->
       	<script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery-latest.js"></script>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrapCSS/css/bootstrap.css"/>
		<!-- Bootstrap Validator -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrapValidator.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrapValidator.min.css">
		<!-- Bootstrap DateTimePicker -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/moment.min.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap-datetimepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap-datetimepicker.min.css">
		
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/cargaWeb.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/menuResponsive.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/buscador.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/crearPeli.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/signin.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/contacto.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/perfilUsuarios.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/fichaPeli.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/busquedaDirector.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/busquedaActor.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/busquedaGenero.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/cabeceraInvitado.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/cabeceraUsuario.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/usuarioInvitado.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/contacto.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/footer.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/crearPeli.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/login.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/signin.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/quienesSomos.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/perfilUsuarios.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/condicionesUso.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/loading.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/iconosAdministracion.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/fichaPeli.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/busquedaPeli.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/busquedaDirector.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/busquedaActor.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/busquedaGenero.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/agregarPelicula.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/administrar.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/errorBusqueda.css">
	</head>
	<body>
		<div class="loading">
			<img src="<?= base_url(); ?>/assets/images/loading.gif" height="80" width="80" display="none"/>
		</div>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="<?=base_url('/home/');?>"><img src="<?= base_url(); ?>/assets/images/logo.png" alt="Film Project - Tu Web de Películas"></a>
				</div>
				
				<?php if ($this->session->userdata('username')):?>
					
				<div class="accionUsuario">
						<p class="bienvenida">Bienvenido <span><?php echo $this->session->userdata('username');?></span></p>
						
					<div class="boton">
						<button type="" class="dropdown-toggle" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-user"></span>
						</button>
						<ul class="dropdown-menu">
						<?php if ($this->session->userdata('tipoUsuario') != null && $this->session->userdata('tipoUsuario') == 2):?>
							<li><a href="<?= base_url();?>admin/ad"> Administrar </a></li>
							<li role="separator" class="divider"></li>
							<?php endif;?>
							<li><a href="<?= base_url();?>perfil"> Editar Perfil </a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?=site_url('login/logout')?>"> Desconectar </a></li>
						</ul>
					</div>
				</div>
				<?php else:?>
				<div class="botones">
					<a href="<?= base_url(); ?>home/login"><button class="identificarse">Identifícate</button></a>
					<a href="<?= base_url(); ?>home/nuevoUsuario"><button class="registrarse">Regístrate</button></a> 
				</div>	
				<?php endif;?>
			
					
				</div>
			<div class="navegacion">
				<div class="menuResponsive">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
					<a href="<?=base_url('/home/');?>"><img src="<?= base_url(); ?>/assets/images/logo.png" alt="Film Project - Tu Web de Películas"/></a>
				</div>
				<div class="menu">
					<?php echo menu_ul('home'); ?>
				</div>
				<form action="<?= base_url(); ?>buscador" method="post">
					<div class="buscador">
						<div>
							<input type="text" class="form-control" id="campoBusqueda" name="busqueda" placeholder="Buscar..."/>
				        	<select class="form-control" name="eleccion">
				            	<option value="defecto" selected="selected"> Buscar por... </option>
				                <option value="pelicula"> Película </option>
				                <option value="actor"> Actor </option>
				                <option value="director"> Director </option>
				                <?php if($this->session->userdata('tipoUsuario') != null && $this->session->userdata('tipoUsuario') == 2):?>
				                <option value="usuario"> Usuario </option>
				                <?php endif;?>
				            </select>
				            <button class="btn btn-success"> Buscar </button>
				        </div>
						<button class="glyphicon glyphicon-search"> Buscar </button>
					</div>
				</form>
			</div>
<script>
	$( document ).ready(function() {
		$('.glyphicon-search').on('click', function(e) {
		    if($(window).width() < 1117) {
		    	$(this).parent('div').parent('form').attr('action', '<?= base_url(); ?>buscador').attr('method', 'POST');
		    	e.preventDefault();
		        $('.buscador').children('div').addClass('buscadorResponsive');
		        if($('.buscador').children('div').css('display') == 'none') {
		            $('.buscadorResponsive').css('display', 'block').children('.btn-success').css('display', 'block');
		            $('.buscadorResponsive').stop(true, true).animate({left: '0'}, 1000);
		        } else {
		            $('.buscadorResponsive').stop(true, true).animate({left: '-210px'}, 1000).fadeOut(0);
		        }
		    }
		});
	});
</script>
			