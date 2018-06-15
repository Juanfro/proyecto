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
			document.getElementById('pasaISBN').innerHTML= "ISBN10 Válido";
		}else{
			console.log("InValido");
			document.getElementById('pasaISBN').innerHTML= "ISBN10 Inválido";
		}		
	}
	
	function validacion13(imploded) {
		var suma =0;
		var multiplicador =1;
		
		for(var i=0;i<imploded.length;i++){
			if(i%2==0){
				multiplicador=1;
			}else{
				multiplicador=3;
			}			
			suma += multiplicador*imploded[i];			
		}
		
		console.log(suma);
		
		if(suma%10==0){
			console.log("Valido");
			document.getElementById('pasaISBN').innerHTML= "ISBN13 Válido";
		}else{
			document.getElementById('pasaISBN').innerHTML= "ISBN13 Inválido";
		}
	}

	if (isbn10.test(isbn)) {
		document.getElementById('pasaFormato').innerHTML = 'Formato VÁLIDO.';
		var exploded = isbn.split("-");
		var imploded = exploded.join("");
		console.log(imploded);
		validacion10(imploded);
		
	} else if (isbn13.test(isbn)) {
		document.getElementById('pasaFormato').innerHTML = 'Formato VÁLIDO.';
		var exploded = isbn.split("-");
		var imploded = exploded.join("");		
		validacion13(imploded);
		
	} else {
		document.getElementById('pasaFormato').innerHTML = 'Formato INVÁLIDO. Escribe un ISBN con formato ISBN10 [xx-xxxx-xxx-x] o ISBN13 [xxx-xx-xxxx-xxx-x]';
	}
	
}

function validarEdad(){
	var patronEdad = /\d+/;
	var edad = (document.getElementById('edad').value);
	
	if(!isNaN(edad) && patronEdad.test(edad) && parseInt(edad)==edad && edad>0){
		document.getElementById('pasaEdad').innerHTML = "Edad Correcta";
		document.getElementById('botonEnviar').disabled= false;	
	}else{
		document.getElementById('pasaEdad').innerHTML = "La edad tiene que ser un número entero positivo.";
		document.getElementById('botonEnviar').disabled= true;		
	}
}