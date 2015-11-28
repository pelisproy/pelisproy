<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico"/>
		<title> Film Proyect - Tu Web de Películas </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Jorge Abejer García & Juan José Galiana Expósito & Miguel Ángel Caracuel Revilla">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Language" content="Spanish">
    	<meta name="Copyright" content="JorgeAbejer & JuanJoséGaliana & MiguelÁngelCaracuel">
    	<!-- JQuery -->
       	<script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery-latest.js"></script>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<!-- Bootstrap Datepicker -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrapValidator.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrapValidator.min.css">
		<!-- Bootstrap Validator -->
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap-datetimepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap-datetimepicker.min.css">
		
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/cargaWeb.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/menuResponsive.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/buscadorSelect.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/usuarioInvitado.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/crearPeli.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/signin.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>/assets/js/perfilUsuarios.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/cabeceraInvitado.css">
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
				<div class="botones">	
					<?php if ($this->session->userdata('username')):?>
					 <a href="<?=site_url('login/logout')?>"><button class="identificarse">Desconectarse</button></a> 
					 <a href="#"><button class="identificarse"><?php echo $this->session->userdata('username')?></button></a> 
					 <a href="#"><button class="identificarse"><?php echo $this->session->userdata('idUsuario')?></button></a> 
					<!-- Ejemplo botón sólo visible por un administrador -->
					<?php if ($this->session->userdata('tipoUsuario') != null && $this->session->userdata('tipoUsuario') == 0):?>
					<a href="#"><button class="identificarse"><?php echo "Bienvenido Administrador: " . $this->session->userdata('username')?></button></a> 
					<?php endif;?>
					<!-- Fin de ejemplo -->
					
					<?php else:?>
					<a href="<?= base_url(); ?>home/login"><button class="identificarse">Identifícate</button></a>
					<a href="<?= base_url(); ?>home/nuevoUsuario"><button class="registrarse">Regístrate</button></a> 
					<?php endif;?>
				</div>
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
						<input type="text" class="form-control" id="campoBusqueda" placeholder="Buscar..."/>
                		<select class="form-control">
                    		<option value="defecto" selected="selected"> Buscar por... </option>
                         	<option value="pelicula"> Película </option>
                        	<option value="actor"> Actor </option>
                        	<option value="director"> Director </option>
                        	<option value="usuario"> Usuario </option>
                    	</select>
						<button class="glyphicon glyphicon-search"> Buscar </button>
					</div>
				</form>
			</div>