<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/headers/headerPrin.php');
		$data['menu'] = menu_ul('home');
		$this->load->view('welcome_message',$data);
		$this->load->view('templates/footers/foot.php');
		
	}
	function nuevoUsuario(){
		$this->load->view('templates/headers/headerForm.php');
		$this->load->view('templates/formularios/signin.php');
	}
}
