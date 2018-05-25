<?php

class Usuario extends CI_Controller {

	public function index() {
		$this->crear();
		// enmarcar($this,'Usuario/crear' );//TODO Esto crea un duplicado del formulario. A lo mejor habría que dejar como función por defecto la vista del perfil y si no hay usuario logueado que aparezca el formulario
	}

	public function crear() {
		enmarcar($this, 'Usuario/crear');
	}

	public function loginPost() {
		$nombre = $_POST['nombre'];
		$pwd = $_POST['pwd'];
		
		$this->load->model('usuario_model');
		$ok = $this->usuario_model->verificar($nombre, $pwd);
		
		if ($ok) {
			session_start();//Al princpio?
			$usuarioId = $this->usuario_model->getUsuarioPorNombre($nombre);

			$_SESSION['usuario']['id'] = $usuarioId;
			$usuarioRol = $this->usuario_model->getRolUsuario($nombre);
			$_SESSION['usuario']['rol'] = $usuarioRol;
			$_SESSION['usuario']['nombre'] = $nombre;
			//$_SESSION['usuario']['nombre'] = $usuario->nombre;
			//$_SESSION['usuario']['apellido'] = $usuario->apellido;
			//header('Location:' . base_url() . 'usuario/loginOk');
			enmarcar($this, 'usuario/loginOk');
		} else {
			enmarcar($this, 'usuario/loginError');
		}
	}

	
	
	public function crearPost() {
		$this->load->model('usuario_model');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
		$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
		$alias = isset($_POST['alias']) ? $_POST['alias'] : null;
		$pwd = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;
		$rol = isset($_POST['rol']) ? $_POST['rol'] : null;
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$edad = isset($_POST['edad']) ? $_POST['edad'] : null;
		
		try {
			$this->usuario_model->create_usuario($nombre, $apellido, $alias, $pwd, $rol, $email, $edad);
			header('Location:' . base_url() . 'usuario/crearPOSTok?usuario=' . $alias);
		} catch (Exception $e) {
			header('Location:' . base_url() . 'usuario/crearPOSTerror?usuario=' . $alias);
		}
	}

	public function crearPOSTok() {
		$datos['body']['usuario'] = $_GET['usuario'];
		enmarcar($this, 'usuario/crearPOSTok', $datos);
	}

	public function crearPOSTerror() {
		$datos['body']['usuario'] = $_GET['usuario'];
		enmarcar($this, 'usuario/crearPOSTerror', $datos);
	}
	
	public function perfil(){
		$this->load->model('usuario_model');
		$id_usuario = $_POST['id_usuario'];
	
		$datos['usuario'] = $this->usuario_model->getusuarioPorId($id_usuario);
	
		enmarcar($this, 'Usuario/perfil',$datos);
	
	}
	

	public function listar() {
		$this->listarPost();
	}

	public function listarPost($f = '') {
		$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
		
		$this->load->model('usuario_model');
		$datos['usuario'] = $this->usuario_model->getAll($filtro);
		enmarcar($this, 'Usuario/listar', $datos);
	}
	
	
	public function modificar(){
		$this->load->model('usuario_model');
		$id_usuario = $_POST['id_usuario'];
		$datos['usuario'] = $this->usuario_model->getusuarioPorId($id_usuario);
	
		enmarcar($this, 'usuario/modificar', $datos);
	}
	public function modificarPost(){
		$nombre =  $_POST['nombre'];
		$apellido =  $_POST['apellido'] ;
		$alias = $_POST['alias'] ;
		$pwd =  $_POST['contrasena'] ;
		$rol =  $_POST['rol'] ;
		$email =  $_POST['email'] ;
		$edad =  $_POST['edad'] ;
	
		$id_usuario=$_POST['id_usuario'];
	
		$this->load->model('usuario_model');
		$this->usuario_model->modificar($id_usuario,$nombre,$apellido,$alias,$pwd,$rol,$email,$edad);
	    $this->listar();
	}
	
	public function borrar(){
		$id_usuario=$_POST['id_usuario'];
		$this->load->model('usuario_model');
		$this->usuario_model->borrar($id_usuario);
		$this->listar();
	}

	// DEBUG Crear Usuarios dummy. Activar con http://localhost/proyecto/usuario/dummyusuario
	public function dummyusuario() {
		$this->load->model('usuario_model');
		
		try {
			$this->usuario_model->create_usuario('NombreAdmin', 'ApeAdmin', 'admin', 'admin', 'administrador', 'admin@istra.dor', 23);
			$this->usuario_model->create_usuario('NombreUsu1', 'ApellidoUsu1', 'Usu1', 'pwdUsu1', 'usuario', 'usu1@usuario.usu', '23');
			$this->usuario_model->create_usuario('NombreUsu2', 'ApellidoUsu2', 'Usu2', 'pwdUsu2', 'usuario', 'usu2@usuario.usu', '23');
			$this->usuario_model->create_usuario('NombreUsu3', 'ApellidoUsu3', 'Usu3', 'pwdUsu3', 'usuario', 'usu3@usuario.usu', '23');
			$this->usuario_model->create_usuario('NombreEditor4', 'ApellidoEditor4', 'Editor4', 'pwdEditor4', 'editor', 'editor4@usuario.usu', '23');
			$this->usuario_model->create_usuario('NombreEditor5', 'ApellidoEditor5', 'Editor5', 'pwdEditor5', 'editor', 'editor5@usuario.usu', '23');
			$this->usuario_model->create_usuario('NombreEditor6', 'ApellidoEditor6', 'Editor6', 'pwdEditor6', 'editor', 'editor6@usuario.usu', '23');
		} catch (Exception $e) {}
	}
}
?>
