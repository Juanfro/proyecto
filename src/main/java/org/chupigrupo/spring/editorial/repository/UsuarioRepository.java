package org.chupigrupo.spring.editorial.repository;

import org.chupigrupo.spring.editorial.domain.Usuario;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UsuarioRepository extends JpaRepository<Usuario, Long> {
	
	

}
