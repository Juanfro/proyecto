<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		
		$this->load->model('articulo_model');
		$datos['articulos']=$this->articulo_model->getAll();
		
		//Datos de Usuario
		/*if(isset($_SESSION['usuario'])){
			$this->load->model('usuario_model');
			$datos['usuario'] = $this->usuario_model->getusuarioPorId($_SESSION['usuario']['id']);
		}*/
		
		$this->load->model('usuario_model');
		$datos['usuario'] = 
			isset($_SESSION['usuario']) ? 
			$this->usuario_model->getusuarioPorId($_SESSION['usuario']['id']) : 
			null;
		
		
		//$this->load->view('welcome_message');
		enmarcar($this, 'home/vista', $datos);
	}
}
