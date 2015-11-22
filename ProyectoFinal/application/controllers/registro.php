<?php
class Registro extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model('sign_model');
	}
	public function registro_usuario(){
			$nombre=$this->input->post('nombre');
			$apellidos=$this->input->post('apellidos');
			$nickname=$this->input->post('nickname');
			$password=$this->input->post('password');
			$mail=$this->input->post('correo');
			$dia=$this->input->post('dia');
			$mes=$this->input->post('mes');
			$anyo=$this->input->post('anyo');
			$nacionalidad=$this->input->post('nacionalidad');
			$sexo=$this->input->post('sexo');
			$this->sign_model->registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $dia, $mes, $anyo, $nacionalidad, $sexo);
			echo "Registro correcto";
		//}
	}
}
?>