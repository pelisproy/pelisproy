<?php
class Actor_model extends CI_model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function mostrarListaActores(){		
		$sentencia="SELECT nombre, caratula, director, actor, id
				FROM pelicula
				ORDER BY ACTOR";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
}
?>