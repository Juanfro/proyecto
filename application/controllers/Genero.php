<?php
class Genero extends CI_Controller{
	public function index()
	{   $this->crear();
	
	}
	public function crear(){
		enmarcar($this,'Genero/crear');

	}
	
	public function crearpost(){
		$nombre=$_POST['nombre'];
		$this->load->model('genero_model');
		$this->genero_model->crear($nombre);
		enmarcar($this, 'Genero/crearOK');
	}
	
	public function listar(){
		$this->listarPost();
	}
	
	public function listarPost($f=''){
		$filtro = isset ( $_POST ['filtro'] ) ? $_POST ['filtro'] : $f;
		$this->load->model('genero_model');
		$datos['generos']=$this->genero_model->getAll($filtro);
		$datos['filtro']=$filtro;
		enmarcar($this, 'Genero/listar',$datos);
		
	}
}
?>
