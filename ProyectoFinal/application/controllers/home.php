<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('films_model');
			$this->load->model('user_model');
		}
		public function index(){
		$this->load->view('templates/headers/headerPrin.php');
		$datos['menu'] = menu_ul('home');
		$datos['nuevosPeli']=$this->films_model->listaNuevos();
		$datos['estrenos']=$this->films_model->listaEstrenos();
		$datos['nuevosUsu']=$this->user_model->listaReciente();
		$this->load->view('home/body.php',$datos);
		$this->load->view('templates/footers/foot.php');
	}
	function nuevoUsuario(){
		$this->load->view('templates/headers/headerPrin.php');
		$this->load->view('templates/formularios/signin.php');
		$this->load->view('templates/footers/foot.php');
	}
	public function login(){
		$this->load->view('templates/headers/headerPrin.php');
		$this->load->view('templates/formularios/login.php');
		$this->load->view('templates/footers/foot.php');
	}
}
?>