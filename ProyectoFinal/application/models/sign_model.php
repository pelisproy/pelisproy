<?php
class sign_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $fnac, $nacionalidad, $avatar, $sexo, $tipo){
		$data=array(
				'nombre'=>$nombre,
				'apellidos'=>$apellidos,
				'nickname'=>$nickname,
				'password'=>$password,
				'correo'=>$mail,
				'fechaNacimiento'=>$fnac,
				'avatar'=>$avatar,
				'sexo'=>$sexo,
				'nacionalidad'=>$nacionalidad,
				'tipo'=>$tipo
		);
		return $this->db->insert('usuario', $data);
		if($data['error'] = $this->db->_error_message());
		return $data;
	}
}