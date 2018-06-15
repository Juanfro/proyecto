<?php
session_start();

class Home extends CI_Controller{
	
	public function index(){
		$this->vista();
	}
	
	public function vista(){
		$this->load->model('articulo_model');
		$datos['articulos']=$this->articulo_model->getAll();
		
		//Datos de Usuario
		/*if(isset($_SESSION['usuario'])){
			$this->load->model('usuario_model');
			$datos['usuario'] = $this->usuario_model->getusuarioPorId($_SESSION['usuario']['id']);
		}*/
		
		$this->load->model('usuario_model');
		$datos['usuario'] = ($_SESSION['usuario']) ? $this->usuario_model->getusuarioPorId($_SESSION['usuario']['id']) : null;
		
		enmarcar($this,'home/vista',$datos);
	}
	
	
	
	
}



?>