<?php
class buscador_model extends CI_model{
	public function __construct(){
		parent::__construct();

	}
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