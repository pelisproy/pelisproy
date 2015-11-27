	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __construct(){
			parent::__construct();
	}
	
	public function index(){
		
//si la session no existe userdata ya nos develve false
	if ($this->session->userdata('username')){
		redirect('Home');
	}
		
		if(isset($_POST['password'])){
			$this->load->model('usuario_model');
			$variableUsuario = $this->usuario_model->login($_POST['username'],$_POST['password']);
			if($variableUsuario != null){
				$this->session->set_userdata('username', $_POST['username']);
				// Control para ver que devuelve login
				//echo $this->usuario_model->login($_POST['username'],$_POST['password']);
				$this->session->set_userdata('tipoUsuario', $variableUsuario);
				$this->session->set_userdata('idUsuario', $this->usuario_model->idUsuario($_POST['username']));
				redirect('Home');
			}
			else{
				redirect('login');
				echo "Dentro del else";
			}
		}	
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Home');
	}
}
?>
	