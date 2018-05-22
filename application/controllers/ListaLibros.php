<?php
class ListaLibros extends CI_Controller{
	public function index()
	{   $this->crear();
	
	}
	public function crear(){
		$this->load->model('libro_model');
		
		$datos['libros']=$this->libro_model->getAll();
		enmarcar($this,'ListaLibros/crear',$datos);

	}
	public  function crearPost(){
		$listalibros = R::dispense('listalibros');
		$libros=$_POST['libros'];
		$nombre=$_POST['nombre'];
		$listalibros->nombre=$nombre;
		foreach ($libros as $libro){
				
			$listalibros->listautores=$libro;
		}
		
		
		
		R::store($listalibros);
		R::close();
	}
}
?>
