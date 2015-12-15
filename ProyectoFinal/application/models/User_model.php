<?php
class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function modificarUsuario($id, $nombre, $apellidos, $nickname, $password, $correo, $fechaNacimiento, $biografia, $avatar, $sexo, $fechaReg, $nacionalidad, $tipoUsuario){
		$data = array(
            'nombre'=>$nombre,
			'apellidos'=>$apellidos,
			'nickname'=>$nickname,
			'password'=>$password,
			'correo'=>$correo,
			'fechaNacimiento'=>$fechaNacimiento,
			'biografia'=>$biografia,
			'avatar'=>$avatar,
			'sexo'=>$sexo,
			'fechaReg'=>$fechaReg,
			'nacionalidad'=>$nacionalidad,
			'tipoUsuario'=>$tipoUsuario
            );

		$this->db->where('id', $id);
		if (!$this->db->update('usuario', $data)){
			return false;
		}
		return $data;
	}
	public function borrarUsuario($id){
		$this->db->where('id', $id);
		return $this->db->delete('usuario');
	}
	public function listaReciente(){
		$sentencia="SELECT nickname, avatar, id
				FROM usuario
				ORDER BY fechaReg DESC LIMIT 3";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
	public function buscaNick($nick){
		$this->db->like('nickname', $nick);
		$query=$this->db->get('usuario');
		if($query->num_rows()>0){
			return false;
		}
		else{
			return true;
		}
	}
}
?>