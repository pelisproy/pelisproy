<?php
class Films_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
public function crearFicha($nombre, $sinopsis, $caratula, $fechaEstreno, $registro, $trailer, $director, $idUsuario, $genero){
		$data=array(
			'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'fechaEstreno'=>$fechaEstreno,
			'fechaAgregado'=>$registro,
			'trailer'=>$trailer,
			'director'=>$director,
			'idUsuario'=>$idUsuario,
			'idGenero'=>$genero
		);
		return $this->db->insert('pelicula', $data);
	}
	public function modificarFicha($nombre, $sinopsis, $caratula, $fechaEstreno, $trailer, $director, $idUsuario, $genero){
		$data=array(
			'nombre'=>$nombre,
			'sinopsis'=>$sinopsis,
			'caratula'=>$caratula,
			'fechaEstreno'=>$fechaEstreno,
			'trailer'=>$trailer,
			'director'=>$director,
			'idUsuario'=>$idUsuario,
			'idGenero'=>$genero
		);
		return $this->db->insert('pelicula', $data);
		$this->db->where('id', $id);
		if (!$this->db->update('pelicula', $data)){
			return false;
		}
		return $data;
	}
	public function borrarFicha($id){
		$this->db->where('id', $id);
		return $this->db->delete('pelicula');
	}
	public function mostrarTodasPeliculas(){
		$query=$this->db->get('pelicula');
		return $query->result_array();
	}
	
	public function mostrarPeliculaEspecifica($id){
		$sentencia="SELECT nombre, sinopsis, caratula, fechaestreno, trailer, director, idUsuario
		FROM PELICULA
		WHERE id=$id";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
	
	public function mostrarComentarios($idPelicula, $idUsuario){
		$sentencia="SELECT C.texto, U.nombre, U.avatar, c.idPelicula
		FROM USUARIO U, COMENTARIO C
		WHERE C.IDPELICULA=$idPelicula AND U.ID=C.idUsuario
		ORDER BY C.fechaComentario";
		$query=$this->db->query($sentencia);
		return $query->result_array();
	}
	
	public function nuevoComentario($mensaje, $dia, $idPeli, $idUser){
		$data=array(
				'texto'=>$mensaje,
				'fechaComentario'=>$dia,
				'idPelicula'=>$idPeli,
				'idUsuario'=>$idUser
		);
		$this->db->where('idPelicula', $idPeli);
		$this->db->where('idUsuario', $idUser);
		return $this->db->insert('comentario', $data);
	}
	public function listaNuevos(){
		$sentencia="SELECT nombre, caratula, id
		FROM pelicula
		ORDER BY fechaAgregado DESC LIMIT 3";
			$query=$this->db->query($sentencia);
			return $query->result_array();
	}
	public function listaEstrenos(){
		$sentencia="SELECT nombre, caratula, id
		FROM pelicula
		ORDER BY fechaEstreno DESC LIMIT 3";
			$query=$this->db->query($sentencia);
			return $query->result_array();
	}
}