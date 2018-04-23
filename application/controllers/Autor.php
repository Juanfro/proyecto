
<?php
class Autor extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Autores/crear' );
	}
	public function crear(){
		$this->load->view('Autores/crear');

	}
}
?>