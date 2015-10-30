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
	public function modificarFicha($id){
		$data = array(
            'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'anyo'=>$anyo,
			'director'=>$director
            );

		return $this->db->where('id', $id);
		return $this->db->update('pelicula', $data); 
		if($data['error'] = $this->db->_error_message());
		return $data;
	}
	public function borrarFicha($id){
		return $this->db->where('id', $id);
		return $this->db->delete('pelicula');
		if($data['error'] = $this->db->_error_message());
		return $data;
	}
	public function mostrarTodasPeliculas(){
		$this->db->select('nombre, sinopsis, caratula, anyo, director');
		$this->db->from('pelicula');
	}
	public function mostrarPeliculaEspecifica($id){
	//CAMBIAR ID POR LO QUE SE VEA CONVENIENTE (TITULO, ACTOR, ETC) MIRAR SI SE PUEDE HACER EN UNA SOLA FUNCIÓN O EN VARIAS
		$this->db->select('id, titulo, descripcion, prioridad');
		$this->db->from('pelicula');
		$this->db->where('id', $id);
	}
}