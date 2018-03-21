package org.chupigrupo.spring.editorial.domain;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

@Entity
public class Opinion {
	@Id
	@GeneratedValue
	private Long id;
	
	private double nota;
	private String critica;
	
	
	public Long getId() {
		return id;
	}
	public void setId(Long id) {
		this.id = id;
	}
	public double getNota() {
		return nota;
	}
	public void setNota(double nota) {
		this.nota = nota;
	}
	public String getCritica() {
		return critica;
	}
	public void setCritica(String critica) {
		this.critica = critica;
	}
	
	

}
