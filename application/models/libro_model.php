<?php
class libro_model extends CI_model{
	

	private function existeLibro($titulo){
		return R::findOne('libro','titulo=?',[$titulo]) !=null ? true : false;
	}
	public function crear($isbn,$titulo, $autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$status=0;
		if(!$this->existeLibro($titulo)){

	
		//Datos

		$libro=R::dispense('libro');
		$libro->isbn=$isbn;
		$libro->titulo=$titulo;
		//$libro->autor=$ids_autor; TODO  Cómo listar El autor en libros?
		$libro->idioma=$idioma;
		$libro->npalabras=$npalabras;
		$libro->sinopsis=$sinopsis;
		$libro->edicion=$edicion;
		$libro->edadminima=$edadminima;
		
		//el ids_autor falla
		foreach($ids_autor as $id_autor){
			$autor= R::load('autor', $id_autor);
			$libro->sharedAutorList[] = $autor;
		}		
		
		R::store($libro);
		R::close();
		}
		else {
			$status = -1;
		}
		return $status;
	}
	
	public  function getAll($filtro){
		return R::find('libro',"titulo like ?", [$filtro . '%']);	//TODO Filtrar Por título. Según está busca un autor y no está en esta tabla.
	}
	
	public function getlibroPorId($id_libro){
      return R::load('libro',$id_libro);
		
	}
	public function modificar($id_libro,$isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libro= R::load('libro',$id_libro);
		
		$libro->isbn=$isbn;
		$libro->autor=$autor;
		$libro->idioma=$idioma;
		$libro->npalabras=$npalabras;
		$libro->sinopsis=$sinopsis;
		$libro->edicion=$edicion;
		$libro->edadminima=$edadminima;
		
		R::store($libro);
		
	}
	
	public function borrar($id_libro){
		$libro= R::load('libro',$id_libro);
		
		if($libro->id !=0){
			R::trash($libro);
		}
		R::close();
		
	}
}
?>
