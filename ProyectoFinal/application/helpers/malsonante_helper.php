<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function comprobar($texto){
	$palabras=array('gilipollas', 'mierda', 'puta', 'coño', 'polla', 'cabrón', 'cabron', 'marica', 'maricón', 'maricon');
	$corregido=str_replace($palabras, "***", $texto);
	return $corregido;
}
?>