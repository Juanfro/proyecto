<?php

class Libro extends CI_Controller {

	public function index() {
		$this->crear();
		enmarcar($this, 'Libro/crear');
	}

	public function crear() {
		//Cargar modelo autor
		$this->load->model('autor_model');
	
		$datos['body']['autores'] = $this->autor_model->getAll();
	
		enmarcar($this, 'Libro/crear', $datos);
	}

	public function crearpost() {
		
		//Cargar Modelo Libro
		$this->load->model('libro_model');
		
		//Datos
		$isbn = $_POST['isbn'];
		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'];
		$idioma = $_POST['idioma'];
		$npalabras = $_POST['npalabras'];
		$sinopsis = $_POST['sinopsis'];
		$edicion = $_POST['edicion'];
		$edadminima = $_POST['edadminima'];

		$this->load->model('libro_model');
		$status=$this->libro_model->crear($isbn, $titulo, $autor, $idioma, $npalabras, $sinopsis, $edicion, $edadminima);
		if($status == 0){
			enmarcar($this, 'Libro/crearOK');}
		else{
			enmarcar($this, 'Libro/crearError');
		}

	}

	public function listar() {
		$this->listarPost();
	}

	public function listarPost($f = '') {
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		$this->load->model('libro_model');
		$this->load->model('autor_model');
		$datos['libros'] = $this->libro_model->getAll($filtro);
		$datos['autores']=$this->autor_model->getAll();
		$datos['filtro'] = $filtro;
		enmarcar($this, 'Libro/listar', $datos);
	}

	public function modificar() {
		$this->load->model('libro_model');
		$id_libro = $_POST['id_libro'];
	
		$datos['libro'] = $this->libro_model->getlibroPorId($id_libro);
		enmarcar($this, 'Libro/modificar', $datos);
	}

	public function modificarpost() {
		$isbn = $_POST['isbn'];
		$autor = $_POST['autor'];
		$idioma = $_POST['idioma'];
		$npalabras = $_POST['npalabras'];
		$sinopsis = $_POST['sinopsis'];
		$edicion = $_POST['edicion'];
		$edadminima = $_POST['edadminima'];
		
		$id_libro = $_POST['id_libro'];
		$this->load->model('libro_model');
		$this->libro_model->modificar($id_libro, $isbn, $autor, $idioma, $npalabras, $sinopsis, $edicion, $edadminima);
	}

	public function borrar() {
		$id_libro = $_POST['id_libro'];
		$this->load->model('libro_model');
		$this->libro_model->borrar($id_libro);
		$this->listar();
	}
	
	public function dummylibros(){
		$this->load->model('libro_model');
		
		try{
			//$this->libro_model->crear('978-0441172719', 'Dune' );
		}catch(Exception $e){
			
		}
	}
}
?>