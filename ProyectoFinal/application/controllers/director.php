<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Director extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('director_model');
	}
	public function listarDirector(){
		$this->load->view('templates/headers/headerPrin.php');
		$datos['directores']=$this->director_model->mostrarListaDirectores();
		$this->load->view('director/verDirector.php', $datos);
		$this->load->view('templates/footers/foot.php');
	}
}
?>