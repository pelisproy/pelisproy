<?php
class Buscador extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('buscador_model');
	}

	/*public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
		if ($this->input->post('busqueda')){
			$buscar=$this->input->post('busqueda');
			
		}
		else{
			$buscar='';
			
		}
		$data['actor']= $this->buscador_model->buscar($buscar);
		$this->load->view('buscar/buscar.php', $data);
	}*/
	public function index(){
		$this->load->view('templates/headers/headerPrin.php');
		$buscar=$this->input->post('busqueda');
		$busqueda=strtolower($buscar);
		$eleccion=$this->input->post('eleccion');
		if ($buscar!='' || $eleccion!='defecto'){
			if($eleccion=="pelicula"){
				$datos['buscadorPeli']=$this->buscador_model->buscarPeli($busqueda);
				$this->load->view('buscar/buscarPeli.php', $datos);
			}
			else if($eleccion=="actor"){
				$datos['buscadorActor']=$this->buscador_model->buscarActor($busqueda);
				$this->load->view('buscar/buscarActor.php', $datos);
			}
			else if($eleccion=="director"){
				$datos['buscadorDirector']=$this->buscador_model->buscarDirector($busqueda);
				$this->load->view('buscar/buscarDirector.php', $datos);
			}
		}
		else{
			$this->load->view('errors/errorBusqueda.php');			
		}
	}
}
?>