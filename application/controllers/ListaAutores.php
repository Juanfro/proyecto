<?php
session_start();

class ListaAutores extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		$this->load->model('autor_model');
		
		$datos['autores'] = $this->autor_model->getAll();
		
		enmarcar($this, 'ListaAutores/crear', $datos);
	}

	public function crearPost() {
		
		// DATOS
		$nombre = $_POST['nombre']; // Nombre De la Lista
		$autores = $_POST['autores']; // Autores En la lista
		$usuarioAutor = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null; // ID del Usuario que crea la Lista
		                                                                                       
		// Cargar Modelo
		
		$this->load->model('listaautores_model');
		
		$this->listaautores_model->crear($nombre, $autores, $usuarioAutor);
		
		// $listautores = R::dispense('listautores');		
		/*
		 * $listautores->nombre=$nombre;
		 * $listautores->listautores=$autores;
		 * foreach ($autores as $autor){
		 *
		 * $listautores->listautores=$autor;
		 * }
		 * R::store($listautores);
		 * R::close();
		 */
	}
}

?>