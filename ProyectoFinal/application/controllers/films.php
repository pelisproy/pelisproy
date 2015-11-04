<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Films extends CI_Controller {
		public function __construct(){
			parent::__construct();
			//$this->load->helper('session');
			$this->load->helper('form');
			$this->load->model('films_model');
			//$this->load->model('comentario_model');
		}
		public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
		}
		public function cargarFormCrearFicha(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('/films/crearFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÍA IR A LA CARPETA FORMULARIOS
		}
		public function crearFicha(){
			//PARTE DE SUBIR LA IMAGEN
			$nombre_imagen=$_FILES['caratula']['name'];
			$config['upload_path']=base_url('/assets/images/films/');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2000';
			//$config['max_width'] = '2024';
			//$config['max_height'] = '2008';
			$config['file_image']=$nombre_imagen;
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			//PARTE DE SUBIR LOS OTROS DATOS
			$nombre=$this->input->post('nombre');
			$sinopsis=$this->input->post('sinopsis');
			//$caratula=$this->input->post('caratula');
			$caratula=$config['file_image'];
			$anyo=$this->input->post('anyo');
			$director=$this->input->post('director');
			
			$this->films_model->crearFicha($nombre, $sinopsis, $caratula, $anyo, $director);
			echo "Registro correcto";
		}
		public function listarPelis(){
			$this->load->view('templates/headers/headerPrin.php');
			$datos['contenido']=$this->films_model->mostrarTodasPeliculas();
			$this->load->view('films/listaFicha.php', $datos);
			$this->load->view('templates/footers/foot.php');
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
			$id=$this->uri->segment(3);
			$this->films_model->borrarFicha($id);
		}
	}