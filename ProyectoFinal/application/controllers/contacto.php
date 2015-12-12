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
		$configGmail = null;
		
		if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
		
			$configGmail = array (
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_port' => 465,
					'smtp_user' => 'filmprojectdaw@gmail.com',
					'smtp_pass' => 'FilmProject482-',
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
			);
		} else {
			$configGmail = array (
					// 'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com', // 'ssl://smtp.googlemail.com'//ssl://smtp.gmail.com
					'smtp_port' => 587, // 465//25
					'smtp_user' => 'filmprojectdaw@gmail.com',
					'smtp_pass' => 'FilmProject482-',
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n",
					'validation' => TRUE,
					'smtp_crypto' => 'tls',
					'wordwrap' => TRUE
			);
		}
		
		$this->load->library('email');
		$nombre=$this->input->post('nombre');
		$mail=$this->input->post('mail');
		$contenido=$this->input->post('contenido');
		
		$this->email->initialize($configGmail);
		$this->email->from($mail);
		$this->email->to('filmprojectdaw@gmail.com');
		$this->email->subject('Contacto '.$nombre);
		$this->email->message($contenido);
		$this->email->send();
		redirect('contacto');
		echo "<script>alert(\"Bien\")</script>";
	}
}
?>