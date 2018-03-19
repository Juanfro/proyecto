package org.chupigrupo.spring.editorial.repository;

import org.chupigrupo.spring.editorial.domain.Categoria;
import org.springframework.data.jpa.repository.JpaRepository;

public interface CategoriaRepository extends JpaRepository<Categoria, Long> {

}
