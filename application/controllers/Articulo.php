<?php
class Articulo extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Articulo/crear' );
	}
	public function crear(){
		enmarcar($this,'Articulo/crear');

	}
}
?>
