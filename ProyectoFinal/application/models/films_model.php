<?php
class Films_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
public function crearFicha($nombre, $sinopsis, $caratula, $fechaEstreno, $registro, $trailer, $director, $actor, $idUsuario, $genero){
		$data=array(
			'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'fechaEstreno'=>$fechaEstreno,
			'fechaAgregado'=>$registro,
			'trailer'=>$trailer,
			'director'=>$director,
			'actor'=>$actor,
			'idUsuario'=>$idUsuario,
			'idGenero'=>$genero
		);
		return $this->db->insert('pelicula', $data);
	}
	public function actualizarDatosPeli($idPeli, $nombre, $nombreCampo){
		$data = array(
				$nombre=>$nombreCampo,
		);
	
		$this->db->where('id', $idPeli);
		if (!$this->db->update('pelicula', $data)) {
			return false;
		}
	}
	public function borrarFicha($id) {
		$this->db->where ( 'id', $id );
		return $this->db->delete ( 'pelicula' );
	}
	public function mostrarTodasPeliculas() {
		$query = $this->db->get ( 'pelicula' );
		return $query->result_array ();
	}
	public function mostrarPeliculaEspecifica($id) {
		$sentencia = "SELECT nombre, sinopsis, caratula, fechaestreno, trailer, director, actor, idUsuario, idGenero, nombreGenero 
		FROM PELICULA p, GENERO g 
		WHERE p.id=$id AND g.id=idGenero";
		
		$query = $this->db->query ( $sentencia );
		return $query->result_array ();
	}
	public function listaNuevos() {
		$sentencia = "SELECT nombre, caratula, id
		FROM pelicula
		ORDER BY fechaAgregado DESC LIMIT 3";
		$query = $this->db->query ( $sentencia );
		return $query->result_array ();
	}
	public function listaEstrenos() {
		$sentencia = "SELECT nombre, caratula, id
		FROM pelicula
		ORDER BY fechaEstreno DESC LIMIT 3";
		$query = $this->db->query ( $sentencia );
		return $query->result_array ();
	}
}