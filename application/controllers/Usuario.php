<?php
class Usuario extends CI_Controller{
	public function index()
	{   $this->crear();
	enmarcar($this,'Usuario/crear' );//TODO Esto crea un duplicado del formulario. A lo mejor habría que dejar como función por defecto la vista del perfil y si no hay usuario logueado que aparezca el formulario
	}
	
	public function crear(){
		enmarcar($this,'Usuario/crear');

	}
	
	public function crearPost(){
	    $this->load->model('usuario_model');
	    $nombre = isset($_POST['nombre']) ? $_POST['nombre']: null;
	    $apellido = isset($_POST['apellido']) ? $_POST['apellido']: null;
	    $alias = isset($_POST['alias']) ? $_POST['alias']: null;
	    $pwd = isset($_POST['contrasena']) ? $_POST['contrasena']: null;
	    $rol = isset($_POST['nombre']) ? $_POST['rol']: null;
	    $email = isset($_POST['nombre']) ? $_POST['email']: null;
	    $edad = isset($_POST['nombre']) ? $_POST['edad']: null;
	    
	    try{
	        $this -> usuario_model -> create_usuario($nombre,$apellido, $alias, $pwd, $rol, $email, $edad);
	        header('Location:'.base_url().'usuario/crearPOSTok?usuario='.$alias);
	    }catch (Exception $e){
	        header('Location:'.base_url().'usuario/crearPOSTerror?usuario='.$alias);
	    }
	}
	
	public function crearPOSTok(){
	    $datos['body']['usuario']= $_GET['usuario'];
	    enmarcar($this, 'usuario/crearPOSTok', $datos);
	}
	
	public function crearPOSTerror(){
	    $datos['body']['usuario']= $_GET['usuario'];
	    enmarcar($this, 'usuario/crearPOSTerror', $datos);
	}
	
	
	//DEBUG Crear Usuarios dummy. Activar con http://localhost/proyecto/usuario/dummyusuario
	public function dummyusuario(){
	    $this->load->model('usuario_model');
	    
	    try{
	        $this -> usuario_model -> create_usuario('NombreUsu1', 'ApellidoUsu1', 'Usu1', 'pwdUsu1', 'usuario', 'usu1@usuario.usu', '23');
    	    $this -> usuario_model -> create_usuario('NombreUsu2', 'ApellidoUsu2', 'Usu2', 'pwdUsu2', 'usuario', 'usu2@usuario.usu', '23');
    	    $this -> usuario_model -> create_usuario('NombreUsu3', 'ApellidoUsu3', 'Usu3', 'pwdUsu3', 'usuario', 'usu3@usuario.usu', '23');
    	    $this -> usuario_model -> create_usuario('NombreUsu4', 'ApellidoUsu4', 'Usu4', 'pwdUsu4', 'editor', 'usu4@usuario.usu', '23');
    	    $this -> usuario_model -> create_usuario('NombreUsu5', 'ApellidoUsu5', 'Usu5', 'pwdUsu5', 'editor', 'usu5@usuario.usu', '23');
    	    $this -> usuario_model -> create_usuario('NombreUsu6', 'ApellidoUsu6', 'Usu6', 'pwdUsu6', 'editor', 'usu6@usuario.usu', '23');
	    }catch(Exception $e){
	        
	    }
	    
	    
	}
}
?>
