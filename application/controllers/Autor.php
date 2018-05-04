<?php
class Autor extends CI_Controller{
	public function index()
	{   $this->crear();
	
	}
	public function crear(){
		enmarcar($this,'Autores/crear');
	
	}
	public function crearpost(){
		$nombre=$_POST['nombre'];
		$pseudonimo=$_POST['pseudonimo'];
		$this->load->model('autores_model');
		$this->autores_model->crear($nombre,$pseudonimo);
		enmarcar($this,'Autores/crearOK' );
	}
	
	public function modificar(){
		
		
		$this->load->model('autores_model');
		$id_autores=$_POST['id_autores'];
	    $datos['autores']= $this->autores_model->getAutoresPorId($id_autores);
	
		enmarcar($this, 'Autores/modificar',$datos);
		
	}
	
	public function modificarpost(){
		
		
		$nombre=$_POST['nombre'];
		$pseudonimo=$_POST['pseudonimo'];
		
		$id_autores=$_POST['id_autores'];
		
		$this->load->model('autores_model');
		$this->autores_model->modificar($id_autores,$nombre,$pseudonimo);
		
		
		
	}
	
	public  function borrar (){
		
		
		$id_autores =$_POST['id_autores'];
		$this->load->model('autores_model');
		$this->autores_model->borrar($id_autores);
		$this->listar();
		
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