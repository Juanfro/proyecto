<?php

class Comentario extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		enmarcar($this, 'Comentario/crear');
	}

	public function crearPost() {
		$contenido = $_POST['contenido'];
		
		$this->load->model('comentario_model');
		$this->comentario_model->crear($contenido);
		
		enmarcar($this, 'Comentario/crearOk');
	}

	public function modificar() {
		$this->load->model('comentario_model');
		$id_comentario = $_POST['id_comentario'];
		$datos['comentario'] = $this->comentario_model->getComentarioPorId($id_comentario);
		
		enmarcar($this, 'Comentario/modificar', $datos);
	}

	public function modificarPost() {
		$contenido = $_POST['contenido'];
		
		$id_comentario = $_POST['id_comentario'];
		
		$this->load->model('comentario_model');
		$this->comentario_model->modificar($id_comentario, $contenido);
		
		enmarcar($this, 'Comentario/modificarOK');
	}

	public function borrar() {
		$id_comentario = $_POST['id_comentario'];
		
		$this->load->model('comentario_model');
		
		$this->comentario_model->borrar($id_comentario);
		enmarcar($this, 'Comentario/borrarOK');
	}

	public function listar() {
		$this->load->model('comentario_model');
		$datos['comentario'] = $this->comentario_model->getAll();
		enmarcar($this, 'Comentario/listar', $datos);
	}
}

?>