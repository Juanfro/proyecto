<?php
session_start();

class Home extends CI_Controller{
	
	public function index(){
		$this->vista();
	}
	
	public function vista(){
		$this->load->model('articulo_model');
		$datos['articulos']=$this->articulo_model->getAll();
		enmarcar($this, 'Home/vista',$datos);
	}
	
	
	
	
}



?>