<?php

class Usuario_model extends CI_Model
{

    public function create_usuario($nombre, $apellido, $alias, $pwd, $rol, $email, $edad)
    {
        $usuario = R::findOne('usuario', 'alias=?', [$alias]);
        
        if ($usuario == null) { // Comprobar que no existe un usuario con le mismo Alias
            
            $usuario = R::dispense('usuario');
            
            // Datos
            $usuario->nombre = $nombre;
            $usuario->apellido = $apellido;
            $usuario->alias = $alias;
            $usuario->password = $pwd;
            $usuario->rol = $rol;
            $usuario->email = $email;
            $usuario->edad = $edad;
            
            //Blog Personal
            
            $blog = R::dispense('blog');
            $blog->nombre ='Blog de ' . $alias;
            R::store($blog);
            
            $usuario->blog = $blog;
            
            R::store($usuario);
        } else {
            throw new Exception("usuario duplicado");
        }
        R::close();
    }
    public function getUsuarioPorNombre($nombre){
    	
    	$usuario = R::findOne('usuario', 'alias =?', [$nombre]);
    	$usuarioId = $usuario->id;
    	return $usuarioId;
    	//RETORNA EL ID DEL USUARIO
    	
    	//return R::findOne('usuario','nombre  =?',[$nombre]);
    }
    
    public function getRolUsuario($alias){
    	$usuario = R::findOne('usuario', 'alias =?', [$alias]);
    	$usuarioRol = $usuario->rol;
    	return $usuarioRol;
    }
    
    public function verificar($nombre,$pwd){
    	$ok= false;
    	$usuario= R::findOne('usuario','alias  = ?',[$nombre]);
    	if ($usuario != null && $usuario->password == $pwd){
    		$ok=true;
    	}
    	return $ok;
    }
    public  function getAll($filtro){
    	return R::find('usuario',"nombre like ?",[$filtro.'%']);
    }
}
?>