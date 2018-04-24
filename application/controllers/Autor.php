<?php
class Autor extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Autores/crear' );
	}
	public function crear(){
		enmarcar($this,'Autores/crear');
	
	}
	public function crearpost(){
		$nombre=$_POST['nombre'];
		$pseudonimo=$_POST['pseudonimo'];
		$this->load->model('autores_model');
		$this->autores_model->crear($nombre,$pseudonimo);
		enmarcar($this,'Autores/crear' );
	}
	
	
	public function listar() {
		$this->listarPost ();
	}
	public function listarPost($f = '') {
		$filtro = isset ( $_POST ['filtro'] ) ? $_POST ['filtro'] : $f;
		$this->load->model('autores_model');
		$datos['autores']= $this->autores_model->getAll($filtro);
		$datos['filtro'] =$filtro;
		enmarcar($this, 'Autores/listar', $datos);
	}
}
?>