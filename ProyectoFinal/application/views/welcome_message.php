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
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    	<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="index.html"><img src="<?= base_url(); ?>/assets/images/logo2.png" height="120" width="400"></a>
				</div>
				<div class="botones">
					<button onclick="" class="identificarse"> Identifícate </button>
					<button  class="registrarse"> <a href="<?= base_url(); ?>views/templates/formularios/signin.php">Regístrate</a> </button>
				</div>
			</div>
			<div class="navegacion">
				<div class="menuResponsive">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
					<a href="index.html"><img src="<?= base_url(); ?>/assests/images/logo2.png"></a>
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
			<div class="carrusel">
			</div>
			<div class="lista">
			</div>
			<div class="populares">
			</div>
		</div>
		<div class="footer">
			<a href="index.html"><img src="<?= base_url(); ?>/assets/images/logo2.png" height="80" width="250"></a>
			<div class="extra_info">
				<a href=""> ¿Quiénes somos? </a>
				<a href=""> Contáctanos </a>
			</div>
			<div class="copyright">
				<i> Copyright © 2015 Film Proyect. All rights reserved </i>
			</div>
			<div class="icons">
				<a href=""><img src=""></a>
				<a href=""><img src=""></a>
			</div>
		</div>
	</body>
</html>
