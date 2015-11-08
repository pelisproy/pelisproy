<?php
class Films_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function crearFicha($nombre, $sinopsis, $caratula, $anyo, $director){
		$data=array(
			'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'anyo'=>$anyo,
			'director'=>$director
		);
		return $this->db->insert('pelicula', $data);
		if($data['error'] = $this->db->_error_message());
		return $data;
	}
	public function modificarFicha($id, $nombre, $sinopsis, $caratula, $anyo, $director){
		$data = array(
            'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'anyo'=>$anyo,
			'director'=>$director
            );

		$this->db->where('id', $id);
		//$this->db->update('pelicula', $data);
		if (!$this->db->update('pelicula', $data))
		{
			//return mysqli_errno($this->db->update('pelicula', $data));
			//return mysqli_error($this->db->update('pelicula', $data));
			return false;
		}
		return $data;
	}
	public function borrarFicha($id){
		$this->db->where('id', $id);
		return $this->db->delete('pelicula');
		/*if($data['error'] = $this->db->_error_message());
		return $data;*/
	}
	public function mostrarTodasPeliculas(){
		$query=$this->db->get('pelicula');
		return $query->result_array();
	}
	public function mostrarPeliculaEspecifica($id){
	//CAMBIAR ID POR LO QUE SE VEA CONVENIENTE (TITULO, ACTOR, ETC) MIRAR SI SE PUEDE HACER EN UNA SOLA FUNCIÓN O EN VARIAS
		$this->db->select('id, titulo, descripcion, prioridad');
		$this->db->from('pelicula');
		$this->db->where('id', $id);
	}
}