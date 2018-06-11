<?php
session_start();

class Articulo extends CI_Controller {

	public function index() {
		$this->crear();
	}

	public function crear() {
		// Lista de autores
		$this->load->model('autor_model');
		$datos['autores'] = $this->autor_model->getAll();
		
		// Lista Libros
		$this->load->model('libro_model');
		$datos['libros'] = $this->libro_model->getAll();
		
		enmarcar($this, 'Articulo/crear', $datos);
	}

	public function crearPost() {
		$this->load->model('articulo_model');
		
		$autorArticulo = isset($_SESSION['usuario']['nombre']) ? $_SESSION['usuario']['nombre'] : 'Anónimo';
		
		$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
		$contenido = isset($_POST['contenido']) ? $_POST['contenido'] . '<div class="firma">Artículo escrito por ' . $autorArticulo . '</div>' : null;
		$idUsuario = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		
		// Autores Mencionados
		$autores = isset($_POST['autores']) ? $_POST['autores'] : null;
		// Libros Mencionados
		$libros = isset($_POST['libros']) ? $_POST['libros'] : null;
		
		try {
			$this->articulo_model->create_articulo($titulo, $contenido, $idUsuario, $autores, $libros);
			header('Location:' . base_url() . 'articulo/crearPOSTok?titulo=' . $titulo . '&contenido=' . $contenido);
		} catch (Exception $e) {
			header('Location:' . base_url() . 'articulo/crearPOSTerror?titulo=' . $titulo . '&contenido=' . $contenido);
		}
	}

	public function crearPOSTok() {
		$datos['body']['titulo'] = $_GET['titulo'];
		$datos['body']['contenido'] = $_GET['contenido'];
		enmarcar($this, 'articulo/crearPOSTok', $datos);
	}

	public function crearPOSTerror() {
		$datos['body']['titulo'] = $_GET['titulo'];
		$datos['body']['contenido'] = $_GET['contenido'];
		enmarcar($this, 'articulo/crearPOSTerror', $datos);
	}

	// TODO Crear Articulos de muestra
	public function dummyArticulo() {
		$this->load->model('articulo_model');
		
		try {
			$this->articulo_model->create_articulo('Articulo1', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 3);
			$this->articulo_model->create_articulo('Articulo2', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 4);
			$this->articulo_model->create_articulo('Articulo3', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 2);
			$this->articulo_model->create_articulo('Articulo4', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 1);
			$this->articulo_model->create_articulo('Articulo5', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 4);
			$this->articulo_model->create_articulo('Articulo6', 'Lorem fistrum mamaar mamaar qué dise usteer papaar papaar condemor de la pradera. No te digo trigo por no llamarte Rodrigor tiene musho peligro ese pedazo de condemor de la pradera por la gloria de mi madre quietooor quietooor fistro sexuarl. La caidita pecador fistro al ataquerl amatomaa pupita pupita hasta luego Lucas fistro llevame al sircoo. Mamaar sexuarl ese pedazo de mamaar no te digo trigo por no llamarte Rodrigor jarl. Caballo blanco caballo negroorl qué dise usteer no puedor caballo blanco caballo negroorl quietooor ese que llega. Ese hombree de la pradera jarl benemeritaar a peich diodeno diodeno torpedo sexuarl por la gloria de mi madre.', 5);
		} catch (Exception $e) {}
	}

	//Listar Todos Los Artículos
	public function listar() {
		$this->load->model('articulo_model');
		$datos['articulos'] = $this->articulo_model->getAll();
		
		enmarcar($this, 'articulo/listar', $datos);
	}
	
	//Mostrar Un artículo
	public function mostrar($id) {
		$this->load->model('articulo_model');
		
		$id_articulo = $id;
		
		$datos['articulo'] = $this->articulo_model->getArticuloPorId($id_articulo);
		
		enmarcar($this, 'articulo/mostrar', $datos);
	}
		
	public function modificar() {
		$this->load->model('articulo_model');
		$id_articulo = $_POST['id_articulo'];
		$datos['articulo'] = $this->articulo_model->getArticuloPorId($id_articulo);
		
		enmarcar($this, 'articulo/modificar', $datos);
	}

	public function modificarPost() {
		$titulo = $_POST['titulo'];
		$contenido = $_POST['contenido'];
		
		$id_articulo = $_POST['id_articulo'];
		$this->load->model('articulo_model');
		
		$this->articulo_model->modificar($id_articulo, $titulo, $contenido);
		
		enmarcar($this, 'articulo/modificarOK');
	}

	public function borrar() {
		$id_articulo = $_POST['id_articulo'];
		$this->load->model('articulo_model');
		$this->articulo_model->borrar($id_articulo);
		
		enmarcar($this, 'articulo/borrarOK');
	}

	
}
?>
