<?php
class ListaAutores extends CI_Controller{
	public function index()
	{   $this->crear();
	
	}
	public function crear(){
		$this->load->model('autor_model');
		
		$datos['autores']=$this->autor_model->getAll();
		
		enmarcar($this,'ListaAutores/crear',$datos);

	}
	public  function crearPost(){
		$listautores = R::dispense('listautores');
		$autores=$_POST['autores'];
		$nombre=$_POST['nombre'];
		$listautores->nombre=$nombre;
		$listautores->listautores=$autores;
		foreach ($autores as $autor){
			
			$listautores->listautores=$autor;
		}
		R::store($listautores);
		R::close();
		}
		
}

?>