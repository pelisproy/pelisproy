<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Films extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('films_model');
			$this->load->model('genero_model');
			$this->load->model('comentario_model');
			$this->load->helper('youtube_helper');
			$this->load->helper('mensajes_helper');
			$this->load->helper('acepto_helper');
		}
		public function index(){
			$this->load->view('templates/headers/headerPrin.php');
			$this->load->view('films/body.php');
		}
		public function cargarFormCrearFicha(){
		if($this->session->userdata('username')){
				$datos['genero']=$this->genero_model->seleccionarGenero();
				$this->load->view('templates/headers/headerPrin.php', $datos);
				$this->load->view('films/crearFicha.php');
				$this->load->view('templates/footers/foot.php');
		}
			else{
				$this->load->view('errors/errorCrearFicha.php');
			}
		}
		public function crearFicha(){
			$usuario=$this->session->userdata('username');
			$idUser=$this->session->userdata('idUsuario');
				//PARTE DE SUBIR LA IMAGEN
				$nombreImagen=$_FILES['caratula']['name'];
				$config['max_size']=1024;
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
					$trailerIntro=$this->input->post('trailer');
					$trailer=$trailerIntro;
					$director=$this->input->post('director');
					$actor=$this->input->post('actor');
					$idGenero=$this->input->post('genero');
					$genero;
					foreach($idGenero as $k=>$v){
						$genero=$v;
					}
					$dato=$this->films_model->crearFicha($nombre, $sinopsis, $caratula, $fechaEstreno, $reg, $trailer, $director, $actor, $idUser, $genero);
					if($dato){
						$this->session->set_flashdata("fichaCreadaCor",fichaCreadaCor());
						redirect('Films/listarPelis');
					}
				}
				else{
					$this->session->set_flashdata("fichaFallido",fichaFallido());
					redirect('Films/listarPelis');
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
			$datos['genero']=$this->genero_model->seleccionarGenero();
			$this->load->view('films/verPeli.php', $datos);
				$comentarios['contenido']=$this->comentario_model->mostrarComentarios($id, $idUser);
				$comentarios['idPelicula']=$id;
				$this->load->view('comentario/verComentarios.php', $comentarios);
			
			$this->load->view('templates/footers/foot.php');
			
			//MODIFICANDO PELI
			if (isset($_POST['nombre'])) {
				$idPeli=$this->uri->segment(3);
				$nombre='nombre';
				$nombreCampo = $_POST['nombre'];
				$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
			}
			if (isset($_POST['estreno'])) {
				$idPeli=$this->uri->segment(3);
				$nombre='fechaEstreno';
				$nombreCampo = $_POST['estreno'];
				$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
			}
			if (isset($_POST['genero'])) {
				$idPeli=$this->uri->segment(3);
				$nombre='idGenero';
				$nombreCampo;
				$idGenero = $_POST['genero'];
				foreach($idGenero as $k=>$v){
					$nombreCampo=$v;
				}
				$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
			}
			if (isset($_POST['sinopsis'])) {
				$idPeli=$this->uri->segment(3);
				$nombre='sinopsis';
				$nombreCampo = $_POST['sinopsis'];
				$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
			}
			if (isset($_POST['trailer'])) {
				$idPeli=$this->uri->segment(3);
				$nombre='trailer';
				$nombreCampo = $_POST['trailer'];
				$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
			}
			if(isset($_POST['caratula'])){
				$idPeli=$this->uri->segment(3);
				$nombre='caratula';
				$nombreCampo = $_POST['caratula'];
				$nombreImagen=$_FILES['caratula']['name'];
				$config['max_size']=1024;
				$config['quality']='90%';
				$config['upload_path']='./assets/images/films/';
				$config['allowed_types']='gif|jpg|png';
				$config['file_name']=$nombreImagen;
				$this->load->library('upload', $config);
				$bien=$this->upload->do_upload('caratula');
				if($bien){
					$this->films_model->actualizarDatosPeli($idPeli, $nombre, $nombreCampo);
				}
			}
		}
		
	public function borrarFicha(){
			$id=$this->uri->segment(3);
			$bien=$this->films_model->borrarFicha($id);
		if($bien){
			$this->session->set_flashdata("fichaBorradaCor",fichaBorradaCor());
			redirect('Films/listarPelis');
		}
		else{
			$this->session->set_flashdata("borrarFichaFallido",borrarFichaFallido());
			redirect('Films/listarPelis');
		}
	}
	
	public function nuevoComentario(){
		$this->load->library('form_validation');
		$this->load->helper('Malsonante_helper');
		$idPeli=$this->input->post('idPeli');
		$idUser=$this->session->userdata('idUsuario');
		$mensaje=$this->input->post('texto');
		$dia=date("Y-m-d");
	
		$this->form_validation->set_rules('texto', 'Texto', 'required|min_length[3]|max_length[1000]');
		$this->form_validation->set_message('required', '%s: es requerido');
		$this->form_validation->set_message('min_length', '%s: debe tener al menos %s carácteres');
		$this->form_validation->set_message('max_length', '%s: debe tener al menos %s carácteres');
		if($this->form_validation->run()==TRUE){
			$mensajeReg=comprobar($mensaje);
			$bien=$this->comentario_model->nuevoComentario($mensajeReg, $dia, $idPeli, $idUser);
			if($bien){
				$this->session->set_flashdata("registroComentario", registroComentario());
				redirect("Films/verPeli/$idPeli");
			}
		}
		else{
			$this->session->set_flashdata("comentarioFallido", comentarioFallido());
			redirect("Films/verPeli/$idPeli");
		}
	}
	
	public function borrarComentario(){
		$idCom=$this->uri->segment(4);
		$idPeli=$this->uri->segment(3);
		$bien=$this->comentario_model->borrarComentario($idCom);
		if($bien){
			$this->session->set_flashdata("comentarioBorCor",comentarioBorCor());
			redirect("Films/verPeli/$idPeli");
		}
		else{
			$this->session->set_flashdata("borrarComentarioFallido",borrarComentarioFallido());
			redirect("Films/verPeli/$idPeli");
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