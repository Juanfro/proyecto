<?php

class Libro extends CI_Controller {

	public function index() {
		$this->crear();
		
	}
	public function perfil($id){
		$this->load->model('libro_model');
		$id_libro =$id;
	
		$datos['libro'] = $this->libro_model->getlibroPorId($id_libro);
	
		enmarcar($this, 'libro/perfil',$datos);
	
	}

	public function crear() {
		//Cargar modelo autor
		$this->load->model('autor_model');
		$datos['body']['autores'] = $this->autor_model->getAll($filtro='');//Obtener Autores
		
		//Cargar Modelo Genero
		$this->load->model('genero_model');
		$datos['body']['generos'] = $this->genero_model->getAll($filtro='');//Obtener Generos
	
		enmarcar($this, 'libro/crear', $datos);
	}

	public function crearpost() {
		
		//Cargar Modelo Libro
		$this->load->model('libro_model');
		
		//Datos
		
		$titulo = isset($_POST['titulo']) ?$_POST['titulo']:null;
		$isbn =isset($_POST['isbn']) ?$_POST['isbn']:null ;
		$autor = isset($_POST['autor']) ?$_POST['autor']:null;
		$genero = isset($_POST['genero']) ?$_POST['genero']:null;
		$idioma = isset($_POST['idioma'])? $_POST['idioma']:null;
		$npalabras = isset($_POST['npalabras'])? $_POST['npalabras']:null;
		$sinopsis = isset($_POST['sinopsis'])? $_POST['sinopsis']:null;
		
		$edadminima = isset($_POST['edadminima'])?$_POST['edadminima']:null;

		$this->load->model('libro_model');
		$status=$this->libro_model->crear($titulo,$isbn,$autor,$genero,$idioma, $npalabras, $sinopsis, $edadminima);
		if($status == 0){
			enmarcar($this, 'libro/crearOK');}
		else{
			enmarcar($this, 'libro/crearError');
		}

	}

	public function listar() {
		$this->listarPost();
	}

	public function listarPost($f = '') {
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		$this->load->model('libro_model');
		
		$datos['libros'] = $this->libro_model->getAll($filtro);
		$datos['filtro'] = $filtro;
		
		enmarcar($this, 'libro/listar', $datos);
	}
	
	

	public function modificar() {
		$this->load->model('libro_model');
		
		$id_libro = $_POST['id_libro'];
	   
		$datos['libro'] = $this->libro_model->getlibroPorId($id_libro);
		/* carga autor */
		$this->load->model('autor_model');
		$datos['body']['autores'] = $this->autor_model->getAll($filtro='');
		
		/* carga genero */
		$this->load->model('genero_model');
		$datos['body']['generos'] = $this->genero_model->getAll($filtro='');
		enmarcar($this, 'libro/modificar', $datos);
	}

	public function modificarpost() {
		$id_libro = $_POST['id_libro'];
		$isbn = $_POST['isbn'] ;
		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'] ;
		
		
		$idioma =  $_POST['idioma'];
		$genero = $_POST['genero'] ;
		$npalabras =  $_POST['npalabras'];
		$sinopsis = $_POST['sinopsis'];
		
		$edadminima = $_POST['edadminima'];
		
		
		$this->load->model('libro_model');
		$this->libro_model->modificar($id_libro, $isbn, $autor,$genero, $idioma, $npalabras, $sinopsis, $edadminima);
	 enmarcar($this, 'libro/modificadoOK');
	}

	public function borrar() {
		$id_libro = $_POST['id_libro'];
		$this->load->model('libro_model');
		$this->libro_model->borrar($id_libro);
		$this->listar();
	}
	
	public function seguir(){
		session_start();
		$this->load->model('libro_model');
		
		$id_libro= isset($_POST['id_libro']) ? $_POST['id_libro'] : null;
		$id_usuario = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		$this->libro_model->seguir($id_libro, $id_usuario);
	}
	
	public function dummylibros(){
		$this->load->model('libro_model');
		
		try{
			
			$this->libro_model->crear('974-0441172719','Harry Potter y la piedra filosofal',[4,3], [5] ,'español',321,'un niño se entera que es mago','papel','12');
			$this->libro_model->crear('875-0441172719','Harry Potter y la camara secreta',[4], [5] ,'español',321,'un niño se entera que es mago','papel','12');
			$this->libro_model->crear('776-0441172719','Harry Potter y el prisionero de azcaban',[4], [5] ,'español',321,'un niño se entera que es mago','bolsillo','12');
			$this->libro_model->crear('677-0441172719','Harry Potter y el caliz de fuego',[4], [5] ,'español',321,'un niño se entera que es mago','bolsillo','12');
			$this->libro_model->crear('578-0441172719','Harry Potter y la orden del fenix',[4], [5] ,'español',321,'un niño se entera que es mago','bolsillo','12');
			$this->libro_model->crear('479-0441172719','Harry Potter y el principe mestizo',[4], [5] ,'español',321,'un niño se entera que es mago','bolsillo','12');
			$this->libro_model->crear('371-0441172719','Harry Potter y las reliquias de la muerte',[4], [5] ,'español',321,'un niño se entera que es mago','bolsillo','12');
		
			$this->libro_model->crear('322-0441172718','El señor de los anillos la comunidad del anillo',[5], [5] ,'español',1222,'un hoobit sa le de la comarca','papel',15);
			$this->libro_model->crear('365-0441172717','El señor de los anillos y las dos torres', [5] , [5] ,'español',1222,'un hoobit sa le de la comarca','papel',15);
			$this->libro_model->crear('390-0441172716','El señor de los anillos y el retorno del rey', [5] , [5] ,'español',1222,'un hoobit sa le de la comarca','papel',15);
			
			$this->libro_model->crear('0-330-32312-1','the Salon of Doubt', [6] , [5] ,'ingles',744,'It consists largely of essays about technology and life experiences, but its major selling point is the inclusion of the incomplete novel on which Adams was working at the time of his death, The Salmon of Doubt (from which the collection gets its title, a reference to the Irish myth of the Salmon of Knowledge','electronico',16 );
			$this->libro_model->crear('0-671-74251-5','The Long Dark Tea-Time of the Soul', [6] , [5,18] ,'ingles',832,'It is the second book by Adams featuring private detective Dirk Gently, the first being Dirk Gently`s Holistic Detective Agency.','electronico',18);
		}catch(Exception $e){
			
		}
	}
}
?>