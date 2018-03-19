package org.chupigrupo.spring.editorial.repository;

import org.chupigrupo.spring.editorial.domain.Editorial;
import org.springframework.data.jpa.repository.JpaRepository;

public interface EditorialRepository extends JpaRepository<Editorial, Long> {

}
