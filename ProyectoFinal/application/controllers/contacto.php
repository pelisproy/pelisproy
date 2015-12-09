<?php
class Contacto extends CI_Controller{
public function __construct(){
		parent::__construct();
	}

	public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('contacto/body.php');
			$this->load->view('templates/footers/foot.php');
	}
	public function enviarCorreo(){
		$this->load->library('email');
		$nombre=$this->input->post('nombre');
		$mail=$this->input->post('mail');
		$contenido=$this->input->post('contenido');
	
		$this->email->from('filmprojectdaw@gmail.com');
		$this->email->to($mail);
		$this->email->subject('Usuario Contacto'.$nombre);
		$this->email->message($contenido);
		$this->email->send();
		redirect('contacto');
	}
}
?>