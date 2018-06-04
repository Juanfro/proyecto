<?php
session_start();

class Valoracion extends CI_Controller{
	public function index()
	{   $this->crear();

	}
	public function crear(){
		$datos['id_libro'] = $_POST['id_libro'];
		enmarcar($this,'Valoracion/crear', $datos);

	}
	public function crearPost(){		//TODO Recibir Id del libro y del usuario que crea la valoracion
		
		//DATOS
		$id_libro= isset($_POST['id_libro']) ? $_POST['id_libro'] : null;
		$id_usuario= isset($_SESSION['usuario']['id']) ? $_SESSION['usuario']['id'] : null;
		$nombreUsuario = isset($_SESSION['usuario']['nombre']) ? $_SESSION['usuario']['nombre'] : null;
		
		$nota=isset($_POST['nota'])?$_POST['nota']:null ;
		$contenido=isset($_POST['contenido'])?$_POST['contenido']:null;
		$this->load->model('valoracion_model');
		$this->valoracion_model->crear($id_libro, $id_usuario, $nota,$contenido);
		enmarcar($this,'Valoracion/crearOK' );
	}

	public function modificar(){


		$this->load->model('valoracion_model');
		$id_valoracion=$_POST['id_valoracion'];
		$datos['valoracion']= $this->valoracion_model->getValoracionPorId($id_valoracion);

		enmarcar($this, 'Valoracion/modificar',$datos);

	}

	public function modificarPost(){


		$nota=$_POST['nota'];
		$contenido=$_POST['contenido'];

		$id_valoracion=$_POST['id_valoracion'];

		$this->load->model('valoracion_model');
		$this->valoracion_model->modificar($id_valoracion,$nota,$contenido);

		enmarcar($this, 'Valoracion/modificarOK');

	}

	public  function borrar (){


		$id_valoracion =$_POST['id_valoracion'];
		$this->load->model('valoracion_model');
		$this->valoracion_model->borrar($id_valoracion);
		enmarcar($this, 'Valoracion/borrarOK');

	}
     
	public function vista(){
		$id_valoracion =$_POST['id_valoracion'];
		$this->load->model('valoracion_model');
		$datos['valoracion']=$this->valoracion_model->getvaloracionPorId($id_valoracion);
		enmarcar($this, 'Valoracion/vista',$datos);
		
	}


	public function listar() {
		$this->load->model('valoracion_model');
		$datos['valoracion']= $this->valoracion_model->getAll();
		enmarcar($this, 'Valoracion/listar', $datos);
	}
	
}
?>