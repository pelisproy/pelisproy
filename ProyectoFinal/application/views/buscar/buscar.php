

<?php foreach ($actor as $datos){
	if (isset($datos->apellidos)) {
?>
<table>
<head>
<tr>

<td>nombre</td>
<td>apellido</td>
<td>foto</td>

</tr>



</head>
<body>
<tr>


<td><?php echo $datos->nombre;?></td>
<td><?php echo $datos->apellidos;?></td>
<td><?php echo $datos->fotoActor;?></td>
</tr>

</body>
</table>
<?php 
	} else {
	foreach ($actor as $dato){
?>
<table>
<head>
<tr>

<td>nombre</td>
<td>sinopsis</td>
<td>caratula</td>
<td>director</td>

</tr>



</head>
<body>
<tr>


<td><?php echo $dato->nombre;?></td>
<td><?php echo $dato->sinopsis;?></td>
<td><?php echo $dato->caratula;?></td>
<td><?php echo $datos->director;?></td>
</tr>

</body>
</table>
<?php
	}
}
}
// 	endforeach
?>


