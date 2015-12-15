<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
function comprobarAcento($texto){
	$acentos=array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', ' ');
	$sinAcentos=array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U','_');
	$corregido=str_replace($acentos, $sinAcentos, $texto);
	return $corregido;
}
?>