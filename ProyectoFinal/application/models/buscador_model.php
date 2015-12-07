<?php
class buscador_model extends CI_model{
	public function __construct(){
		parent::__construct();

	}
	/*public function buscar($bus){
		$this->db->like('id',$bus);
		$this->db->or_like('nombre',$bus);
		$this->db->or_like('apellidos',$bus);
		$this->db->or_like('fotoActor',$bus);
		$query=$this->db->get('actor');
		
		if($query->num_rows()!= 0) {

			return $query->result();
		} else {
			$this->db->or_like('nombre',$bus);
			$this->db->or_like('sinopsis',$bus);
			$this->db->or_like('caratula',$bus);
			$this->db->or_like('director',$bus);
			$query=$this->db->get('pelicula');
			if($query->num_rows()!= 0) {
			
				return $query->result();
			} else {
				return FALSE;
			}
		}
	}*/
	public function buscarPeli($dato){
		$this->db->like('nombre', $dato);
		$query=$this->db->get('pelicula');
		return $query->result_array();
	}
	public function buscarDirector($dato){
		$this->db->like('director', $dato);
		$query=$this->db->get('pelicula');
		return $query->result_array();
	}
	public function buscarActor($dato){
		$this->db->like('actor', $dato);
		$query=$this->db->get('pelicula');
		return $query->result_array();
	}
}