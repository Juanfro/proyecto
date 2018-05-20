<?php

class EntradaBlog extends CI_Controller {

	public function index() {
		$this->crear();
		// enmarcar($this,'EntradaBlog/crear' );
	}

	public function crear() {
		enmarcar($this, 'EntradaBlog/crear');
	}
	
	public function crearPost(){
		session_start();
		$this->load->model('entradablog_model');
		
		$titulo = isset($_POST['titulo'])? $_POST['titulo']: null;
		$contenido = isset($_POST['contenido'])? $_POST['contenido']: null;
		$id_usuario = isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		
		try{
			$this->entradablog_model->crear($titulo, $contenido, $id_usuario);
			header('Location:'. base_url().'entradablog/crearPOSTok?titulo='.$titulo.'&contenido='.$contenido);
		}catch(Exception $e){
			
		}
	}
	
	public function crearPOSTok(){
		$datos['body']['titulo']=$_GET['titulo'];
		$datos['body']['contenido']=$_GET['contenido'];
		enmarcar($this, 'EntradaBlog/crearPOSTok', $datos);
	}
}
?>
