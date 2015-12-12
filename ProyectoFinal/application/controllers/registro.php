<?php
class Registro extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model('sign_model');
		$this->load->model('user_model');
	}
	public function buscaNick(){
		if($this->input->is_ajax_request()){
			$nick=$this->input->post('nickname');
			$bien=$this->user_model->buscaNick($nick);
			echo $bien;
		}
	}
	public function registro_usuario(){
			$nombre=$this->input->post('nombre');
			$apellidos=$this->input->post('apellidos');
			$nickname=$this->input->post('nickname');
			$password=$this->input->post('password');
			$mail=$this->input->post('correo');
			$fechaNacimiento=$this->input->post('datetimepickerNacimiento');
			$nacionalidad=$this->input->post('nacionalidad');
			$sexo=$this->input->post('sexo');
			$fechaReg=date("Y-m-d");
			$bien=$this->sign_model->registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $fechaNacimiento, $nacionalidad, $sexo, $fechaReg);
			if($bien){
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
				$this->email->initialize($configGmail);
				$this->email->from('filmprojectdaw@gmail.com');
				$this->email->to($mail);
				$this->email->subject('Bienvenido a FilmProject');
				$this->email->message('Hola <b>'.$nickname.'</b><br/>Te damos la bienvenida a FilmProject, tu web de películas. <br/>Tu <b>usuario</b> es '.$nickname.' y tu <b>contraseña</b> es '.$password.'<br/>Si tienes alguna duda, no dudes en mandar un correo a los administradores');
				$this->email->send();
				//$this->load->view('correcto/correctoRegistro.php');
				echo $mail;
				redirect('registro');
			}
			else{
				$this->load->view('errors/errorRegistrarUsuario.php');
			}
	}
}
?>