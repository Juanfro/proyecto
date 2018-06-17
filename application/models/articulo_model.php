<?php
 class articulo_model extends CI_Model{
     public function create_articulo($titulo, $contenido, $idUsuario, $id_autores, $id_libros){
         
		$articulo = R::dispense('articulo');		
	
		//Datos
		$articulo->titulo=$titulo;
		$articulo->contenido=$contenido;
		$articulo->fecha=date("Y-m-d H:i:s");
		
		//Autor: El usuario que escribe el artículo
		$usuarioAutor = R::findOne('usuario', 'id =?', [$idUsuario]);
		$articulo->usuario = $usuarioAutor;
		
		//Autores mencionados
		if($id_autores!=null){
			foreach ($id_autores as  $id_autor){
				$autor = R::load('autor', $id_autor);
				$articulo->sharedAutorList[] = $autor;
			}
		}
		
		R::store($articulo);
		
		//Libros Mencionados
		if ($id_libros!=null){
			foreach ($id_libros as $id_libro){
				$libro = R::load('libro', $id_libro);
				$articulo->sharedLibroList[] = $libro;
			}
		}		
         
		R::store($articulo);
		         
		R::close();
     }
     
     public function getAll(){
     	
     	return R::findAll('articulo');
     }
     
     public function getArticuloPorId($id_articulo){
     	return R::load('articulo',$id_articulo);
     }
     
     
     public function modificar($id_articulo,$titulo,$contenido){
     	$articulo=R::load('articulo',$id_articulo);
     	
     	$articulo->titulo=$titulo;
     	$articulo->contenido=$contenido;
     	
     	R::store($articulo);
     }
     public function borrar($id_articulo){
     	
     	$articulo=R::load('articulo',$id_articulo);
     	if($articulo->id !=0){
     		R::trash($articulo);
     	}
     	R::close();
     }
     
     
 }