<?php
class admin_model extends CI_model{
	public function __construct(){
		parent::__construct();

	}
	
	public function modificarFicha($id, $nombre, $apellidos, $nickname, $tipoUsuario, $biografia){
		$data = array(
				'nombre'=>$nombre,
				'apellidos'=>$apellidos,
				'nickname'=>$nickname,
				'tipoUsuario'=>$tipoUsuario,
				'biografia'=>$biografia
				
		);
	
		$this->db->where('id', $id);
		//$this->db->update('pelicula', $data);
		if (!$this->db->update('usuario', $data))
		{
			//return mysqli_errno($this->db->update('pelicula', $data));
			//return mysqli_error($this->db->update('pelicula', $data));
			return false;
		}
		return $data;
	}
	
	public function buscar($bus){
		$this->db->like('id',$bus);
		$this->db->or_like('nombre',$bus);
		$this->db->or_like('apellidos',$bus);
		$this->db->or_like('nickname',$bus);
		$this->db->or_like('password',$bus);
		$this->db->or_like('correo',$bus);
		$this->db->or_like('fechaNacimiento',$bus);
		$this->db->or_like('biografia',$bus);
		$this->db->or_like('avatar',$bus);
		$query=$this->db->get('usuario');
		
			return $query->result();
		}
		public function borrarUser($id){
			$this->db->where('id', $id);
			return $this->db->delete('usuario');
			/*if($data['error'] = $this->db->_error_message());
				return $data;*/
		}
}