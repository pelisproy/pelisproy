<?php
//CORRECTO
function registroCompleto(){
	return "Registro completado con éxito. Le hemos enviado un correo a su cuenta para que disponga siempre de su usuario y contraseña";
}
function registroComentario(){
	return "Comentario registrado con éxito";
}
function fichaCreadaCor(){
	return "Ficha registrada correctamente";
}
function fichaBorradaCor(){
	return "Ficha borrada correctamente";
}
function comentarioBorCor(){
	return "Comentario borrado con éxito";
}
function correctoContacto(){
	return "Mensaje enviado a la administración. En breve resolveremos su duda";
}

//INCORRECTO
function registroFallido(){
	return "Ha habido algún error a la hora de registrar un nuevo usuario.";
}
function comentarioFallido(){
	return "Ha ocurrido algún error al registrar el comentario";
}
function borrarComentarioFallido(){
	return "Ha ocurrido algún fallo al borrar el comentario";
}
function fichaFallido(){
	return "Ha ocurrido algún error al registrar la ficha. Revisa por favor los campos marcados como obligatorios";
}
function borrarFichaFallido(){
	return "Ha ocurrido algún error al borrar la ficha.";
}
function loginFallido(){
	return "No existe ese usuario en la base de datos o contraseña incorrecta";
}
?>