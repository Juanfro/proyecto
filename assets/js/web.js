/**
 * 
 */

function validarISBN(){
	//10 numeros
	//group:2 	publisher:4		title:3 	check:1	
	var isbn10 =/^(([\d]{10})|(\d{2}\d{4}\d{3}\d{1}))$/;
	
	//13 numeros
	//ean:3		group:2 		publisher:4		title:3 	check:1	
	var isbn13=/^((\d{13})|(\d{3}-\d{2}-\d{4}-\d{3})-\d{1})$/;
}