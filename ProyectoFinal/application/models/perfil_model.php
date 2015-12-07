<?php
class perfil_model extends CI_model{
	public function __construct(){
		parent::__construct();

	}
	
	public function modificarFicha($id, $nombre, $apellidos, $nickname){
		$data = array(
				'nombre'=>$nombre,
				'apellidos'=>$apellidos,
				'nickname'=>$nickname
				
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
	
	public function listarDatosPerfil($id) {
		$sentencia="SELECT nombre, apellidos, fechaNacimiento, biografia, sexo, avatar
		FROM usuario
		WHERE id=$id";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
	
	public function actualizarDatosPerfil($idUser, $nombre, $nombreCampo) {
		$data = array(
				$nombre=>$nombreCampo,
		);
		
		$this->db->where('id', $idUser);
		if (!$this->db->update('usuario', $data)) {
			return false;
		}
	}
	
	public function listarComentarios($id) {
		$sentencia="SELECT c.texto, c.idPelicula, c.idUsuario, p.nombre
		FROM comentario c, pelicula p
		WHERE c.idUsuario=$id AND c.idPelicula=p.id ORDER BY (c.fechaComentario) ASC";
		$query=$this->db->query($sentencia);
		
		return $query->result_array();

		
		
		
	}
	
	
	public function listarPeliculas($id) {
		$sentencia="SELECT nombre, caratula 
		FROM pelicula 
		WHERE idUsuario=$id ORDER BY (fechaAgregado) ASC";
		$query=$this->db->query($sentencia);
	
		return $query->result_array();
	
	
	
	
	}	
}
