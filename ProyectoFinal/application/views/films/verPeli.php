<div class="fichaPelicula">
                <div class="datosSuperiores">
                    <div class="imagenPelicula">
                        <img src="<?= base_url(); ?>/assets/images/carrusel/3.jpg" alt="NombrePelícula"/>
                    </div>
                    <div class="principalInfo">
                        <p><b>Nombre: </b><span>Nombre_Película</span><i class="glyphicon glyphicon-pencil"></i></p>
                        <p><b>Fecha de estreno: </b><span>Estreno_Película</span><i class="glyphicon glyphicon-pencil"></i></p>
                        <p><b>Género: </b><span>Género_Película</span><i class="glyphicon glyphicon-pencil"></i></p>
                    </div>
                </div>
                <div class="col-xs-5 col-lg-4 reparto">
                    <span>Reparto:</span>
                    <ul>
                        <li><b>Director: </b></li>
                        <li>nombreDirector <a href="" class="pelisDirector">(Otras de sus películas)</a></li><br/>
                        <li><b>Actores: </b></li>
                        <li><a href="">nombreActor</a></li>
                        <li><a href="">nombreActor</a></li>
                        <li><a href="">nombreActor</a></li>
                    </ul>
                </div>
                <div class="col-xs-7 col-lg-4 sinopsis">
                    <span>Sinopsis:</span><i class="glyphicon glyphicon-pencil"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-xs-12 col-lg-4 trailer">
                    <span>Tráiler:</span><i class="glyphicon glyphicon-pencil"></i>
                    <iframe src="http://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
                </div>
            </div>
            <div class="comentariosPelicula">
                <div class="titulo"><span>Comentarios ():</span></div>
                <div class="comentario">
                    <i class="glyphicon glyphicon-remove"></i>
                    <p><a href="">Usuario</a> a las <span class="horaComentario">horaComentario</span>:</p><br/>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="comentario">
                    <i class="glyphicon glyphicon-remove"></i>
                    <p><a href="">Usuario</a> a las <span class="horaComentario">horaComentario</span>:</p><br/>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
                <div class="comentar">
                    <form action="" name="comentar">
                        <textarea placeholder="Deja tu comentario!"></textarea>
                        <input type="button" onclick="activarError()" value="Comentar">
                        <div class="error"><span>Tu comentario debe tener al menos 3 caracteres</span></div>
                    </form>
                </div>
            </div>



<!-- 

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

-->

