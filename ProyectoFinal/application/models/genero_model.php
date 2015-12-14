<?php
class Genero_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function anadirGenero($nombre){
		$data=array(
		'nombreGenero'=>$nombre
		);
		return $this->db->insert('genero', $data);
	}
	public function modificarGenero($id, $nombre){
		$data=array(
		'nombreGenero'=>$nombre
		);
		$this->db->where('id', $id);
		return $this->db->update('genero', $data);
	}
	public function borrarGenero($id){
		$this->db->where('id', $id);
		return $this->db->delete('genero');
	}
	public function mostrarListaGenero(){
		$sentencia="SELECT nombre, caratula, p.id, nombreGenero, idUsuario
				FROM pelicula p, genero g
				WHERE p.idGenero=g.id
				ORDER BY NOMBREGENERO";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
	public function seleccionarGenero(){
		$query=$this->db->get('genero');
		return $query->result_array();
	}
	public function getGenero($dato){
		$this->db->select('*');
		$this->db->like('nombreGenero', $dato);
		$query = $this->db->get('genero');
			if($query->num_rows > 0){
				foreach ($query->result_array() as $row){
					$row_set[] = htmlentities(stripslashes($row['nombreGenero'])); //build an array
				}
				echo json_encode($row_set); //format the array into json data
			}
	}
}