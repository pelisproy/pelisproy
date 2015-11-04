<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
public function __construct()
{
	
		parent::__construct();
		
	}
	public function index()
	{
//si la session no existe userdata ya nos develve false
	if ($this->session->userdata('username')){
		redirect('welcome');
		
	}
		
	if(isset($_POST['password'])){
		$this->load->model('usuario_model');
		
		
	if($this->usuario_model->login($_POST['username'],$_POST['password'])){
		$this->session->set_userdata('username', $_POST['username']);
		redirect('welcome');
	
	}else{
		redirect('login');
	}
	}
		$this->load->view('templates/formularios/login.php');
			
	}
	public function logout()
	
	{

		$this->session->sess_destroy();
		redirect('welcome');
	}
	}

