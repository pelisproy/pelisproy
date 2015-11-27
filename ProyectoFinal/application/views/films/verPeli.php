<script 
<?php 
if($contenido!=null){
foreach ($contenido as $pelicula):?>
<table border="0">
<tr>
<td>
<?php 
echo $pelicula['nombre']."<br/>";
?>
<img src="<?=base_url("/assets/images/films/".$pelicula['caratula']);?>"/><br/>
</td>
<td>
<b>SINOPSIS:</b>
<?php echo $pelicula['sinopsis'];?>
</td>
<td>
<b>TRAILER:</b>
<object width="640" height="390">
  <param name="movie"
         value="<?=$pelicula['trailer']?>?version=3&autoplay=0"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="<?=$pelicula['trailer']?>?version=3&autoplay=0"
         type="application/x-shockwave-flash"
         allowscriptaccess="always"
         width="640" height="390"></embed>
</object>
</td>
</tr>
</table>
<?php endforeach;
}
else{
	echo "No has seleccionado película";
}
?>