<?php

class Usuario_model extends CI_Model
{

    public function create_usuario($nombre, $apellido, $alias, $pwd, $rol, $email, $edad)
    {
        $usuario = R::findOne('usuario', 'alias=?', [
            $alias
        ]);
        
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
            
            R::store($usuario);
        } else {
            throw new Exception("usuario duplicado");
        }
        R::close();
    }
}
?>