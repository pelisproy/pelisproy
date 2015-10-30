<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class FilmsController extends CI_Controller {
		public function __construct(){
			parent::__construct();
			//$this->load->helper('session');
			$this->load->helper('form');
			$this->load->model('films_model');
			//$this->load->model('comentario_model');
		}
		public function index(){
			//$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
		}
		public function cargarFormCrearFicha(){
			//$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('/films/crearFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÍA IR A LA CARPETA FORMULARIOS
		}
		public function crearFicha(){
			$nombre=$this->input->post('nombre');
			$sinopsis=$this->input->post('sinopsis');
			$caratula=$this->input->post('caratula');
			$anyo=$this->input->post('anyo');
			$director=$this->input->post('director');
			
			$this->films_model->crearFicha($nombre, $sinopsis, $caratula, $anyo, $director);
			echo "Registro correcto";
		}
		public function cargarFormModFicha(){
			$this->load->view('templates/headers/headerSec.php');
			$this->load->view('films/modificarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÍA IR A LA CARPETA FORMULARIOS
		}
		public function modificarFicha(){
			$this->load->view('templates/headers/headerSec.php');
			$this->load->view('films/modificarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÍA IR A LA CARPETA FORMULARIOS
			$this->films_model->modificarFicha();
		}
		public function cargarFormBorFicha(){
			$this->load->view('templates/headers/headerSec.php');
			$this->load->view('films/borrarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÍA IR A LA CARPETA FORMULARIOS
		}
		public function borrarFicha(){
			$this->films_model->borrarFicha();
		}
	}