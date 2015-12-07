<?php
class Comentario_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function mostrarComentarios($idPelicula, $idUsuario){
		$sentencia="SELECT C.texto, c.idPelicula, C.fechaComentario, C.id, c.idUsuario, u.nickname
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
	
	public function modificarComentario($id){
		$this->db->where('id', $id);
		$datos=$this->db->get('comentario');
		return $datos;
		exit();
		$data=array(
		'texto'=>$texto
		);
		
		return $this->db->update('comentario', $data);
	}
	public function borrarComentario($id){
		$this->db->where('id', $id);
		return $this->db->delete('comentario');
	}
}