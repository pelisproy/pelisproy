<?php
class Registro extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('sign_model');
	}
	public function registro_usuario(){
		$this->load->helper('form');
		$this->load->library('form_validation');
			$nombre=$this->input->post('nombre');
			$apellidos=$this->input->post('apellidos');
			$nickname=$this->input->post('nickname');
			$password=$this->input->post('password');
			$mail=$this->input->post('mail');
			$fnac=$this->input->post('fnac');
			$nacionalidad=$this->input->post('nacionalidad');
			$avatar=$this->input->post('avatar');
			$sexo=$this->input->post('sexo');
			$tipo=$this->input->post('tipo');
			$this->sign_model->registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $fnac, $avatar, $nacionalidad, $tipo, $sexo);
	}
}