<?php

class Autor extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		enmarcar($this, 'autor/crear');
	}

	public function crearpost() {
		$nombre = $_POST['nombre'];
		$pseudonimo = $_POST['pseudonimo'];
		$this->load->model('autor_model');
		$this->autor_model->crear($nombre, $pseudonimo);
		enmarcar($this, 'autor/crearOK');
	}

	public function modificar() {
		$this->load->model('autor_model');
		$id_autor = $_POST['id_autor'];
		$datos['autor'] = $this->autor_model->getautorPorId($id_autor);
		
		enmarcar($this, 'autor/modificar', $datos);
	}

	public function modificarpost() {
		$nombre = $_POST['nombre'];
		$pseudonimo = $_POST['pseudonimo'];
		
		$id_autor = $_POST['id_autor'];
		
		$this->load->model('autor_model');
		$this->autor_model->modificar($id_autor, $nombre, $pseudonimo);
	}

	public function borrar() {
		$id_autor = $_POST['id_autor'];
		$this->load->model('autor_model');
		$this->autor_model->borrar($id_autor);
		$this->listar();
	}

	public function listar() {
		$this->listarPost();
	}

	public function listarPost($f = '') {
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		$this->load->model('autor_model');
		$datos['autores'] = $this->autor_model->getAll($filtro);
		$datos['filtro'] = $filtro;
		enmarcar($this, 'autor/listar', $datos);
	}
}
?>