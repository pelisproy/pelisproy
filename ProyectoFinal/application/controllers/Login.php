<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper('Mensajes_helper');
	}
	public function index() {
		if ($this->session->userdata ( 'username' )) {
			redirect ( 'Home' );
		}
		
		if (isset ( $_POST ['password'] )) {
			$this->load->model ( 'usuario_model' );
			$variableUsuario = $this->usuario_model->login ( $_POST ['username'], $_POST ['password'] );
			if ($this->usuario_model->login ( $_POST ['username'], $_POST ['password'] ) != null) {
				$this->session->set_userdata ( 'username', $_POST ['username'] );
				$this->session->set_userdata ( 'tipoUsuario', $variableUsuario );
				$this->session->set_userdata ( 'idUsuario', $this->usuario_model->idUsuario ( $_POST ['username'] ) );
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
	