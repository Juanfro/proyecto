<?php

class Genero extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		enmarcar($this, 'genero/crear');
	}

	public function crearpost() {
		$nombre = $_POST['nombre'];
		$this->load->model('genero_model');
		$this->genero_model->crear($nombre);
		enmarcar($this, 'genero/crearOK');
	}

	public function listar() {
		$this->listarPost();
	}

	public function listarPost($f = '') {
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		$this->load->model('genero_model');
		$datos['generos'] = $this->genero_model->getAll($filtro);
		$datos['filtro'] = $filtro;
		enmarcar($this, 'genero/listar', $datos);
	}

	public function dummyGeneros() {
		$this->load->model('genero_model');
		
		try{
			$this->genero_model->crear('Épica');			
			$this->genero_model->crear('Epopeya');			
			$this->genero_model->crear('Cantar de gesta');			
			$this->genero_model->crear('Cuento');			
			$this->genero_model->crear('Novela');			
			$this->genero_model->crear('Fábula');			
			$this->genero_model->crear('Lírico');			
			$this->genero_model->crear('Drama');			
			$this->genero_model->crear('Comedia');			
			$this->genero_model->crear('Melodrama');
			$this->genero_model->crear('Tragicomedia');
			$this->genero_model->crear('Farsa');
			$this->genero_model->crear('Ensayo');
			$this->genero_model->crear('Biografia');
			$this->genero_model->crear('Crónica');
			$this->genero_model->crear('Oratoria');
			$this->genero_model->crear('Epístola');
			$this->genero_model->crear('Tratado');
			$this->genero_model->crear('Diálogo');
			$this->genero_model->crear('Poesia');
			$this->genero_model->crear('Diccionario');
			$this->genero_model->crear('Diseño');
			$this->genero_model->crear('Gastronomía');
			$this->genero_model->crear('Música');
			$this->genero_model->crear('Policiaca');
			$this->genero_model->crear('Religion');
			$this->genero_model->crear('Autoayuda');
			$this->genero_model->crear('Educativo');
			$this->genero_model->crear('Infantil');
			$this->genero_model->crear('Juvenil');
			$this->genero_model->crear('Comic');
			$this->genero_model->crear('Humor');
			
		}catch(Exception $e){
			
		}
		
		// 	 	 	 	 	 	 		 	 	 	  	
	}
}
?>
