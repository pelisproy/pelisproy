<?php
class sign_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $dia, $mes, $anyo, $nacionalidad, $sexo){
		$data=array(
				'nombre'=>$nombre,
				'apellidos'=>$apellidos,
				'nickname'=>$nickname,
				'password'=>$password,
				'correo'=>$mail,
				'fechaNacimiento'=>"$anyo.-.$mes.-.$dia",
				'avatar'=>base_url('/assets/images/mr_x.gif'),
				'sexo'=>$sexo,
				'nacionalidad'=>$nacionalidad,
				'tipo'=>'usuario'
		);
		return $this->db->insert('usuario', $data);
		if($data['error'] = $this->db->_error_message());
		return $data;
	}
}