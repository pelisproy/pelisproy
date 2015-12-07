<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	
	public $variable;
	
	public function __construct(){
		parent ::__construct();
		
	}
	
	public function login($username,$password){
		$this->db->where('nickname',$username);
		$this->db->where('password',md5($password));
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$tipoUsuario = null;
			foreach ($v -> result_array() as $resultado) {
				$tipoUsuario = $resultado['tipoUsuario'];
			}
				return $tipoUsuario;
		}
		else{
			return null;
		}
	}
	
	public function idUsuario($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$tipoUsuario = null;
			foreach ($v -> result_array() as $resultado) {
				$idUsuario = $resultado['id'];
			}
				return $idUsuario;
		}
		else{
			return null;
		}
		
	}
	
	public function apellido($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$apellidos = null;
			foreach ($v -> result_array() as $resultado) {
				$apellidos = $resultado['apellidos'];
			}
			return $apellidos;
		}
		else{
			return null;
		}
	
	}
	
	
	public function fechaN($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$fechaN = null;
			foreach ($v -> result_array() as $resultado) {
				$fechaN = $resultado['fechaNacimiento'];
			}
			return $fechaN;
		}
		else{
			return null;
		}
	}
	
	public function sexo($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$sexo = null;
			foreach ($v -> result_array() as $resultado) {
				$sexo = $resultado['sexo'];
			}
			return $sexo;
		}
		else{
			return null;
		}
	}
	
	public function nombre($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$nombre = null;
			foreach ($v -> result_array() as $resultado) {
				$nombre = $resultado['nombre'];
			}
			return $nombre;
		}
		else{
			return null;
		}
	}
	
	public function biografia($username) {
		$this->db->where('nickname',$username);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0){
			$nombre = null;
			foreach ($v -> result_array() as $resultado) {
				$nombre = $resultado['nombre'];
			}
			return $nombre;
		}
		else{
			return null;
		}
	}
}