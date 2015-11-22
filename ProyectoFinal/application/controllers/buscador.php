<?php
class Buscador extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
			$this->load->model('buscador_model');
		if ($this->input->post('busqueda')){
			$buscar= $this->input->post('busqueda');
			
		}
		else{
			$buscar='';
			
		}
		$data['actor']= $this->buscador_model->buscar($buscar);
		$this->load->view('buscar/buscar.php', $data);
	}
}
?>