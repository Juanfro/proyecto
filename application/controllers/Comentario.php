<?php
session_start();

class Comentario extends CI_Controller {

	public function index() {
		$this->crear();
	}

	/*public function crear() {
		enmarcar($this, 'Comentario/crear');
	}*/

	public function crearPost() {
		//DATOS
		$contenido = $_POST['contenido'];
		$id_articulo = $_POST['id_articulo'];
		$id_usuario = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : 'Anónimo';
			
		$this->load->model('comentario_model');
		$this->comentario_model->crear($contenido, $id_articulo, $id_usuario);
		
		enmarcar($this, 'comentario/crearOk');
	}

	public function modificar() {
		$this->load->model('comentario_model');
		$id_comentario = $_POST['id_comentario'];
		$datos['comentario'] = $this->comentario_model->getComentarioPorId($id_comentario);
		
		enmarcar($this, 'comentario/modificar', $datos);
	}

	public function modificarPost() {
		$contenido = $_POST['contenido'];
		
		$id_comentario = $_POST['id_comentario'];
		
		$this->load->model('comentario_model');
		$this->comentario_model->modificar($id_comentario, $contenido);
		
		enmarcar($this, 'comentario/modificarOK');
	}

	public function borrar() {
		$id_comentario = $_POST['id_comentario'];
		
		$this->load->model('comentario_model');
		
		$this->comentario_model->borrar($id_comentario);
		enmarcar($this, 'comentario/borrarOK');
	}

	public function listar() {
		$this->load->model('comentario_model');
		$datos['comentario'] = $this->comentario_model->getAll();
		enmarcar($this, 'comentario/listar', $datos);
	}
}

?>