<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Films extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('films_model');
			$this->load->model('genero_model');
			$this->load->model('comentario_model');
		}
		public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
		}
		public function cargarFormCrearFicha(){
		//if($this->session->userdata('username')){
				$datos['genero']=$this->genero_model->seleccionarGenero();
				$this->load->view('templates/headers/headerPrin.php', $datos);
				$this->load->view('films/crearFicha.php');
				$this->load->view('templates/footers/foot.php');
		//	}
			//else{
				//$this->load->view('errors/errorCrearFicha.php');
			//}
		}
		public function crearFicha(){
			$usuario=$this->session->userdata('username');
			$idUser=$this->session->userdata('idUsuario');
				//PARTE DE SUBIR LA IMAGEN
				$nombreImagen=$_FILES['caratula']['name'];
				$config['max_size']=1000;
				$config['quality']='90%';
				$config['upload_path']='./assets/images/films/';
				$config['allowed_types']='gif|jpg|png';
				$config['file_name']=$nombreImagen;
				$this->load->library('upload', $config);
				$bien=$this->upload->do_upload('caratula');
				if($bien){
					$nombre=$this->input->post('nombre');
					$sinopsis=$this->input->post('sinopsis');
					$caratula=$nombreImagen;
					$fechaEstreno=$this->input->post('datetimepicker');
					$reg=date("Y-m-d");
					$trailer=$this->input->post('trailer');
					$director=$this->input->post('director');
					$idGenero=$this->input->post('genero');
					$genero;
					foreach($idGenero as $k=>$v){
						$genero=$v;
					}
					$dato=$this->films_model->crearFicha($nombre, $sinopsis, $caratula, $fechaEstreno, $reg, $trailer, $director, $idUser, $genero);
				}
				else{
					$this->load->view('errors/errorSubirFicha.php');
				}
		}
		public function listarPelis(){
			$this->load->view('templates/headers/headerPrin.php');
			$datos['contenido']=$this->films_model->mostrarTodasPeliculas();
			$this->load->view('films/listaFicha.php', $datos);
			$this->load->view('templates/footers/foot.php');
		}
		public function verPeli(){
			$id=$this->uri->segment(3);
			$idUser=$this->session->userdata('idUsuario');
				
			$this->load->view('templates/headers/headerPrin.php');
			$datos['contenido']=$this->films_model->mostrarPeliculaEspecifica($id);
			$this->load->view('films/verPeli.php', $datos);
			if(isset($idUser)){
				$comentarios['contenido']=$this->comentario_model->mostrarComentarios($id, $idUser);
				$comentarios['idPelicula']=$id;
				$this->load->view('comentario/verComentarios.php', $comentarios);
				$this->load->view('templates/footers/foot.php');
		
			}
			else{
				$this->load->view('errors/errorNoUsuario.php');
			}
		}
		public function cargarFormModFicha(){
			if($this->session->userdata('username')){
				$this->load->view('templates/headers/headerPrin.php');
				$datos['contenido']=$this->films_model->mostrarTodasPeliculas();
				$this->load->view('films/modificarFicha.php', $datos);
				$this->load->view('templates/footers/foot.php');
			}
			else{
				$this->load->view('errors/errorCrearFicha.php');
			}
		}
		
		public function modificarFicha(){
			$id=$this->input->post('id');
			$nombre=$this->input->post('nombre');
			$sinopsis=$this->input->post('sinopsis');
			$caratula=$this->input->post('caratula');
// 			$caratula=$config['file_image'];
			$fechaEstreno=$this->input->post('datepicker');//Debería ser algo así
			$director=$this->input->post('director');
// 			$this->load->view('films/modificarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÃ�A IR A LA CARPETA FORMULARIOS
			if ($this->films_model->modificarFicha($id, $nombre, $sinopsis, $caratula, $anyo, $director)) {
				//echo $id;
			$this->load->view('correcto/correctoModificarFicha.php');
			} 
			else {
				$this->load->view('errors/errorModificarFicha.php');
			}
		}
		public function cargarFormBorFicha(){
			$this->load->view('templates/headers/headerSec.php');
			$this->load->view('films/borrarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÃ�A IR A LA CARPETA FORMULARIOS
		}
	public function borrarFicha(){
			$id=$this->uri->segment(3);
			$bien=$this->films_model->borrarFicha($id);
		if($bien){
			$this->load->view('correcto/correctoBorrarFicha.php');
		}
	}
	
	public function nuevoComentario(){
		$idPeli=$this->input->post('idPeli');
		$idUser=$this->session->userdata('idUsuario');
		$mensaje=$this->input->post('texto');
		$dia=date("Y-m-d");
		$bien=$this->comentario_model->nuevoComentario($mensaje, $dia, $idPeli, $idUser);
		if($bien){
			$this->load->view('correcto/correctoComentario');
		}
		else{
			$this->load->view('errorComentario');
		}
	}
	
	public function borrarComentario(){
		$idCom=$this->uri->segment(3);
		$bien=$this->comentario_model->borrarComentario($idCom);
		if($bien){
			$this->load->view('correcto/correctoBorrarComentario.php');
		}
		else{
			$this->load->view('errors/errorBorrarcomentario.php');
		}
	}
	
	public function obtenerGenero(){
		$this->load->model('genero_model');
		if (isset($_GET['genero'])){
			$dato = strtolower($_GET['genero']);
			$this->genero_model->getGenero($dato);
		}
	}
	
}
?>