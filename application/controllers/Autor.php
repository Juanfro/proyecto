<?php

class Autor extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		
		//Cargar lista de paises
		$this->load->model('pais_model');
		$datos['body']['paises'] = $this->pais_model-> getAll($filtro="");
		
		enmarcar($this, 'autor/crear', $datos);
	}

	public function crearpost() {
		$nombre = $_POST['nombre'];
		$pseudonimo = $_POST['pseudonimo'];
		$biografia = $_POST['biografia'];
		$anodenacimiento = $_POST['anodenacimiento'];
		$pais = $_POST['pais'];
		$this->load->model('autor_model');
		$this->autor_model->crear($nombre, $pseudonimo, $pais,$biografia,$anodenacimiento);
		enmarcar($this, 'autor/crearOK');
	}

	public function modificar() {
		$this->load->model('autor_model');
		$id_autor = $_POST['id_autor'];
		
		$this->load->model('pais_model');
		$datos['body']['paises'] = $this->pais_model-> getAll($filtro="");
		
		$datos ['autor'] = $this->autor_model->getautorPorId($id_autor);
		
		enmarcar($this, 'autor/modificar', $datos);
	}
	
	public function perfil($id){
		$this->load->model('autor_model');
		$id_autor = $id;
		
		$datos['autor'] = $this->autor_model->getautorPorId($id_autor);
		
		enmarcar($this, 'autor/perfil',$datos);
		
	}

	public function modificarpost() {
		$nombre = $_POST['nombre'];
		$pseudonimo = $_POST['pseudonimo'];
		$biografia = $_POST['biografia'];
		$anodenacimiento = $_POST['anodenacimiento'];
		$pais = $_POST['pais'];
		
		$id_autor = $_POST['id_autor'];
		
		$this->load->model('autor_model');
		$this->autor_model->modificar($id_autor, $nombre, $pseudonimo, $pais,$biografia,$anodenacimiento);
		
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
	
	public function seguir(){
		session_start();
		
		$this->load->model('autor_model');
		
		$id_autor= isset($_POST['id_autor']) ? $_POST['id_autor'] : null;
		$id_usuario = isset ($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		$this->autor_model->seguir($id_autor, $id_usuario);
		
	}
	
	//Script crear Autores
	
	public function dummyAutor(){
		$this->load->model('autor_model');
		
		try{
			$this->autor_model->crear('Herbert Frank','Herbert Frank', 142, 'Biografía de Frank Herbert',  2);
			$this->autor_model->crear('Terry Pratchett','Terry Pratchett', 142, 'Biografia Terry Prattchett',12);
			$this->autor_model->crear('J.K. Rowling','J.K. Rowling', 142, 'Biografia de JK ROWLINg',22);
			$this->autor_model->crear('J.R.R Tolkien','', 142, 'Biografia de Tolkien',29);
			$this->autor_model->crear('Douglas Adams','Douglas Adams', 142, 'Biografia de Douglas Adams',88);
			$this->autor_model->crear('George R.R. Martin','George R.R. Martin', 142, ' Biografía de RR MArtin',52 );
		}catch (Exception $e){
			
		}
	}
}
?>