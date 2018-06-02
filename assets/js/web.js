/**
 * 
 */

// VALIDACIONES
function validarISBN() {
	// 10 numeros
	// group:2 publisher:4 title:3 check:1
	var isbn10 = /^(([\d]{10})|(\d{2}-\d{4}-\d{3}-\d{1}))$/;

	// 13 numeros
	// ean:3 group:2 publisher:4 title:3 check:1
	var isbn13 = /^((\d{13})|(\d{3}-\d{2}-\d{4}-\d{3})-\d{1})$/;

	var isbn = document.getElementById('isbn').value;

	var patronPasa = (isbn10.test(isbn) | isbn13.test(isbn));

	function validacion10(imploded) {//	1234567890
		var suma = 0;
		for(var i=0;i<imploded.length;i++){
			suma += ((10-i)* imploded[i]);
		}
		
		console.log(suma);
		
		if(suma%11==0){
			console.log("Valido");
		}else{
			console.log("InValido");
		}		
	}
	
	function validacion13() {
		
	}

	if (isbn10.test(isbn)) {
		document.getElementById('pasaFormato').innerHTML = 'Formato VÁLIDO. ISBN10';
		var exploded = isbn.split("-");
		imploded = exploded.join("");
		console.log(imploded);
		validacion10(imploded);
		
	} else if (isbn13.test(isbn)) {
		document.getElementById('pasaFormato').innerHTML = 'Formato VÁLIDO. ISBN13';
		var exploded = isbn.split("-");
		imploded = exploded.join("");
		console.log(imploded);
		validación13(imploded);
		
	} else {
		document.getElementById('pasaFormato').innerHTML = 'Formato INVÁLIDO';
	}

	if (imploded.length == 10) {
		console.log("ISBN10");
	} else if (imploded.length == 13) {
		console.log("ISBN13");
	} else {
		console.log("INVALIDO");
	}
}