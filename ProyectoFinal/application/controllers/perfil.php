<?php
class perfil extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'form' );
		$this->load->model ( 'perfil_model' );
	}
	public function index() {
		$this->load->view ( 'templates/headers/headerPrin.php' );
		$idUser=$this->session->userdata('idUsuario');
		$nick='';
		
		if (isset($_GET['nickUsuario'])) {
			$nick=$_GET['nickUsuario'];
			
			$idUser=$this->perfil_model->devolverIdUsuario($nick);
			$datos['nick']=$nick;
		}
		if (isset($_POST['nombre'])) {
			$nombre='nombre';
			$nombreCampo = $_POST['nombre'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
		if (isset($_POST['apellidos'])) {
			$nombre='apellidos';
			$nombreCampo = $_POST['apellidos'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
		if (isset($_POST['nacimiento'])) {
			$nombre='fechaNacimiento';
			$nombreCampo = $_POST['nacimiento'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
		if (isset($_POST['sexo'])) {
			$nombre='sexo';
			$nombreCampo = $_POST['sexo'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
		if (isset($_POST['biografia'])) {
			$nombre='biografia';
			$nombreCampo = $_POST['biografia'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
		
		$datos['contenido']=$this->perfil_model->listarDatosPerfil($idUser);
		$datos['comentario']=$this->perfil_model->listarComentarios($idUser);
		$datos['peliculas']=$this->perfil_model->listarPeliculas($idUser);
		$this->load->view('perfilUsuario/body.php', $datos);
		$this->load->view('templates/footers/foot.php');
	}
	public function editarPerfi() {
		$idUser=$this->session->userdata('idUsuario');
		if (isset($_GET['nombre'])) {
			$nombre="nombre";
			$nombreCampo = $_GET['nombre'];
			$this->perfil_model->actualizarDatosPerfil($idUser, $nombre, $nombreCampo);
		}
	}
public function ad(){
	$this->load->view('templates/headers/headerPrin.php');
	$this->load->view ('admin/admin.php');
}

	public function modificarFicha(){
			$id=$this->input->post('id');
			$nombre=$this->input->post('nombre');
			$apellido=$this->input->post('apellido');
			$nickname=$this->input->post('nickname');
// 			
// 			$this->load->view('films/modificarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÃ�A IR A LA CARPETA FORMULARIOS
			if ($this->perfil_model->modificarFicha($id, $nombre, $apellido, $nickname)) {
// 				echo $id;
				$this->index();
			} else {
				echo "Ha ocurrido algún error";
			
			}
	}
	public function listarComentario() {

		$idUser=$this->session->userdata('idUsuario');
		$this->load->view('templates/headers/headerPrin.php');
		$datos['comentario']=$this->perfil_model->listarComentarios($idUser);
		$this->load->view('perfilUsuario/body.php', $datos);
		$this->load->view('templates/footers/foot.php');
		
	}
				
		
}
?>