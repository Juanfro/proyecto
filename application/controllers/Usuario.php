<?php
class Usuario extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Usuario/crear' );
	}
	public function crear(){
		enmarcar($this,'Usuario/crear');

	}
}
?>
