
<?php
class admin extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'form' );
		$this->load->model ( 'admin_model' );
	}
	public function index() {
		$this->load->view ( 'templates/headers/headerPrin.php' );
		$this->load->view ( 'films/body.php' );
		if ($_POST) {
			$buscar = $this->input->post('adm');
		} else {
			$buscar = '';
		}
		$data['user'] = $this->admin_model->buscar($buscar);
		$this->load->view('admin/admin.php',$data);
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
			$tipoUsuario=$this->input->post('tipoUsuario');
			$biografia=$this->input->post('biografia');
// 			
// 			$this->load->view('films/modificarFicha.php');//FORMULARIO QUE PROBABLEMENTE DEBERÃ�A IR A LA CARPETA FORMULARIOS
			if ($this->admin_model->modificarFicha($id, $nombre, $apellido, $nickname, $tipoUsuario, $biografia)) {
// 				echo $id;
				$this->index();
			} else {
				echo "Ha ocurrido algún error";
			
			}
	}
	public function borrarUser(){
				$id=$this->uri->segment(3);
				$this->admin_model->borrarUser($id);
	}
				
		
}
?>