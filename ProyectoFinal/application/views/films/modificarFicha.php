
<form name="formulario" enctype="multipart/form-data" action="<?=base_url();?>/films/modificarFicha" method="post">
	<input type="text" name="id" value="<?= $_GET['id']; ?>" hidden /></br>
	Nombre:
	<input type="text" name="nombre" /><br/>
	Sinopsis:
	<input type="text" name="sinopsis" /><br/>
	Caratula:
	<input type="file" name="caratula" /><br/>
	Año:
	<input type="text" name="anyo" /><br/>
	Director:
	<input type="text" name="director" /><br/>
	<input type="submit" value="Subir"/>
</form>
