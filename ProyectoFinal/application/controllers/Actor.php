<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Actor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('actor_model');
	}
	public function listarPorActor(){
		$this->load->view('templates/headers/headerPrin.php');
		$datos['actores']=$this->actor_model->mostrarListaActores();
		$this->load->view('actor/verActor.php', $datos);
		$this->load->view('templates/footers/foot.php');
	}
}