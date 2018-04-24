<?php
class ListaLibros extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'ListaLibros/crear' );
	}
	public function crear(){
		enmarcar($this,'ListaLibros/crear');

	}
}
?>
