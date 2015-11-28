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
				$this->load->view('correcto/correctoRegistro.php');
			}
			else{
				$this->load->view('errors/errorRegistrarUsuario.php');
			}
	}
}
?>