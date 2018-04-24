<?php
class libros_model extends CI_model{
	
	public function crear($isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libros=R::dispense('libros');
		$libros->isbn=$isbn;
		$libros->autor=$autor;
		$libros->idioma=$idioma;
		$libros->npalabras=$npalabras;
		$libros->sinopsis=$sinopsis;
		$libros->edicion=$edicion;
		$libros->edadminima=$edadminima;
		R::store($libros);
		R::close();
	}
	
	public  function getAll($filtro){
		return R::find('libros',"autor like ?", ['%' . $filtro . '%']);
		
	
	}
}
?>
