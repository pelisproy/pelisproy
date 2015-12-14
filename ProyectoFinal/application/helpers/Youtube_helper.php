<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function comprobar($texto){
	$corregido=str_replace("/watch?v=", "/embed/", $texto);
	return $corregido;
}
?>