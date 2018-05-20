<?php
class entradablog_model extends CI_Model{
	
	public function crear($titulo, $contenido, $id_usuario){
		$entrada = R::dispense('entrada');
		$entrada->titulo = $titulo;
		$entrada->contenido = $contenido;
		
		$usuario = R::findOne('usuario', 'id =?', [$id_usuario]);
		$entrada->usuarioautor = $usuario;
		
		//Cargar el blog cuyo ID es blog_ID del usuario
		$id_blog=$usuario->blog_id;		
		$blog = R::findOne('blog', 'id =?', [$id_blog]);
		$entrada->blog = $blog;
		
		R::store($entrada);
		R::close();
	}
}