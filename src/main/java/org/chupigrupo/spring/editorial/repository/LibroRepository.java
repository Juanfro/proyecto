package org.chupigrupo.spring.editorial.repository;

import org.chupigrupo.spring.editorial.domain.Libro;
import org.springframework.data.jpa.repository.JpaRepository;

public interface LibroRepository extends JpaRepository<Libro, Long> {

}
