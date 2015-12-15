<?php
class Director_model extends CI_model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function mostrarListaDirectores(){		
		$sentencia="SELECT nombre, caratula, director, id, idUsuario
				FROM pelicula
				ORDER BY DIRECTOR";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
}
?>