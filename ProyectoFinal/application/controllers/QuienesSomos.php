<?php
class QuienesSomos extends CI_Controller{
public function __construct(){
		parent::__construct();
	}

	public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('quienesSomos/body.php');
			$this->load->view('templates/footers/foot.php');
	}
}
?>