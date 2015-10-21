<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<meta charset="UTF-8">
		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- JQuery -->
		<script src="<?=base_url();?>/assets/js/jquery-latest.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
		<style type="text/css">
			.container {
				float: left;
				width: 70%;
			}
			.row {
				margin: 1%;
			}
			label {
			float: left;
			}
			button[type="submit"] {
				font-weight: bold;
			}
			.correct {
				position: absolute;
				height: 30px;
				width: 110px;
				padding: 3px;
				border: 1px solid #036904;
				background-color: #84F16E;
				color: white;
				border-radius: 5px;
				font-weight: bold;
				text-align: center;
			}
			.incorrect {
				position: absolute;
				height: 30px;
				width: 110px;
				padding: 3px;
				border: 1px solid #9A0612;
				background-color: #F16E79;
				color: white;
				border-radius: 5px;
				font-weight: bold;
				text-align: center;
			}
			.obligatorio {
				color: red;
			}
		</style>
	</head>