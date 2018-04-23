<?php
class Libro extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Libro/crear' );
	}
	public function crear(){
		$this->load->view('Libro/crear');
	
	}
}
?>