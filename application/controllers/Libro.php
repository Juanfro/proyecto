<?php
class Libro extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Libro/crear' );
	}
	public function crear(){
		
	     enmarcar($this, 'Libro/crear');
	}
	public function crearpost(){
		$isbn=$_POST['isbn'];
		$autor=$_POST['autor'];
		$idioma=$_POST['idioma'];
		$npalabras=$_POST['npalabras'];
		$sinopsis=$_POST['sinopsis'];
		$edicion=$_POST['edicion'];
		$edadminima=$_POST['edadminima'];
		$this->load->model('libros_model');
		$this->libros_model->crear($isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima);
		enmarcar($this,'Libro/crear' );
	}
	
	
	public function listar() {
		$this->listarPost ();
	}
	public function listarPost($f = '') {
		$filtro = isset ( $_POST ['filtro'] ) ? $_POST ['filtro'] : $f;
		$this->load->model('libros_model');
		$datos['libros']= $this->libros_model->getAll($filtro);
		$datos['filtro'] =$filtro;
		enmarcar($this, 'Libro/listar', $datos);
	}
}
?>