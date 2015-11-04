<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Film Proyect - Tu Web de Películas </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Jorge Abejer García & Juan José Galiana Expósito & Miguel Ángel Caracuel Revilla">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Language" content="Spanish">
    	<meta name="Copyright" content="JorgeAbejer & JuanJoséGaliana & MiguelÁngelCaracuel">
       <script src="<?=base_url();?>/assets/js/jquery-latest.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href=<?=base_url('/home/');?><img src="<?= base_url(); ?>/assets/images/logo.png" height="120" width="400"/></a>
				</div>
				<div class="botones">
					
					<?php if ($this->session->userdata('username')):?>
					<button class="identificarse"> <a href="<?=site_url('login/logout')?>">Desconectarse </a> </button>
					<button class="identificarse"> <a href="#"><?php echo $this->session->userdata('username')?> </a> </button>
					<?php else:?>
					<button class="identificarse"> <a href="<?= base_url(); ?>/login">Conectarse </a> </button>
					<button class="registrarse"> <a href="<?= base_url(); ?>/home/nuevoUsuario">Regístrate</a> </button>
					<?php endif;?>
					
				</div>
			</div>
			<div class="navegacion">
				<div class="menuResponsive">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
					<a href=<?=base_url('/home/');?><img src="<?= base_url(); ?>/assests/images/logo.png"></a>
				</div>
				<div class="menu">
					<?php echo menu_ul('home'); ?>
				</div>
				<div class="buscador">
					<input type="text" class="form-control" id="campoBusqueda" placeholder="Buscar...">
                	<select class="form-control">
                    	<option value="defecto" selected="selected"> Buscar por... </option>
                         <option value="pelicula"> Película </option>
                        <option value="actor"> Actor </option>
                        <option value="director"> Director </option>
                    </select>
					<button class="glyphicon glyphicon-search"> Buscar </button>
				</div>
			</div>