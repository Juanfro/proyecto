package org.chupigrupo.spring.editorial.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {
	@GetMapping("/")
	public String index (ModelMap m){
		m.put("view", "home/index");
		return "views/_t/main";
	}
	

}
