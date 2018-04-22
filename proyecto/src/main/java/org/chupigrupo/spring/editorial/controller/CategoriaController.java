package org.chupigrupo.spring.editorial.controller;

import org.chupigrupo.spring.editorial.domain.Categoria;
import org.chupigrupo.spring.editorial.repository.CategoriaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class CategoriaController {
	
	
	@Autowired
	CategoriaRepository crepo;
	
	//Crear
	
	@RequestMapping(value="categoria/crear", method=RequestMethod.GET)
	public String crear(ModelMap m){
		
		m.put("view", "categoria/crear");
	
	return "views/_t/main";
		
	}
	
	@RequestMapping(value="categoria/crear", method=RequestMethod.POST)
	public String crearPost(@RequestParam("nombre") String nombre, ModelMap m ){
		
		Categoria categoria= new Categoria();
		categoria.setNombreCategoria(nombre);
		crepo.save(categoria);
		
		m.put("categoria", nombre);
		m.put("view", "categoria/crearOk");
		
		
		
		return "views/_t/main";
	}
	
	//Fin Crear
	
	/////////////////////////////////////////////////////////
	
	//Listar
	
	@RequestMapping(value="categoria/listar", method=RequestMethod.GET)
	public String listar(ModelMap m){
		
		m.put("categorias", crepo.findAll());
		
		m.put("view", "categoria/listar");
		
		
		return "views/_t/main";
	}
	
	
	//Fin Listar
	///////////////////////////////////////////////////
	
}
