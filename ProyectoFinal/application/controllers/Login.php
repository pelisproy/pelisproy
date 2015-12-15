<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper('Mensajes_helper');
	}
	public function index() {
		// si la session no existe userdata ya nos develve false
		if ($this->session->userdata ( 'username' )) {
			redirect ( 'Home' );
		}
		
		if (isset ( $_POST ['password'] )) {
			$this->load->model ( 'usuario_model' );
			$variableUsuario = $this->usuario_model->login ( $_POST ['username'], $_POST ['password'] );
			// if($variableUsuario != null){
			if ($this->usuario_model->login ( $_POST ['username'], $_POST ['password'] ) != null) {
				$this->session->set_userdata ( 'username', $_POST ['username'] );
				// Control para ver que devuelve login
				// echo $this->usuario_model->login($_POST['username'],$_POST['password']);
				$this->session->set_userdata ( 'tipoUsuario', $variableUsuario );
				$this->session->set_userdata ( 'idUsuario', $this->usuario_model->idUsuario ( $_POST ['username'] ) );
// 				$this->session->set_userdata ( 'apellidos', $this->usuario_model->apellido ( $_POST ['username'] ) );
// 				$this->session->set_userdata ( 'fechaN', $this->usuario_model->fechaN ( $_POST ['username'] ) );
// 				$this->session->set_userdata ( 'sexo', $this->usuario_model->sexo ( $_POST ['username'] ) );
// 				$this->session->set_userdata ( 'nombre', $this->usuario_model->nombre ( $_POST ['username'] ) );
// 				$this->session->set_userdata ( 'biografia', $this->usuario_model->biografia ( $_POST ['username'] ) );
				redirect ( 'Home' );
			} else {
				$this->session->set_flashdata("loginFallido",loginFallido());
				redirect ( 'home/login' );
			}
		}
	}
	public function logout() {
		$this->session->sess_destroy ();
		redirect ( 'Home' );
	}
}
?>
	