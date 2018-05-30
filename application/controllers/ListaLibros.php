<?php
session_start();

class ListaLibros extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		$this->load->model('libro_model');
		
		$datos['libros'] = $this->libro_model->getAll();
		
		enmarcar($this, 'ListaLibros/crear', $datos);
	}
	
	public function crearPost(){
		
		//Datos
		$nombre = $_POST['nombre']; 	//Nombre de la lista
		$autores = $_POST['libros'];	//Libros En la lista
		$usuarioAutor = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;	//ID del usuario que crea la lista
		
		//Modelo
		$this->load->model('listalibros_model');
		$this->listalibros_model->crear($nombre, $autores, $usuarioAutor);
		
	}
	
	//Mostrar Listas
	
	public function listar($f =''){
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		
		$this->load->model('listalibros_model');
		$datos['listas'] = $this->listalibros_model->getAll($filtro);		
		$datos['filtro'] = $filtro;
		
		enmarcar($this, 'listaLibros/listar', $datos);
	}
}
?>
