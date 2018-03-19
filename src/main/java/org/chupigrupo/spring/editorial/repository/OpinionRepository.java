package org.chupigrupo.spring.editorial.repository;

import org.chupigrupo.spring.editorial.domain.Opinion;
import org.springframework.data.jpa.repository.JpaRepository;

public interface OpinionRepository extends JpaRepository<Opinion, Long> {

}
