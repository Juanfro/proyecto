<?php

class autor_model extends CI_model {

	public function crear($nombre, $pseudonimo) {
		$autor = R::dispense('autor');
		$autor->nombre = $nombre;
		$autor->pseudonimo = $pseudonimo;
		R::store($autor);
		R::close();
	}

	public function getAll($filtro='') {
		return R::find('autor', "nombre like ?", [
			'%' . $filtro . '%'
		]);
	}

	public function getautorPorId($id_autor) {
		return R::load('autor', $id_autor);
	}

	public function modificar($id_autor, $nombre, $pseudonimo) {
		$autor = R::load('autor', $id_autor);
		$autor->nombre = $nombre;
		$autor->pseudonimo = $pseudonimo;
		R::store($autor);
	}

	public function borrar($id_autor) {
		$autor = R::load("autor", $id_autor);
		if ($autor->id != 0) {
			R::trash($autor);
		}
		R::close();
	}
}
?>