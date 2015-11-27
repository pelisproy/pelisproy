<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Genero extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('genero_model');
	}
	public function listarPorGenero(){
		$this->load->view('templates/headers/headerPrin.php');
		$datos['genero']=$this->genero_model->mostrarListaGenero();
		$this->load->view('generos/verPorGenero.php', $datos);
		$this->load->view('templates/footers/foot.php');
	}
	
}
?>