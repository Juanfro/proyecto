<?php
session_start();

class ListaAutores extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		$this->load->model('autor_model');
		
		$datos['autores'] = $this->autor_model->getAll();
		
		enmarcar($this, 'listaAutores/crear', $datos);
	}

	public function crearPost() {
		
		// DATOS
		$nombre = $_POST['nombre']; // Nombre De la Lista
		$autores = $_POST['autores']; // Autores En la lista
		
		$usuarioAutor = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null; // ID del Usuario que crea la Lista
		$descripcion=$_POST['descripcion'];
		// Cargar Modelo
		
		$this->load->model('listaautores_model');
		
		$this->listaautores_model->crear($nombre, $autores, $usuarioAutor,$descripcion);
		
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
	
	//LISTAR
	
	public function listar($f = ''){
		//TODO FILTRO
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		$this->load->model('listaautores_model');
		$datos['listas'] = $this->listaautores_model->getAll($filtro);
		
		$datos['filtro'] = $filtro;
		enmarcar($this, 'listaAutores/listar', $datos);
	}
	
	//modificar
	
	public function modificar() {
		$this->load->model('listaautores_model');
		$this->load->model('autor_model');
		
		$id_lista = $_POST['id_lista'];

		$datos['lista'] = $this->listaautores_model->getlistaPorId($id_lista);
		$datos['autores'] = $this->autor_model->getAll();
		
		enmarcar($this, 'listaAutores/modificar', $datos);
	}
	
	public function modificarpost() {
		$nombre = $_POST['nombre']; // Nombre De la Lista
		$autores = $_POST['autores'];
		
		
		$id_lista = $_POST['id_lista'];
		
		$datos['autores']=$autores;
		
		$this->load->model('listaautores_model');
		$this->listaautores_model->modificar($nombre, $autores,$id_lista);
		enmarcar($this, 'libro/modificadoOK');
	}
	

	public function borrar() {
		$id_listar = $_POST['id_lista'];
		$this->load->model('listaautores_model');
		$this->listaautores_model->borrar($id_listar);
		$this->listar();
	}
	
	

	//Seguir lista
	
	public function seguir(){
		
		$this->load->model('listaautores_model');
		
		$id_lista = isset($_POST['id_lista']) ? $_POST['id_lista'] : null;
		$id_usuario = isset ($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		
		$this->listaautores_model->seguir($id_lista, $id_usuario);
		
	}
	public function perfil($id){
		$this->load->model('listaautores_model');
	
		$id_lista =$id;
	
		$datos['lista'] = $this->listaautores_model->getlistaPorId($id_lista);
	
		enmarcar($this, 'listaAutores/perfil', $datos);
	}
	

}

?>