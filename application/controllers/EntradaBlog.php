<?php
class EntradaBlog extends CI_Controller{
	public function index()
	{   $this->crear();
	//enmarcar($this,'EntradaBlog/crear' );
	}
	public function crear(){
		enmarcar($this,'EntradaBlog/crear');

	}
}
?>
