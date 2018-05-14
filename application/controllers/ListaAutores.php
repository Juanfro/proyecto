<?php
class ListaAutores extends CI_Controller{
	public function index()
	{   $this->crear();
	
	}
	public function crear(){
		enmarcar($this,'ListaAutores/crear');

	}
}
?>