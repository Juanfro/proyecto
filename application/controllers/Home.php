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
		$this->load->model('usuario_model');
		
		enmarcar($this, 'home/vista',$datos);
	}
	
	
	
	
}



?>