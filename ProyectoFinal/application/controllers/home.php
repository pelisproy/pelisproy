<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {
		public function index(){
		$this->load->view('templates/headers/headerPrin.php');
		$data['menu'] = menu_ul('home');
		$this->load->view('home/body',$data);
		$this->load->view('templates/footers/foot.php');
		
	}
	function nuevoUsuario(){
		$this->load->view('templates/headers/headerForm.php');
		$this->load->view('templates/formularios/signin.php');
	}		
}