<?php
class Pais extends CI_Controller{
    /*public function index(){
        $this->crear();
    }*/
    
    //ORDEN DE CREACIÓN DE TABLAS
    /*
    1.USUARIOS
    2.PAIS
    3.AUTORES
    4.GÉNEROS
    5.LIBROS
    6.VALORACIONES
    7.ARTICULOS
    8.COMENTARIOS
    9.LISTAS LIBROS
    10.LISTAS AUTORES
    */
	
	public function creaUsuario(){
		$this->load->model('usuario_model');
		
		$this->usuario_model->create_usuario('AdministradorNombre', 'AdministradorAlias', 'Admin', 'admin', 'administrador', 'admin@istra.dor', 29 );
		$this->usuario_model->create_usuario('Editor1Nombre', 'Editor1Alias', 'Editor1', 'editor', 'editor', 'edi@tor.tor', 29 );
		$this->usuario_model->create_usuario('Editor2Nombre', 'Editor2Alias', 'Editor2', 'editor', 'editor', 'edi@tor.tor', 29 );
		$this->usuario_model->create_usuario('Editor3Nombre', 'Editor3Alias', 'Editor3', 'editor', 'editor', 'edi@tor.tor', 29 );
		$this->usuario_model->create_usuario('Usuario1Nombre', 'Usuario1Alias', 'Usuario1', 'usuario', 'usuario', 'usu@ar.io', 29 );
		$this->usuario_model->create_usuario('Usuario2Nombre', 'Usuario2Alias', 'Usuario2', 'usuario', 'usuario', 'usu@ar.io', 29 );
		$this->usuario_model->create_usuario('Usuario3Nombre', 'Usuario3Alias', 'Usuario3', 'usuario', 'usuario', 'usu@ar.io', 29 );
	}
	
	public function creaPais(){
		$this->load->model('pais_model');
			
		$this ->pais_model ->create_pais('Afganistán');
		$this ->pais_model ->create_pais('Albania');
		$this ->pais_model ->create_pais('Alemania');
		$this ->pais_model ->create_pais('Andorra');
		$this ->pais_model ->create_pais('Angola');
		$this ->pais_model ->create_pais('Antigua y Barbuda');
		$this ->pais_model ->create_pais('Arabia Saudita ');
		$this ->pais_model ->create_pais('Argelia');
		$this ->pais_model ->create_pais('Argentina');
		$this ->pais_model ->create_pais('Armenia');
		$this ->pais_model ->create_pais('Australia');
		$this ->pais_model ->create_pais('Austria');
		$this ->pais_model ->create_pais('Azerbaiyán');
		$this ->pais_model ->create_pais('Bahamas');
		$this ->pais_model ->create_pais('Bangladés');
		$this ->pais_model ->create_pais('Barbados');
		$this ->pais_model ->create_pais('Baréin');
		$this ->pais_model ->create_pais('Bélgica');
		$this ->pais_model ->create_pais('Belice');
		$this ->pais_model ->create_pais('Benín');
		$this ->pais_model ->create_pais('Bielorrusia');
		$this ->pais_model ->create_pais('Birmania');
		$this ->pais_model ->create_pais('Bolivia');
		$this ->pais_model ->create_pais('Bosnia y Herzegovina');
		$this ->pais_model ->create_pais('Botsuana');
		$this ->pais_model ->create_pais('Brasil');
		$this ->pais_model ->create_pais('Brunéi');
		$this ->pais_model ->create_pais('Bulgaria');
		$this ->pais_model ->create_pais('Burkina Faso');
		$this ->pais_model ->create_pais('Burundi');
		$this ->pais_model ->create_pais('Bután');
		$this ->pais_model ->create_pais('Cabo Verde');
		$this ->pais_model ->create_pais('Camboya');
		$this ->pais_model ->create_pais('Camerún');
		$this ->pais_model ->create_pais('Canadá');
		$this ->pais_model ->create_pais('Catar');
		$this ->pais_model ->create_pais('Chad');
		$this ->pais_model ->create_pais('Chile');
		$this ->pais_model ->create_pais('China');
		$this ->pais_model ->create_pais('Chipre');
		$this ->pais_model ->create_pais('Ciudad del Vaticano');
		$this ->pais_model ->create_pais('Colombia');
		$this ->pais_model ->create_pais('Comoras');
		$this ->pais_model ->create_pais('Corea del Norte');
		$this ->pais_model ->create_pais('Corea del Sur');
		$this ->pais_model ->create_pais('Costa de Marfil');
		$this ->pais_model ->create_pais('Costa Rica');
		$this ->pais_model ->create_pais('Croacia');
		$this ->pais_model ->create_pais('Cuba');
		$this ->pais_model ->create_pais('Dinamarca');
		$this ->pais_model ->create_pais('Dominica');
		$this ->pais_model ->create_pais('Ecuador');
		$this ->pais_model ->create_pais('Egipto');
		$this ->pais_model ->create_pais('El Salvador');
		$this ->pais_model ->create_pais('Emiratos Árabes Unidos');
		$this ->pais_model ->create_pais('Eritrea');
		$this ->pais_model ->create_pais('Eslovaquia');
		$this ->pais_model ->create_pais('Eslovenia');
		$this ->pais_model ->create_pais('España');
		$this ->pais_model ->create_pais('Estados Unidos');
		$this ->pais_model ->create_pais('Estonia');
		$this ->pais_model ->create_pais('Etiopía');
		$this ->pais_model ->create_pais('Filipinas');
		$this ->pais_model ->create_pais('Finlandia');
		$this ->pais_model ->create_pais('Fiyi');
		$this ->pais_model ->create_pais('Francia');
		$this ->pais_model ->create_pais('Gabón');
		$this ->pais_model ->create_pais('Gambia');
		$this ->pais_model ->create_pais('Georgia');
		$this ->pais_model ->create_pais('Ghana');
		$this ->pais_model ->create_pais('Granada');
		$this ->pais_model ->create_pais('Grecia');
		$this ->pais_model ->create_pais('Guatemala');
		$this ->pais_model ->create_pais('Guyana');
		$this ->pais_model ->create_pais('Guinea');
		$this ->pais_model ->create_pais('Guinea ecuatorial');
		$this ->pais_model ->create_pais('Guinea-Bisáu');
		$this ->pais_model ->create_pais('Haití');
		$this ->pais_model ->create_pais('Honduras');
		$this ->pais_model ->create_pais('Hungría');
		$this ->pais_model ->create_pais('India');
		$this ->pais_model ->create_pais('Indonesia');
		$this ->pais_model ->create_pais('Irak');
		$this ->pais_model ->create_pais('Irán');
		$this ->pais_model ->create_pais('Irlanda');
		$this ->pais_model ->create_pais('Islandia');
		$this ->pais_model ->create_pais('Islas Marshall');
		$this ->pais_model ->create_pais('Islas Salomón');
		$this ->pais_model ->create_pais('Israel');
		$this ->pais_model ->create_pais('Italia');
		$this ->pais_model ->create_pais('Jamaica');
		$this ->pais_model ->create_pais('Japón');
		$this ->pais_model ->create_pais('Jordania');
		$this ->pais_model ->create_pais('Kazajistán');
		$this ->pais_model ->create_pais('Kenia');
		$this ->pais_model ->create_pais('Kirguistán');
		$this ->pais_model ->create_pais('Kiribati');
		$this ->pais_model ->create_pais('Kuwait');
		$this ->pais_model ->create_pais('Laos');
		$this ->pais_model ->create_pais('Lesoto');
		$this ->pais_model ->create_pais('Letonia');
		$this ->pais_model ->create_pais('Líbano');
		$this ->pais_model ->create_pais('Liberia');
		$this ->pais_model ->create_pais('Libia');
		$this ->pais_model ->create_pais('Liechtenstein');
		$this ->pais_model ->create_pais('Lituania');
		$this ->pais_model ->create_pais('Luxemburgo');
		$this ->pais_model ->create_pais('Madagascar');
		$this ->pais_model ->create_pais('Malasia');
		$this ->pais_model ->create_pais('Malaui');
		$this ->pais_model ->create_pais('Maldivas');
		$this ->pais_model ->create_pais('Malí');
		$this ->pais_model ->create_pais('Malta');
		$this ->pais_model ->create_pais('Marruecos');
		$this ->pais_model ->create_pais('Mauricio');
		$this ->pais_model ->create_pais('Mauritania');
		$this ->pais_model ->create_pais('México');
		$this ->pais_model ->create_pais('Micronesia');
		$this ->pais_model ->create_pais('Moldavia');
		$this ->pais_model ->create_pais('Mónaco');
		$this ->pais_model ->create_pais('Mongolia');
		$this ->pais_model ->create_pais('Montenegro');
		$this ->pais_model ->create_pais('Mozambique');
		$this ->pais_model ->create_pais('Namibia');
		$this ->pais_model ->create_pais('Nauru');
		$this ->pais_model ->create_pais('Nepal');
		$this ->pais_model ->create_pais('Nicaragua');
		$this ->pais_model ->create_pais('Níger');
		$this ->pais_model ->create_pais('Nigeria');
		$this ->pais_model ->create_pais('Noruega');
		$this ->pais_model ->create_pais('Nueva Zelanda');
		$this ->pais_model ->create_pais('Omán');
		$this ->pais_model ->create_pais('Países Bajos');
		$this ->pais_model ->create_pais('Pakistán');
		$this ->pais_model ->create_pais('Palaos');
		$this ->pais_model ->create_pais('Panamá');
		$this ->pais_model ->create_pais('Papúa Nueva Guinea');
		$this ->pais_model ->create_pais('Paraguay');
		$this ->pais_model ->create_pais('Perú');
		$this ->pais_model ->create_pais('Polonia');
		$this ->pais_model ->create_pais('Portugal');
		$this ->pais_model ->create_pais('Reino Unido');
		$this ->pais_model ->create_pais('República Centroafricana');
		$this ->pais_model ->create_pais('República Checa');
		$this ->pais_model ->create_pais('República de Macedonia');
		$this ->pais_model ->create_pais('República del Congo');
		$this ->pais_model ->create_pais('República Democrática del Congo');
		$this ->pais_model ->create_pais('República Dominicana');
		$this ->pais_model ->create_pais('República Sudafricana');
		$this ->pais_model ->create_pais('Ruanda');
		$this ->pais_model ->create_pais('Rumanía');
		$this ->pais_model ->create_pais('Rusia');
		$this ->pais_model ->create_pais('Samoa');
		$this ->pais_model ->create_pais('San Cristóbal y Nieves');
		$this ->pais_model ->create_pais('San Marino');
		$this ->pais_model ->create_pais('San Vicente y las Granadinas');
		$this ->pais_model ->create_pais('Santa Lucía');
		$this ->pais_model ->create_pais('Santo Tomé y Príncipe');
		$this ->pais_model ->create_pais('Senegal');
		$this ->pais_model ->create_pais('Serbia');
		$this ->pais_model ->create_pais('Seychelles');
		$this ->pais_model ->create_pais('Sierra Leona');
		$this ->pais_model ->create_pais('Singapur');
		$this ->pais_model ->create_pais('Siria');
		$this ->pais_model ->create_pais('Somalia');
		$this ->pais_model ->create_pais('Sri Lanka');
		$this ->pais_model ->create_pais('Suazilandia');
		$this ->pais_model ->create_pais('Sudán');
		$this ->pais_model ->create_pais('Sudán del Sur');
		$this ->pais_model ->create_pais('Suecia');
		$this ->pais_model ->create_pais('Suiza');
		$this ->pais_model ->create_pais('Surinam');
		$this ->pais_model ->create_pais('Tailandia');
		$this ->pais_model ->create_pais('Tanzania');
		$this ->pais_model ->create_pais('Tayikistán');
		$this ->pais_model ->create_pais('Timor Oriental');
		$this ->pais_model ->create_pais('Togo');
		$this ->pais_model ->create_pais('Tonga');
		$this ->pais_model ->create_pais('Trinidad y Tobago');
		$this ->pais_model ->create_pais('Túnez');
		$this ->pais_model ->create_pais('Turkmenistán');
		$this ->pais_model ->create_pais('Turquía');
		$this ->pais_model ->create_pais('Tuvalu');
		$this ->pais_model ->create_pais('Ucrania');
		$this ->pais_model ->create_pais('Uganda');
		$this ->pais_model ->create_pais('Uruguay');
		$this ->pais_model ->create_pais('Uzbekistán');
		$this ->pais_model ->create_pais('Vanuatu');
		$this ->pais_model ->create_pais('Venezuela');
		$this ->pais_model ->create_pais('Vietnam');
		$this ->pais_model ->create_pais('Yemen');
		$this ->pais_model ->create_pais('Yibuti');
		$this ->pais_model ->create_pais('Zambia');
		$this ->pais_model ->create_pais('Zimbabue');
	}
	
	public function creaAutor(){
		$this->load->model('autor_model');
		
		$this->autor_model->crear('Frank Herbert', 'Frank Herbert', 60, 'Nació en Tacoma, Washington. Trabajó en múltiples trabajos como fotógrafo, cámara de televisión, presentador de radio, incluso de pescador de ostras o analista. En 1965 presenta Dune con gran éxito de público y crítica, consigue el premio Hugo y el premio Nébula además del premio Internacional de Fantasía (junto con la novela: El señor de las moscas). Después ampliaría esta novela con otras cinco más hasta su muerte, continuando otros escritores con otros títulos pero con la misma referencia. Gran parte de su obra refleja su interés por la ecología y la psicología. En sus últimos veinte años y junto con su familia residieron en una «granja biológica», primero cerca de Washington y más tarde en Hawái, viviendo de forma autosuficiente y en pleno contacto con la naturaleza.', 1920);
		$this->autor_model->crear('Terry Pratchett', 'Terry Pratchett', 142, 'Terry Pratchett nació en 1948 y falleció en 2015. Inició su labor como periodista un día de 1965 y vio su primer cadáver tres horas más tarde; la experiencia laboral significaba algo en aquellos tiempos. Después de realizar cualquier labor posible en el periodismo provincial, excepto, por supuesto, cubrir el partido de fútbol del sábado por la tarde, empezó a trabajar para la Central Electricity Generating Board y se convirtió en el jefe de prensa de cuatro plantas de energía nuclear. Hubiera escrito un libro sobre sus experiencias si alguien las hubiera podido creer. Todo esto terminó en 1987, cuando estaba claro que la serie del Mundodisco resultaba mucho más divertida que el trabajo de verdad. Desde entonces sus libros han alcanzado cifras millonarias de tirada y han ocupado un lugar en las listas de los más vendidos. También escribe libros para jóvenes lectores y ocasionalmente se le acusa de literato. Terry Pratchett vivió en Wiltshire con su esposa Lyn y su hija Rhianna, y opinaba que la escritura es lo más divertido que uno puede hacer por su cuenta.', 1948);
		$this->autor_model->crear('J.K. Rowling', 'J.K. Rowling', 142, 'Joanne "Jo" Rowling (nacida en Yate, Reino Unido, 31 de julio de 1965), mejor conocida como J. K. Rowling,[1][2] es la autora británica de la historia fantástica de Harry Potter, el niño mago huérfano. Nació en Chipping Sodburry, South Gloucestershire.Su editor, Bloomsbury, quiso que ella utilizara sus iniciales en la portada de los libros de Harry Potter, indicando que un nombre femenino en la portada atraería menos el interés de los niños, por lo que decidió utilizar el nombre de su abuela paterna "Kathleen".En febrero de 2004, la revista Forbes indicó que la fortuna de Rowling ascendía a 576 millones de libras esterlinas, convirtiéndose en la primera persona en hacerse millonaria escribiendo libros. Es la mujer más rica del Reino Unido, y mucho más rica que la reina Isabel II.', 1965);
		$this->autor_model->crear('J.R.R Tolkien', 'J.R.R Tolkien', 142, 'Nació el 3 de Enero de 1892 en la ciudad de Bloemfestein de "Orange Free State", África.Hijo del banquero Arthr Reuel Tolkien y de la misionera Mabel Suffield.Se mudaron a Sarehole, pueblo rural a las afueras de Birmingham donde Tolkien vivió hasta 1903. Su madre le enseñó las bases académicas (Latín, Griego, Matemáticas y Literatura Romántica).Fue un estudiante perezoso. Su madre también lo introdujo en la fantasía o Faery-stories, cuya favorita era el informe sobre la búsqueda del Rey Arturo de Mallory. Cuando tenía cuatro años perdió a su padre, que no pudo sobrevivir a un ataque de fiebre, y a los 12 a su madre, enferma de diabetes. Al quedar huérfano, él y su hermano, dos años menor, quedaron bajo la tutela de un sacerdote medio español y medio galés llamado Francis Morgan.A los 16 años conoció a la que sería la mujer de su vida, Edith Bratt, tres años mayor que él y también huérfana de padre y madre. El sacerdote prohibió la relación hasta que fuera mayor de edad. Esperó y, poco después de cumplir los 21 años, se prometió con ella. Cuando tenía 24 años se casó con Edith, tuvieron cuatro hijos y su matrimonio duró 55 años.Nada más casarse partió hacia el frente en la I Guerra Mundial, donde cayó enfermo y fue repatriado.Se especializó en historia medieval y dio clases de literatura inglesa medieval en la Universidad de Oxford. Sus conocimientos resultan evidentes en sus obras de carácter épico, que se desarrollan en un mundo fantástico creado por él mismo y llamadoMiddle Earth.Escribió El Hobbit (1937) para sus hijos. A principios de los años 30, cuando estaba corrigiendo exámenes de sus alumnos apareció uno totalmente en blanco. Años después diría: "Uno de los estudiantes fue compasivo y me dejó uno de los exámenes en blanco, una de las mejores cosas que pueden sucederle a un profesor". La página inmaculada parecía invitarle a escribir y garabateó: "En un agujero en la tierra vive un hobbit". Esta sería la semilla de su primera obra, que terminó en 1937.Su continuación, la trilogía titulada El señor de los anillos es un cuento acerca de la lucha por la posesión de un anillo mágico en un mundo de elfos, hadas y dragones. Empezó a escribirse poco después de la publicación de El Hobbit, tal como se lo sugirieron los editores Allen y Unwin. Tolkien empleó 12 años en escribir su ambiciosa obra sobre la búsqueda del anillo del poder y de la eterna lucha entre el bien y el mal. La publicación de los dos primeros volúmenes no se llevó a cabo hasta el 1954. Es una larga historia que se divide en tres volúmenes: La comunidad del anillo, Las dos torres y El retorno de rey. El Silmarillion (1977), que relata los comienzos mitológicos de Middle Earth, y Relatos incompletos (1980), que contiene cuentos que no se incluyeron en sus otros libros, fue recopilado y publicado por su hijo, Christopher Tolkien.Llevó a cabo estudios de crítica literaria y fue profesor en Oxford entre 1945 y 1959, donde coincidió con C.S. Lewis que cultivaba el mismo género y hasta los mismos temas, aunque la amistad decayó por los celos que sentía Lewis del éxito literario de Tolkien. En 1954, recibió el honorario de Doctor en Letras por el University College en Dublín y la Universidad de Lieja en Bélgica, elegido vicepresidente de la Sociedad Filológica de gran Bretaña y galardonado como miembro honorario en la Sociedad Islándica. En 1957, las Universidades de Harvard y Marquette le otorgaron grados honorarios. También en ese año, ganó el premio a la mejor novela fantástica de 1956 en la Convención Mundial de Ciencia Ficción y en 1958 ganó el puesto honorario del Merton College.Por el tiempo de El Señor de los Anillos alcanzó la cima de la popularidad, durante esa época fue algo bueno, pero en su vejez, Tolkien odiaba las llamadas telefónicas a altas horas de la noche, la multitud de visitantes no invitados, las toneladas de correo y la pérdida de su privacidad que empezaron a ser una plaga para él y su familia. En 1968, él y su mujer se trasladaron a Bournemouth, usando un alias para proteger su privacidad.Su mujer Edith Mary murió el 2 de Noviembre de 1971. John R. R. Tolkien se mudó a un apartamento propiedad de la Universidad de Oxford y allí vivió hasta su fallecimiento el 2 de Septiembre de 1973 a la edad de 81 años. Sin embargo, justo antes de morir, fue premiado miembro de la Orden del Imperio Británico por la Reina Isabel, uno de los premios más prestigiosos de Inglaterra. ', 1920);
		$this->autor_model->crear('Douglas Adams', 'Douglas Adams', 142, 'A la edad de siete años, Adams se mudó a Brentwood (Essex) con su madre tras el divorcio de sus padres. Allí creció junto a su hermana Sue. En 1964, su madre volvió a casarse. De ese matrimonio nacieron los medio hermanos de Adams, Heather, Jane y James.En 1969 ingresó en la Brentwood-School en Essex, donde comenzó a interesarse por las ciencias naturales. Fue en esta época cuando empezó a escribir textos que recibieron el apoyo de sus profesores y con los que ganó algún premio literario menor. Su primera publicación —una revista juvenil de ciencia ficción— fue una historia breve en tono de humor sobre un hombre que pierde su conciencia en el Metro de Londres y la encuentra en la oficina de objetos perdidos.Más tarde estudió filología inglesa en la Universidad de Cambridge, donde participó en el grupo de teatro cómico CULES. Durante sus estudios trabajó como becario para poderse costear un largo viaje por Europa, incluida Turquía. Fue en uno de estos viajes donde tuvo la idea de su obra más famosa, la Guía del autoestopista galáctico, que le vino cuando estaba en un prado en Innsbruck leyendo un libro sobre el autoestopismo por Europa.', 1952);
		$this->autor_model->crear('George R.R. Martin', 'George R.R. Martin', 60, 'Nació el 20 de septiembre de 1948 en Bayonne, Nueva Jersey.Hijo del estibador Raymond Collins Martin y Margaret Brady Martin. Tiene dos hermanas más jóvenes, Darleen y Janet. Su padre era de ascendencia italiana y su madre con ascendencia irlandesa. Además tiene raíces francesas, inglesas, galesas y alemanas.Desde muy joven se inició en la lectura y no tardó en empezar a escribir sus propios relatos, historias de monstruos que vendía a niños del vecindario. George tomó el nombre adicional de Richard cuando fue confirmado a la edad de 13 años, convirtiendo su nombre en en George R. R. Martin.Estudió periodismo en la Northwestern University de Evanston, Illinois, donde se graduó en 1971. Realizó la prestación social sustitutoria al ser objetor de conciencia, después dio clases de periodismo en el instituto Clarke de Dubuque, Iowa entre 1976 y 1978. También trabajó cuatro veranos como escritor de deportes, cubriendo el béisbol.En los años 70, escribió muchas obras cortas de ficción y With Morning Comes Mistfall, fue la primera que recibiría el premio Hugo Award and Nebula Awards. Posteriormente aparecen sus sus primeras novelas siendo la primera una de las más populares Dying of the Light (1977). Se dedicó exclusivamente a la literatura mezclando terror, ciencia ficción y fantasía. Empezó a trabajar como guionista tras las bajas ventas de su cuarta novela The Armageddon Rag (1983). Después de esto nadie quería publicar su quinta obra.Escribió para series de televisión como The Twilight Zone (1986) y The Beauty and the Beast (1987) y fue editor de la serie sobre la Segunda Guerra Mundial, Wild Cards. En 1987, apareció Tuf Voyaging, colección de relatos dedicados a la ciencia ficción y considerada una de sus obras más destacadas.En 1996, Se retiró a Santa Fe (Nuevo México), donde inició la novela Juego de tronos (A Game of Thrones, 1996), primera de la serie A Song of Ice y Fire, por la que tuvo buena crítica y buenas ventas. Estuvo en la lista de los más vendidos del New York Times con A Clash of Kings y vendieron más de 60 millones volúmenes de la saga en 45 idiomas. HBO compró los derechos de televisión de toda la serie en 2007 y comenzó a transmitir la serie en Estados Unidos desde el 17 de abril de 2011 con el título de Game of Thrones. La primera temporada fue nominada para 13 Emmy Awards.En 2013, compró el cine Jean Cocteau de Santa Fe, que en 2014 se convirtió en uno de los más importantes cines independientes de Estados Unidos. También adquirió el Coffee House, donde se han realizando exposiciones itinerantes de arte y otros proyectos.George R. R. Martin es un experto jugador de ajedrez que dirigió torneos para la asociación continental de 1973 a 1976.Estuvo casado con Gale Burnick de 1975 a 1979. En 2011 contrajo matrimonio con Parris McBride. ', 1948);
		$this->autor_model->crear('Julio Verne', 'Julio Verne', 66, "Nació el 8 de febrero de 1828 en Nantes (Francia).Fue el mayor de los cinco hijos del matrimonio formado por Pierre Verne, abogado, y de Sophie Allote de la Füye de una familia de navegantes y armadores de ascendencia escocesa. En1840, se trasladan a Chantenay, cerca de Nantes.Fue un joven rebelde y propenso a la aventura. Desde muy pronto siente inclinación por los viajes. Intenta fugarse en un navío hacia la India cuando cuenta once años; su padre consigue detenerle en el mismo barco y le aplica un severo castigo: azotado con un látigo y encerrado a pan y agua. Pero lo que más le duele es la promesa que se le obliga a pronunciar: nunca pretenderá viajar más que con la imaginación.1844, asiste el Liceo Real de Nantes y comienza a escribir pequeños poemas en prosa. Cursó estudios de leyes en París.En 1856, conoce a Honorine Hebe du Fraysse de Viane, joven viuda con dos hijas, con la que contrajo matrimonio el 10 de enero 1857 y con la que tuvo a su hijo Michel Verne, tras establecerse en París como agente de bolsa.Entre 1848 y 1863 se dedicó a escribir libretos de ópera y obras de teatro. En 1850, estrenó con poco éxito, Las pajas rotas, dirigida por su protector Dumas. Aparecen en la revista Le Musée des Familles sus primeras historias cortas: Los primeros navíos de la marina mexicana y Un viaje en globo. En1852, decide consagrase a las letras, rechazando la sucesión en el bufete de su padre. Es nombrado Secretario del Teatro Lírico. En 1859, viajó por Inglaterra y Escocia, lo que le inspiró para escribir Viaje con rodeos a Inglaterra y Escocia. Funda la Sociedad para la Investigación Aérea en 1862, y enése mismo año, conoce al editor P. J. Hetzel.Su primer éxito le llegó cuando publicó Cinco semanas en globo (1863), un éxito fulminante gracias al cual firmó un espléndido contrato con la editorial de Hetzel, que le garantizaba la cantidad anual de 20.000 francos durante los siguientes veinte años, a cambio se obligaba a escribir dos novelas de un nuevo estilo cada año. El contrato fue renovado por Hetzel y más tarde por el hijo de éste, con el resultado de que, durante más de cuarenta años, Los voyages extraordinaires aparecieron en capítulos mensuales dentro de la revista MAGASIN D'EDUCATION ET DE RECREATION. En 1864, vuelve a triunfar con Viaje al centro de la Tierra, y un año después con De la Tierra a la Luna. Se hace miembro de la Sociedad de Geografía y abandona su trabajo en la bolsa. En 1870, fue movilizado durante la guerra franco-prusiana como soldado guardacostas.Escritor al que le encantaba la ciencia y los inventos en el siglo XIX. Documentaba sus aventuras y predijo acertando muchos de los logros científicos del siglo XX. Escribió sobre cohetes espaciales, submarinos, helicópteros, aire acondicionado, misiles dirigidos e imágenes en movimiento, mucho tiempo antes de que aparecieran.Entre sus libros destacan: Viaje al centro de la tierra (1864), De la tierra a la luna (1865), Veinte mil leguas de viaje submarino (1870), La isla misteriosa (1870) y La vuelta al mundo en ochenta días (1872). Autor de más de ochenta títulos que han sido traducidos a 112 idiomas. Sus obras fueron llevadas al cine.En 1892 fue distinguido con la Legión de Honor.Tuvo mala salud que durante toda su vida, sufrió ataques de parálisis, era diabético y acabó por perder vista y oído. Fue agredido por uno de sus sobrinos, que le disparó un tiro a quemarropa dejándolo cojo.Cae gravemente enfermo y fallece el 24 de marzo de 1905 en su casa del bulevar Longueville (hoy bulevar Jules-Verne) de Amiens. Fue inhumado cuatro días después. ", 1828);
		$this->autor_model->crear('Miguel de Cervantes', 'Miguel de Cervantes', 59, 'Cuarto de los siete hijos del matrimonio de Rodrigo de Cervantes Saavedra y Leonor de Cortinas, Miguel de Cervantes Saavedra nació en Alcalá (dinámica sede de la segunda universidad española, fundada en 1508 por el cardenal Cisneros) entre el 29 de septiembre (día de San Miguel) y el 9 de octubre de 1547, fecha en que fue bautizado en la parroquia de Santa María la Mayor.La familia de su padre conocía la prosperidad, pero su abuelo Juan, graduado en leyes por Salamanca y juez de la Santa Inquisición, abandonó el hogar y comenzó una errática y disipada vida, dejando a su mujer y al resto de sus hijos en la indigencia, por lo que el padre de Cervantes se vio obligado a ejercer su oficio de cirujano barbero, lo cual convirtió la infancia del pequeño Miguel en una incansable peregrinación por las más populosas ciudades castellanas. Por parte materna, Cervantes tenía un abuelo magistrado que llegó a ser efímero propietario de tierras en Castilla. Estos pocos datos acerca de las profesiones de los ascendientes de Cervantes fueron la base de la teoría de Américo Castro sobre el origen converso (judíos obligados a convertirse en cristianos desde 1495) de ambos progenitores del escritor.El destino de Miguel parecía prefigurarse en parte en el de su padre, quien, acosado por las deudas, abandonó Alcalá para buscar nuevos horizontes en el próspero Valladolid, pero sufrió siete meses de cárcel por impagos en 1552, y se asentó en Córdoba en 1553. Dos años más tarde, en esa ciudad, Miguel ingresó en el flamante colegio de los jesuitas. Aunque no fuera persona de gran cultura, Rodrigo se preocupaba por la educación de sus hijos; el futuro escritor fue un lector precocísimo y sus dos hermanas sabían leer, cosa muy poco usual en la época, aun en las clases altas. Por lo demás, la situación de la familia era precaria.', 1547);
		$this->autor_model->crear('Andrzej Sapkowski', 'Andrzej Sapkowski', 140, 'Andrzej Sapkowski (Łódź, Polonia, 1948) es un escritor polaco de fantasía heroica. Sus obras están fuertemente influenciadas por la cultura y mitología eslavas, así como por las narraciones tradicionales.1​ Su estilo de escritura es fluido y directo adaptando el lenguaje popular de la Polonia actual.Entre sus obras más populares se encuentra la saga del brujo Geralt de Rivia, compuesta por siete volúmenes. Su primera historia, El Brujo ("Wiedźmin" en polaco), fue publicada en la revista Fantastyka en 1986 consiguiendo un gran éxito ante el público y la crítica, y constituyendo el inicio de la saga de Geralt. Estas novelas le convirtieron en el autor polaco de mayor número de ventas en los años 1990. La saga de Geralt ha sido llevada al cine (Wiedźmin, dirigida por Marek Brodzki, 2001), a la televisión, aunque con poco éxito, y al mundo de los videojuegos (The Witcher, The Witcher 2: Assassins of Kings, The Witcher 3: Wild Hunt) con un gran éxito de crítica, ventas y afición.Sapkowski ha ganado cnco premios Zajdel por las historias cortas: El mal menor (Mniejsze zło) (1990), La espada del destino (Miecz przeznaczenia) (1992) (ambas publicadas conjuntamente en la colección de historias titulada La espada del destino) y las novelas W leju po bombie (1993), La sangre de los elfos (Krew elfów) (1994) y Narrenturm (2002). Esta última constituye el inicio de una serie de novelas de fantasía heroica ambientada en las Guerras Husitas del siglo XV.', 1948);
		$this->autor_model->crear('Serguéi Lukiánenko', 'Serguéi Lukiánenko', 152, 'Serguéi Lukiánenko nació en Karatau, Kazajistán, que entonces formaba parte de la Unión Soviética. Sus padres eran ruso-ucranianos. Después de terminar su educación primaria se trasladó a Alma-Ata, donde estudió en el Instituto Médico de Alma-Ata en 1986 como terapeuta. Después de su graduación en 1992 comenzó a trabajar en uno de los hospitales de Alma-Ata, especializándose en psiquiatría infantil, pero pronto abandonó la práctica laboral, pues los bajos sueldos de los médicos soviéticos se desplomaron por completo con la caída de la Unión Soviética, por lo que con su sueldo médico se encontraba incapaz de mantener una familia. Había comenzado a escribir cuando era estudiante y retomó su labor literaria para ganar dinero. Durante esta época se había convertido en un miembro activo de los aficionados rusos a la literatura y la ciencia-ficción, asistiendo a convenciones y seminarios por toda la Unión Soviética.En 1993 fue nombrado editor de una revista local de ciencia-ficción, en la que trabajó y colaboró hasta 1996. Fue uno de los períodos más duros de la vida de Serguéi, pues su familia tuvo que esforzarse para salir adelante económicamente. El autor a menudo atribuye el tono pesimista de sus obras al período en que se encontraba en dificultades financieras y personales. Sin embargo, desde mediados de la década de 1990 su situación mejoró drásticamente y pronto comenzó a aumentar su popularidad como escritor. Debido a que tenía que viajar frecuentemente a Rusia, finalmente en 1996 decidió trasladarse a Moscú, donde vive actualmente (2008).', 1968);
		$this->autor_model->crear('Dmitry Glukhovsky', 'Dmitry Glukhovsky', 152, 'Glujovski publicó el año 2002 en su página web su primera novela, «Metro 2033», y permitió el acceso libre a cualquier lector. La novela ha acabado convirtiéndose en un experimento interactivo, atrayendo a miles de lectores. Glujovski es famoso en Rusia por sus novelas «Metro 2033» y «Crepúsculo» («Sumerki»). También es autor de una tira cómica, «Historias sobre la Madre Patria», una crítica a la Rusia actual.Como periodista, Dmitri Glujovski ha trabajado para EuroNews en Francia, para Deutsche Welle y para RT. Entre 2008 y 2009 trabajó en la radio, y escribe columnas para el Harper´s Bazaar, l´Officiel y Playboy.Ha vivido en Israel, donde cursó sus estudios, además de en Alemania y Francia. Habla inglés, francés, alemán, hebreo y español, aparte de su ruso nativo.', 1979);

	}
	
	public function creaGenero(){
		$this->load->model('genero_model');
		
		$this->genero_model->crear('Épica');
		$this->genero_model->crear('Epopeya');
		$this->genero_model->crear('Cantar de gesta');
		$this->genero_model->crear('Cuento');
		$this->genero_model->crear('Novela');
		$this->genero_model->crear('Fábula');
		$this->genero_model->crear('Lírico');
		$this->genero_model->crear('Drama');
		$this->genero_model->crear('Comedia');
		$this->genero_model->crear('Melodrama');
		$this->genero_model->crear('Tragicomedia');
		$this->genero_model->crear('Farsa');
		$this->genero_model->crear('Ensayo');
		$this->genero_model->crear('Biografia');
		$this->genero_model->crear('Crónica');
		$this->genero_model->crear('Oratoria');
		$this->genero_model->crear('Epístola');
		$this->genero_model->crear('Tratado');
		$this->genero_model->crear('Diálogo');
		$this->genero_model->crear('Poesia');
		$this->genero_model->crear('Diccionario');
		$this->genero_model->crear('Diseño');
		$this->genero_model->crear('Gastronomía');
		$this->genero_model->crear('Música');
		$this->genero_model->crear('Policiaca');
		$this->genero_model->crear('Religion');
		$this->genero_model->crear('Autoayuda');
		$this->genero_model->crear('Educativo');
		$this->genero_model->crear('Infantil');
		$this->genero_model->crear('Juvenil');
		$this->genero_model->crear('Comic');
		$this->genero_model->crear('Humor');
	}
	
	public function creaLibro(){
		$this->load->model('libro_model');
		
		//Frank Herbert
		$this->libro_model->crear('Dune', '9784567890120',[1], [15] ,'español',321,'Dune es una novela de ciencia ficción escrita por Frank Herbert en 1965. Su éxito fue rotundo; en 1966 ganó el Premio Hugo y en 1965 la primera edición del Premio Nébula a la mejor novela de ciencia ficción. Publicado en español por la editorial Acervo en 1975, Dune abre una de las sagas más importantes de la literatura fantástica y de ciencia ficción.Posteriormente el autor continuaría la saga con El mesías de Dune (1969) y la concluyó con Hijos de Dune (1976), que cerraba la trilogía prevista. El éxito de la trilogía lo llevó sin embargo a escribir posteriormente un cuarto libro, Dios emperador de Dune (1981), con el que esperaba cerrar la (en ese momento) tetralogía. Años después retomaría la saga con los quinto y sexto volúmenes Herejes de Dune (1984) y Casa Capitular Dune (1985), dejando un final completamente abierto a una nueva entrega.El éxito de la novela provocó mucho interés en su traslado a la gran pantalla, proyecto que tras muchas vicisitudes se plasmaría en la película Dune (1984), dirigida por David Lynch. Años después, en el 2000, también se realizaría una miniserie de televisión inspirada en la primera novela, titulada Dune, a la que seguiría otra miniserie inspirada en las dos novelas siguientes, titulada Hijos de Dune.Tras la muerte de Frank Herbert, se han añadido a la saga dos trilogías que narran los antecedentes que condujeron a los hechos de la saga principal, Preludio a Dune (1999-2001) y Leyendas de Dune (2002-2004), escritas por el hijo del autor, Brian Herbert, en asociación con el escritor de ciencia ficción Kevin J. Anderson, así como dos novelas que concluyen la saga original, Cazadores de Dune (2006) y Gusanos de arena de Dune (2007).',12);
		$this->libro_model->crear('El mesías de Dune', '9784567890121',[1], [15] ,'español',321,'Dune es una novela de ciencia ficción escrita por Frank Herbert en 1965. Su éxito fue rotundo; en 1966 ganó el Premio Hugo y en 1965 la primera edición del Premio Nébula a la mejor novela de ciencia ficción. Publicado en español por la editorial Acervo en 1975, Dune abre una de las sagas más importantes de la literatura fantástica y de ciencia ficción.

Posteriormente el autor continuaría la saga con El mesías de Dune (1969) y la concluyó con Hijos de Dune (1976), que cerraba la trilogía prevista. El éxito de la trilogía lo llevó sin embargo a escribir posteriormente un cuarto libro, Dios emperador de Dune (1981), con el que esperaba cerrar la (en ese momento) tetralogía. Años después retomaría la saga con los quinto y sexto volúmenes Herejes de Dune (1984) y Casa Capitular Dune (1985), dejando un final completamente abierto a una nueva entrega.

El éxito de la novela provocó mucho interés en su traslado a la gran pantalla, proyecto que tras muchas vicisitudes se plasmaría en la película Dune (1984), dirigida por David Lynch. Años después, en el 2000, también se realizaría una miniserie de televisión inspirada en la primera novela, titulada Dune, a la que seguiría otra miniserie inspirada en las dos novelas siguientes, titulada Hijos de Dune.

Tras la muerte de Frank Herbert, se han añadido a la saga dos trilogías que narran los antecedentes que condujeron a los hechos de la saga principal, Preludio a Dune (1999-2001) y Leyendas de Dune (2002-2004), escritas por el hijo del autor, Brian Herbert, en asociación con el escritor de ciencia ficción Kevin J. Anderson, así como dos novelas que concluyen la saga original, Cazadores de Dune (2006) y Gusanos de arena de Dune (2007).',12);
		$this->libro_model->crear('Hijos de Dune', '9784567890122',[1], [15] ,'español',321,'Nueve años después de la muerte de Chani, del final de la conspiración contra los Fremen, y de que el Emperador Paul Atreides, Muad´dib, ciego y solo, caminara hacia el desierto siguiendo la tradición fremen que aseguraba una muerte rápida, Alia, hermana de Paul y con poderes prescientes similares a los de su hermano, se ha casado con el ghola de Duncan Idaho y se sienta en el trono de Arrakis como Regente Imperial, así como tutora y guardiana de los gemelos nacidos en el momento de morir Chani: Leto y Ghanima.A pesar de los años, la conspiración para destruir el poderío Atreides continúa con Wencisia Corrino, la tercera hija del ya muerto Shaddam IV, y las tribus fremen malditas del antiguo asentamiento Jacurutu. Planean enloquecer a Alia con especia, asesinar a los gemelos con tigres de Laza y arrojar al Imperio al caos. Y una voz que viene del desierto profundo, el Predicador, un anciano ciego que denuncia la corrupción del sueño de Muad´dib enfrentándose a Alia, que sospecha que esa voz pertenece a su desaparecido hermano Paul.',12);
		$this->libro_model->crear('Dios Emperador de Dune', '9784567890123',[1], [15] ,'español',321,'Leto II Atreides, the God Emperor, has ruled the universe as a tyrant for 3,500 years after becoming a hybrid of human and giant sandworm in Children of Dune. The death of all other sandworms, and his control of the remaining supply of the all-important drug melange, has allowed him to keep civilization under his complete command. Leto has been physically transformed into a worm, retaining only his human face and arms, and though he is now seemingly immortal and invulnerable to harm, he is prone to instinct-driven bouts of violence when provoked to anger. As a result, his rule is one of religious awe and despotic fear. Leto has disbanded the Landsraad to all but a few Great Houses; the remaining powers defer to his authority, although they individually conspire against him in secret. The Fremen have long since lost their identity and military power, and have been replaced as the Imperial army by the Fish Speakers, an all-female army who obey Leto without question. He has rendered the human population into a state of trans-galactic stagnation; space travel is non-existent to most people in his Empire, which he has deliberately kept to near-medieval level of technological sophistication. All of this he has done in accordance with a prophecy divined through precognition that will establish an enforced peace preventing humanity from destroying itself through aggressive behavior.',12);
		$this->libro_model->crear('Herejes de Dune', '9784567890124',[1], [15] ,'español',321,'Fifteen hundred years have passed since the 3,500-year reign of the God Emperor Leto II Atreides ended with his assassination; humanity is firmly on the Golden Path, Leto´s plan to save humanity from destruction. By crushing the aspirations of humans for over three thousand years, Leto caused the Scattering, an explosion of humanity into the rest of the universe upon his death. Now, some of those who went out into the universe are coming back, bent on conquest. Only the Bene Gesserit perceive the Golden Path and are therefore faced with a choice: keep to their traditional role of hidden manipulators who quietly ease tensions and guide human progress while struggling for their own survival, or embrace the Golden Path and push humanity onward into a new future where humans are free from the threat of extinction.',12);
		$this->libro_model->crear('Casa Capitular:DUne', '9784567890125',[1], [15] ,'español',321,'The Bene Gesserit still find themselves questioning the Golden Path of humanity set by the God Emperor Leto II. Now they must survive the Honored Matres, whose reckless conquest of the Old Empire threatens Bene Gesserit survival. The Sisters must reassess their timeless methods: does ultimate survival go beyond calculated manipulation? Is there greater purpose to life than consolidating power?',12);
		//Terry Pratchet
		$this->libro_model->crear('El color de la Magia', '9784567890126',[2], [1] ,'español',321,'A la ciudad-estado de Ankh-Morpork llega Dosflores, el primer turista de todo el Mundodisco, un tipo confiado y muy seguro, cree firmente en que no le pasará nada malo y que hablando muy despacio y muy alto todos pueden entenderle. Siempre es acompañado de El equipaje, un baúl de peral sabio con tendencias homicidas repleto de oro. Dosflores procede del Continente Contrapeso, donde el oro es abundante y barato.

Rincewind, el mago, es espulsado de la Universidad invisible, ya que no puede aprender un solo hechizo, esto se debe a que El Octavo, el grimonio más poderoso del disco dejo uno de sus hechizos en su cabeza y los demás siplemente no quieren estar en el mismo lugar. Existe un contraste marcado entre la cobardía y suspicacia de Rincewind y a la inocencia absoluta de Dosflores, quien, lejos de pasarlo mal, vive cada aventura con ilógico fervor e ilusión.

Este mago inepto recibe, del patricio de la ciudad la importante misión de servir de guía a Dosflores en su viaje, por el patricio que rige la ciudad. Esto los llevará por gran parte del Mundodisco. Donde no faltarán los dragones y los castillos.

Existen continuas referencias a obras clave del género épico y de fantasía.',12);
		$this->libro_model->crear('La Luz Fantástica', '9784567890126',[2], [1] ,'español',321,'Esta continua en el punto exacto en donde El color de la magia termina, y continua con las desventuras de Rincewind y Dosflores. En este libro, Rincewind descubre que si los ocho hechizos del Octavo no son leídos dentro de poco, el mundo terminará. Lamentablemente para él, tiene el hechizo perdido del octavo viviendo en su cabeza, y muchos magos intentan eliminarlo, para que este pase a vivir en la cabeza del mago más cercano a él en el momento del fallecimiento, ya que leer dichos hechizos conlleva a un poder supremo.

Pero por alguna extraña razón, Gran A´Tuin se acerca cada vez más a una gigantesca estrella roja y según ha dictaminado Muerte, es necesario que los ocho hechizos se reúnan para evitar una desgracia.

Ahora Rincewind y Dosflores reemprenden la huida acompañados de Cohen el Bárbaro, el más peligroso y extraño héroe del Disco y Bethan su igualmente peculiar prometida, intentando evitar a quienes desean los ocho hechizos y a quienes por su mala suerte simplemente quieren asesinarlos.

Sin embargo, la verdad sobre la estrella roja y las palabras de Muerte parecieran tener un significado más enigmático de lo que se cree.',12);
		$this->libro_model->crear('Ritos Iguales', '9784567890127',[2], [1] ,'español',321,'Todo comienza cuando un mago llega a un pueblo perdido de las Montañas del Carnero para designar a su sucesor. El elegido es un recién nacido, que cómo mandan los cánones del Mundodisco es el octavo hijo de un octavo hijo. El mago debe entregarle su cayado al niño, ya que su hora se aproxima. Tal vez por ello no repara en que el bebé es en realidad una niña hasta que es demasiado tarde. La niña, llamada Eskarina, es instruida por la bruja local Yaya Ceravieja que cree firmemente que la magia de magos y la magia de brujas es completamente diferente. Cuando el poder oculto en Esk comienza a manifestarse no les queda otro remedio que buscar la Universidad Invisible, la principal escuela de magos del Mundodisco. Nunca antes ha existido una mujer mago, pero Esk deberá serlo aunque para ello deba superar la oposición de los magos, porque sólo de ese modo podrá encauzar un poder tan inmenso que amenaza la supervivencia del propio Mundodisco.',12);
		$this->libro_model->crear('Mort', '9784567890128',[2], [1] ,'español',321,'La acción arranca cuando La Muerte contrata a Mort, un muchacho escuálido y patoso como aprendiz. Tras un corto periodo de aprendizaje, Mort queda al cargo y la Muerte se toma un pequeño descanso. Pero mientras La Muerte se dedica a visitar los bares del Mundodisco y se enfrasca en extraños dilemas filosóficos, su aprendiz ocasiona una paradoja temporal al perdonarle la vida a la princesa Keli; sin darse cuenta de que quien hace el trabajo de la Muerte poco a poco se vuelve la Muerte. La princesa es ignorada por todos los que la rodean y por el propio universo, para el que ya está muerta. El tiempo se agota, y Mort, cada vez más inhumano y más semejante a La Muerte debe buscar junto a la hija adoptiva de ésta, Ysabell y su sirviente Albert una solución que evite el inminente colapso de todo el Mundodisco.',12);
		$this->libro_model->crear('Rechicero', '9784567890129',[2], [1] ,'español',321,'A la Universidad Invisible llega un rechicero. Tiene ocho años y un poder equiparable al de los dioses. De repente, a todos los magos les salen bien los hechizos más complicados. La guerra mágica es inevitable. Solo el inepto mago Rincewind, acompañado del Sombrero de Archicanciller, la heroína-peluquera Conina, el proyecto de héroe bárbaro Nijel y el Serifa de Al-Khali, Creosoto, pueden impedir el Apocrilipsis, el Despido de los Dioses y la invasión de "cosas" de las Dimensiones Mazmorra.',12);
		$this->libro_model->crear('Brujerías', '9784567890110',[2], [1] ,'español',321,'El argumento es a grandes rasgos un homenaje a la tragedia Macbeth de Shakespeare. Brujerías tiene como protagonistas a las tres brujas: Yaya Ceravieja, Tata Ogg y Magrat Ajostiernos.

El Rey Verence I de Lancre es asesinado por su primo, el Duque Felmet, y la corona del Rey y su bebé son entregados por un sirviente a las tres brujas. Las brujas le encargan a una compañía de actores viajantes, tomando en cuenta que el destino se encaminará (eventualmente) y que Tomjon crecerá para derrocar al Duque Felmet.

Sin embargo, el reino (la tierra, y el colectivo de la gente) esté enojado, y no quiere esperar quince años, así que las brujas mueven el reino completo hacia el futuro. Mientras tanto, el Duque ha decidido que quiere una obra de teatro para mostrar su benevolencia en términos que el pueblo entienda. Manda a su bufón a Ankh-Morpork, quien termina contratando a la misma compañía de actores en la que se encuentra Tomjon, para escribirla e interpretarla.',12);
		
		//JK ROWLING
		$this->libro_model->crear('Harry Potter y la piedra filosofal', '9784567890111',[3], [30] ,'español',321,'En esta primera obra se introducen la mayoría de los personajes principales de la serie, así como muchos de los lugares donde se desarrollará la acción. Se narran los primeros pasos de Harry en el mundo de la magia, así como su primer enfrentamiento con Voldemort, quien en su búsqueda de la inmortalidad quiere obtener el poder de la piedra filosofal.',12);
		$this->libro_model->crear('Harry Potter y la cámara secreta', '9784567890112',[3], [30] ,'español',321,'El libro relata el segundo año de Harry en Hogwarts. Un día un elfo llamado Dobby vino a casa de Harry para avisarle de que Hogwarts corría un grave peligro. Más tarde su amigo Ron, le recogerá en un coche volador y así empieza su curso en Hogwarts durante el cual aparecen mensajes en las paredes de los pasillos de la escuela que advierten que la Cámara de los Secretos ha sido abierta, seguidos de una serie de ataques a alumnos que no provienen de familias con sangre mágica. En esta entrega introducen la figura del elfo doméstico y personajes relevantes para el resto de la serie, como Lucius Malfoy, Ginny Weasley y Arthur Weasley, además de revelar un poco más del pasado de Voldemort a través de su diario personal.',12);
		$this->libro_model->crear('Harry Potter y el prisionero de Azkaban', '9784567890113',[3], [30] ,'español',321,'En esta oportunidad se introducen la figura del dementor y los personajes de Remus Lupin y Sirius Black, quien al inicio de la novela escapa de la prisión de Azkaban, además de desarrollar la historia de los padres de Harry. Es el único libro de la serie en el que no aparece Voldemort.',12);
		$this->libro_model->crear('Harry Potter y el cáliz de fuego', '9784567890114',[3], [30] ,'español',321,'En esta ocasión, se narra el cuarto año de Harry en Hogwarts y el misterio que rodea el ingreso involuntario de su nombre en el Torneo de los tres magos, en el cual es obligado a competir junto a otros tres participantes. La historia explora más a fondo el mundo mágico y termina con el resurgimiento de Lord Voldemort. Previo a la publicación del libro, se generó mucha controversia y anticipación ante el anuncio de la autora de que un personaje moriría.',12);
		$this->libro_model->crear('Harry Potter y la Orden del Fénix', '9784567890115',[3], [30] ,'español',321,'Harry Potter debe enfrentarse tanto a un Voldemort resurgido como al resto del mundo mágico que se niega a creer que esto es cierto, empezando por el Ministerio de Magia. Este nombra a Dolores Umbridge como la nueva directora de Hogwarts, y junto con Luna Lovegood y Bellatrix Lestrange son los tres personajes más destacados que se introducen en esta entrega. Por otro lado, se revela una importante profecía que concierne a Harry y a Voldemort.',12);
		$this->libro_model->crear('Harry Potter y el misterio del príncipe', '9784567890116',[3], [30] ,'español',321,'Harry se topa con un antiguo libro de texto de pociones lleno de anotaciones y recomendaciones firmadas por un misterioso príncipe. Al mismo tiempo, recibe clases particulares por el propio director del colegio, Albus Dumbledore, que le hace conocer momentos del pasado de Voldemort, para así enseñarle lo que son los horrocruxes, objetos elementales para lograr su victoria. Al final del libro, el profesor Severus Snape, cuya lealtad estuvo en duda durante toda la serie, asesina a Dumbledore.',12);
		$this->libro_model->crear('Harry Potter y las Reliquias de la Muerte', '9784567890117',[3], [30] ,'español',321,'Esta última novela narra los acontecimientos que siguen directamente a la muerte de Dumbledore, en los que Voldemort finaliza su ascenso al poder y logra dominar el Ministerio de Magia. Harry y sus amigos deciden no asistir a su último año en Hogwarts, para salir en la búsqueda de los horrocruxes restantes. Finalmente, se lleva a cabo la batalla de Hogwarts, entre la Orden del Fénix, alumnos y profesores del colegio, por un lado, y Voldemort y los Mortífagos, por el otro. La novela finaliza con un epílogo que cuenta el futuro de los personajes supervivientes 19 años después del enfrentamiento, mostrando que cada uno de ellos ha formado sus vidas.',12);
		//TOLKIEN
		$this->libro_model->crear('La Comunidad del Anillo', '9784567890120',[4], [15] ,'español',321,'Es el primero de los tres volúmenes que forman la obra. Está subdividido a su vez en dos partes, precedidas de un prólogo. Tras este, Tolkien introdujo un pequeño apartado titulado Nota sobre los archivos de la Comarca, que no apareció hasta la segunda edición de La Comunidad del Anillo,20​ y donde enumera las fuentes que se supone que han sido usadas a la hora de escribir el libro (ya que él pretende dar a entender que su legendarium fue real).

En un principio, Tolkien estableció que el volumen se llamara Crece la Sombra,21​ pero decidió cambiarlo por El retorno de la Sombra.22​ No obstante, diez días después de esta elección, decidió cambiarlo de nuevo por el definitivo, La Comunidad del Anillo, ya que éste se adecuaba más a la trama.23​

Los libros I y II, de los que consta este volumen, tuvieron también en un principio título: El Anillo se pone en camino y El Anillo va al Sur, respectivamente. En un manuscrito del libro que se conserva en la Universidad Marquette de Milwaukee (Estados Unidos), en el índice aparecen dos títulos diferentes: El primer viaje y El viaje de los nueve compañeros,21​ Sin embargo, estos títulos para los libros fueron finalmente anulados en la versión publicada.',12);
		$this->libro_model->crear('Las dos torres', '9784567890120',[4], [15] ,'español',321,'Es el segundo de los tres volúmenes. En un principio, Tolkien lo tituló El Anillo en la Sombra,21​ aunque, poco después, lo cambió por La Sombra se alarga.Diez días después de este cambio, Tolkien escribió a su editor, Rayner Unwin, y le propuso el título Las dos torres, que finalmente sería el escogido.23​ Con respecto a qué dos torres se refiere en este título, Tolkien no lo dejó claro. En esa misma carta, el autor le decía a Unwin que la identidad de las torres queda en la ambigüedad, pues podría referirse a Orthanc y Barad-dûr (las dos torres relacionadas con el enemigo), a Minas Tirith y Barad-dûr (las dos torres más poderosas de cada bando), o a Orthanc y Cirith Ungol (las dos torres que aparecen en los últimos momentos de la trama de cada libro).23​ En una carta posterior, Tolkien asegura que se tratan de Orthanc y Cirith Ungol, pero debido a la importancia dada a la oposición entre Barad-dûr y Minas Tirith, la identidad quedaba equívoca.24​

El libro está subdividido a su vez en dos partes, los libros III y IV, que durante el tiempo que Tolkien decidió que los seis libros llevaran nombre, estos dos fueron bautizados como La traición de Isengard y El Anillo va al Este, respectivamente.21​ Sin embargo, en el manuscrito conservado en la Universidad Marquette, los títulos que aparecen son: La traición de Isengard y El viaje de los portadores del Anillo.',12);
		$this->libro_model->crear('El retorno del Rey', '9784567890120',[4], [15] ,'español',321,'l retorno del Rey es el tercero de los tres volúmenes. A la hora de su publicación se dudó entre que se llamara La Guerra del Anillo o El retorno del Rey, pues mientras que Allen & Unwin encontraba el último comercialmente más atractivo, J. R. R. Tolkien prefería el primero porque no revelaba excesivamente detalles de la trama y, sobre todo, el final de la historia;23​ finalmente el autor acabó cediendo al título que preferían los editores.

El volumen también está subdividido a su vez en dos partes, los libros V y VI, que originalmente llevaban los títulos La Guerra del Anillo y El fin de la Tercera Edad, antes de ser anulados.21​

En un principio la novela acababa con un epílogo en el que se veía a Sam, a su mujer Rosita Coto y a los hijos de ambos, años después de la Guerra del Anillo y en el que el cabeza de familia les leía una carta de Aragorn, quien en pocos días haría una visita a la frontera de la Comarca.25​ No obstante, Tolkien acabó siendo convencido para que no incluyera este epílogo,26​ a pesar de que él lo consideraba necesario.27​ Tiempo después, Christopher Tolkien lo recogería junto a sus distintas versiones en El fin de la Tercera Edad, cuarto volumen de la colección titulada La historia de El Señor de los Anillos.',12);
		//Douglas Adams
		$this->libro_model->crear('La guía del autoestopista galáctico', '9784567890120',[5], [9] ,'español',321,'La Guía del autoestopista galáctico (The Hitchhiker´s Guide to the Galaxy en inglés) es una novela de ciencia ficción de Douglas Adams publicada en octubre de 1979. Es el primer libro de cinco que conforman la famosa saga de la Guía del autoestopista galáctico, que fue originalmente una radiocomedia escrita por el mismo autor en 1978.

El título del libro fue inspirado en una Guía verdadera que Adams vio, la cual era útil para viajar por Europa, escrita en forma de enciclopedia. La saga de la Guía del autoestopista galáctico ha sido difundida de diferentes maneras, incluyendo una serie de televisión, un videojuego, un cómic y hasta una dramatización teatral, convirtiendo a su autor en una figura influyente en el campo de la ciencia ficción y la comedia.',12);
		$this->libro_model->crear('El restaurante del fin del mundo', '9784567890120',[5], [9] ,'español',321,'Arthur Dent trata de adaptarse a los cambios que le ha dado la vida, tales como la destrucción de su planeta, las varias veces en las que estuvo en peligro de muerte y el hecho de que ahora estará vagando por la galaxia el resto de su vida. A bordo del Corazón de oro, Arthur tiene que aprender a vivir con su inusual tripulación conformada por el expresidente de la galaxia con dos cabezas, Zaphod Beeblebrox; un androide maníaco-depresivo, Marvin; Ford Prefect, empleado de la Guía del viajero intergaláctico, y Trillian, el segundo ser humano que sobrevivió a la demolición de la tierra.

Pero las cosas no van mejor en la aventura de Arthur, pues mientras la nave va rumbo al Restaurante del fin del mundo, una nave Vogona los ataca, y para empeorar la situación, Arthur ha dañado la nave mientras intentaba hacer té, dejándolos totalmente indefensos. En medio del pánico Zaphod propone hacer una sesión espiritista, con el fin de contactar con su bisabuelo Zaphod Beeblebrox Cuarto (El propio Zaphod es Zaphod Beeblebrox Primero, debido a un accidente con un contraconceptivo y a una máquina del tiempo) y una vez que lo logran, el bisabuelo de Zaphod empieza a discutir con este acerca de su pasado, recordándole que su objetivo principal cuando se hizo presidente era conocer a la verdadera persona que regía el universo. Eventualmente los salva del ataque, lanzando la nave y a sus tripulantes a un lugar desconocido, a excepción de a Zaphod y Marvin, que desaparecieron.

Zaphod aparece misteriosamente en Osa menor beta, el lugar donde se encuentra el domicilio del libro más famoso de todos los tiempos: La guía del viajero intergaláctico. Zaphod, siguiendo sus instintos, se adentra en el edificio y pregunta por Zarniwoop, sujeto del cual nunca había oído hablar pero que sus cabezas le dicen que es importante y que debe hablar con él. Sin embargo, apenas se dirige a su oficina el edificio de la Guía se ve atacado por inmensos cruceros de batalla ranestelares que buscan a Zaphod para condenarlo. En su huida por los pasillos de la edificación, Zaphod se encuentra con Marvin y con un desconocido que lo ayuda, que luego se da a conocer como Roosta. Aunque no logran escapar del edificio, pues los cruceros lo desprenden de la superficie y se lo llevan, Roosta lo lleva al despacho de Zarniwoop y le dice que va de camino al Vórtice de la Perspectiva Total, una máquina que enloquece y mata a todo el que la usa, haciéndole ver lo insignificante que es con respecto al universo, ubicado en Ranestrella B. Roosta también le comenta que le fue asignada una tarea por parte de Zarniwoop, la cual era decirle que al salir del edificio una vez dejado en Ranestrella B, saliera por la ventana y no por la puerta. Luego, Roosta se va, dejando a Zaphod solo con Marvin.',12);
		$this->libro_model->crear('La vida, el universo y todo lo demás', '9784567890120',[5], [9] ,'español',321,'Varado en una Tierra prehistórica, el desafortunado Arthur Dent decide matar el tiempo volviéndose loco. Tan pronto como toma esta decisión, su viejo amigo, Ford Prefect reaparece y lo empuja a través de un Eddy en el Espacio-Tiempo (astutamente disfrazado como un anacrónico sofá) hacia el Lord´s Cricket Ground dos días antes de que los Vogons demolieran la Tierra. En cuanto llegan, Una nave aterriza en el campo de cricket y un escuadrón de robots camuflados The Ashes mientras hacen destrozos dan rienda suelta a lo que parece ser una obscena parodia de un juego de cricket. Slartibartfast, galardonado diseñador de planetas retirado de Magrathea, llega demasiado tarde para detener la violencia, pero pide la ayuda de Ford y Arthur para ayudarle.

A bordo de su nave, Slartibartfast explica la historia de Krikkit. Hace mucho tiempo, los Krikkit fueron un pintoresco y pacífico pueblo. Su planeta y estrella habían sido rodeados por una inmensa nube de polvo desde tiempos inmemoriales. Nunca habían considerado la posibilidad de vida fuera de su hogar, debido a que la nube bloqueaba cualquier fuente de luz.

Cuando una nave espacial atravesó la nube y se estrelló en Krikkit, los Krikkits usaron Ingeniería_inversa para construir sus propias naves y una vez que vieron el resto del universo, quedaron tan traumatizados que decidieron que su único posible curso de acciones era destruir este extraño Universo. así que lanzaron una flota de naves de guerra y robots para exterminar todas las demás especies, pero fueron derrotados tras una larga y sangrienta guerra. El pueblo de Krikkit fue sentenciado por el juez galáctico Pag a ser sellado dentro de un sobre de tiempo retardado hasta que el resto del universo muriera naturalmente. El deporte del Cricket Británico, por tanto, se crea como resultado de una vaga memoria del inconsciente colectivo inter-especie; especies familiarizadas con las guerras Krikkit se aterran y disgustan del modo en que los humanos han convertido ese recuerdo en un deporte, aunque Slartibartfast confiesa haberse encariñado un poco con el juego.',12);
		//George RR MARTIN
		$this->libro_model->crear('Juego de tronos ', '9784567890120',[6], [8] ,'español',321,'Al principio de la historia, Eddard Stark, como Señor de Invernalia, en nombre de Robert I Baratheon, rey de los Siete Reinos, debe condenar y ejecutar a un desertor de la Guardia de la Noche. Sus hijos e hijas se encuentran entre los testigos. En el viaje de vuelta a Invernalia, los hijos de Eddard descubren cinco cachorros de lobo huargo al lado de su madre muerta, uno para cada uno de sus hijos legítimos y otro cachorro totalmente blanco, que se queda su bastardo Jon Snow (el lobo huargo es el símbolo de la Casa Stark, que aparece en la heráldica de la familia Stark). Después de la muerte de Lord Jon Arryn, anterior "Mano del Rey" (el más alto asesor del rey), el rey Robert Baratheon visita a Eddard en Invernalia. Como confía en él como un viejo amigo y como aliado en la lucha por el trono, el Rey Robert le pide a Eddard convertirse en la nueva Mano del Rey. Eddard acepta, en contra de sus instintos, y al mismo tiempo promete a su esposa, Lady Catelyn Stark que va a investigar la muerte de la Mano anterior, Jon Arryn, que había sido esposo de su hermana Lysa Tully.',12);
		$this->libro_model->crear('Choque de reyes', '9784567890120',[6], [8] ,'español',321,'La guerra civil entre las casas nobles de los Stark, los Lannister y los Baratheon se complica todavía más con la entrada en escena de la casa Greyjoy. Los intentos de Robb Stark de aliarse con los Greyjoy fallan hasta el punto que estos lanzan una ofensiva masiva a lo largo de la costa oeste del Norte. En Invernalia, el hermano pequeño de Robb, Bran, está al mando y conoce a dos nuevos amigos, Jojen y Meera Reed que llegan de la Atalaya de Aguasgrises y se interesan por sus extraños sueños.

Stannis Baratheon se autoproclama Rey de Poniente aconsejado por Melisandre, la sacerdotisa roja. Furioso porque su hermano Renly Baratheon también haya reclamado el trono, Stannis decide asediar el castillo de Renly, Bastión de Tormentas, y forzar así a su hermano a marchar hacia el este para defenderlo. Catelyn Stark se une a un parlamento entre Renly y Stannis para discutir una posible alianza de Stark y Baratheon con su mutuo enemigo, los Lannister. La negociación termina en desacuerdo y Renly decide usar su ejército, inmensamente mayor que el de su hermano, para acabar con él al día siguiente; pese a todo, una sombra misteriosa mata a Renly en su tienda antes de que dé comienzo la batalla. Dos personas presencian el asesinato: Catelyn y la guerrera Brienne de Tarth pero ambas huyen del lugar del crimen para salvar sus vidas. La mayor parte de los que apoyaban a Renly pasan al bando de Stannis excepto los Tyrell, y Bastión de Tormentas sólo cae cuando Melisandre crea otra sombra mágica para matar al castellano de la fortaleza.',12);
		$this->libro_model->crear('Tormenta de espadas', '9784567890120',[6], [8] ,'español',321,'Brienne de Tarth escolta a Jaime Lannister desde Aguasdulces en bote cuando este es liberado por orden de Catelyn Stark. Su misión es intercambiar a Jaime por Arya y Sansa Stark en Desembarco del Rey. Pero Edmure Tully acusa a Jaime de haber escapado de su cautiverio y envía a los vasallos de la casa Tully a perseguirlos. Jaime se pasa casi todo el tiempo insultando a Brienne por su fealdad y su gran tamaño pese a su fuerza y su dominio de la espada. Se ven forzados a abandonar el río y en tierra son capturados por los Titiriteros Sangrientos y son llevados a Harrenhal, fortaleza que los Bolton han dejado bajo su mando. El líder del grupo, Vargo Hoat, corta la mano de la espada de Jaime. Roose Bolton no se inmuta por el comportamiento salvaje de su vasallo y envía a Jaime hacía Desembarco y su saludo a Lord Tywin, cosa que a los dos presos les parece extraña. Desafortunadamente, Brienne queda a merced de Vargo Hoat, que la tira a un pozo para que luche con un oso. En un arranque de caballerosidad, Jaime vuelve y salva a Brienne de una muerte segura. Mientras escapan, Jaime Lannister le dice a los Bolton que le den recuerdos a Robb Stark de su parte.

El ejército de Robb vuelve triunfante a Aguasdulces, tras haber aplastado a los Lannister en el oeste y habiendo ganado grandes victorias. Aun así, Robb está furioso con su tío Edmure: su plan era atrapar a Lord Tywin cuando avanzara hacia el oeste, pero la excesiva defensa de Aguasdulces de su tío le arruina la sorpresa. Catelyn se queda de piedra cuando se entera de que su hijo Robb se ha casado con Jeyne Westerling, violando su compromiso con una de las doncellas de la casa Frey. Robb se defiende diciendo que no tuvo elección: Jeyne lo consoló cuando supo de la muerte de Bran y Rickon y de la destrucción de Invernalia. Esto le cuesta perder el apoyo de los Frey. Además, uno de sus aliados, Lord Rickard Kastark, jefe de la casa Karstark, ha asesinado a dos Lannisters prisioneros de guerra y es ejecutado como traidor, por lo que sus tropas se retiran. Por si esto fuera poco, la infantería de Robb, dirigida por Robett Glover, es atrapada entre Lord Randyll Tarly y ser Gregor Clegane, y una tercera parte de las fuerzas de los Stark es aniquilada. Robb se ve pues en una situación muy comprometida, teniendo en cuenta que sus tierras están ahora en manos de la casa Greyjoy.',12);
		$this->libro_model->crear('Festín de cuervos', '9784567890120',[6], [8] ,'español',321,'Festín de cuervos empieza donde terminó Tormenta de espadas y los hechos que en ella ocurren son simultáneos a los de la siguiente novela, Danza de dragones. La Guerra de los Cinco Reyes empieza a decaer. Robb Stark, Joffrey Baratheon, Renly Baratheon y Balon Greyjoy están muertos y el rey Stannis Baratheon se encuentra en el Muro ayudando la Guardia de la Noche y su lord Comandante, Jon Nieve. El hermano de Joffrey, Tommen Baratheon, con tan solo ocho años es ahora el rey de Poniente y gobierna desde Desembarco del Rey bajo la atenta mirada de su madre, la reina regente, Cersei Lannister. Tywin Lannister también está muerto, asesinado por su propio hijo, Tyrion, antes de huir de la ciudad. Sansa Stark se encuentra escondida en el Valle, protegida por Petyr Baelish quien, después de asesinar a su esposa Lysa Arryn, se autoproclama lord Protector del Valle y guardián de su hijastro lord Robert Arryn, ahora Señor del Valle.',12);
		$this->libro_model->crear('Danza de dragones', '9784567890120',[6], [8] ,'español',321,'Danza de dragones sigue donde se quedó Tormenta de espadas con sucesos simultáneos a los acaecidos en Festín de cuervos. La Guerra de los Cinco Reyes parece que decae. En el Norte, el rey Stannis Baratheon se ha instalado en el Muro y ha jurado ganarse la lealtad de los norteños para continuar su lucha por el Trono de Hierro, aunque esto se complica porque la mayoría de la costa oeste está ocupada por los hijos del hierro y Roose Bolton ha sido nombrado señor y lord protector en el Norte, dejando a su hijo Ramsay Nieve a cargo de Invernalia. Éste mantiene preso a Theon Greyjoy que, tras haberlo sometido a largas torturas, le hace perder la cabeza, creyéndose él mismo Hediondo, aquel apestoso esclavo de Ramsay que lo ayudó a saquear Invernalia. Theon consigue escapar de Invernalia, ayudado por un Mance Rayder que se hace pasar por bardo, y se reencuentra con su hermana Asha, presa por las tropas de Stannis que esperan entrar en Invernalia entre la nieve de una gran tormenta.

En el Muro, Jon Nieve junto a Samwell Tarly, sabe que la confrontación con los Otros se aproxima y empieza a preparar a la Guardia de la Noche para el momento del enfrentamiento. Recordando su juramento de proteger al reino y a los hombres, Jon deja entrar a los salvajes de más allá del Muro para repoblar las tierras de la Guardia de la Noche en el Agasajo y fortalecerla con nuevos hombres, cosa que provocará el disgusto de muchos de sus hermanos. Jon, advertido por Melissandre, es apuñalado por quienes se oponen a la entrada de salvajes y a ayudar a Stannis en Invernalia contra los Bolton.

Mientras, más allá del Muro, Bran Stark llega a una cueva protegida de los espectros y los Otros por magia antigua, y es ayudado a mejorar sus técnicas como warg o cambiapieles. Sus amigos siguen con él, pero Jojen está cada día más débil.',12);
		//Julio Verne
		$this->libro_model->crear('Viaje al centro de la Tierra', '9784567890120',[7], [17] ,'español',321,'El protagonista de la historia, Axel, reside en una vieja casa situada en la Königstrasse, en Hamburgo, junto a su tío Otto Lidenbrock, un prestigioso profesor de mineralogía en el "Gelehrtenschule des Johanneums" (designado en libro como "Johanneum"), a quien describe como un hombre temido por su fuerte carácter pero muy original, su pareja Gräuben y su sirvienta, Marta. Un día el profesor le llama a su despacho, donde le enseña un manuscrito de gran valor del Heimskringla, de Snorri Sturluson. Pero ese libro esconde una gran sorpresa: un pergamino de origen rúnico que oculta un mensaje secreto. Tras muchos esfuerzos y gracias a un descubrimiento casual de Axel, lograrán descifrarlo. En él, un alquimista islandés llamado Arne Saknussemm2​ revela cómo llegar al centro de la tierra. El profesor, eufórico, decide ir al lugar indicado en el pergamino junto con su sobrino Axel.',12);
		$this->libro_model->crear('Veinte mil leguas de viaje submarino', '9784567890120',[7], [17] ,'español',321,'Veinte mil leguas de viaje submarino es una obra narrada en primera persona por el profesor francés Pierre Aronnax, notable biólogo que es hecho prisionero por el Capitán Nemo y es conducido por los océanos a bordo del submarino Nautilus, en compañía de su criado Conseil y el arponero canadiense Ned Land.

La historia comienza con una expedición a bordo de un buque de la marina de guerra estadounidense: el Abraham Lincoln, al mando del almirante Farragut, que busca dar caza a un extraño cetáceo, con un largo y filoso cuerno en el hocico (luego se demuestra que el animal es un narval), que había ocasionado daños a diversas embarcaciones. Durante la expedición, los protagonistas se ven lanzados por la borda del buque como resultado de una embestida del animal. El profesor Aronnax y su acompañante Conseil son rescatados por el arponero canadiense Ned Land que también cayo al agua con ellos, después del impacto de la criatura, y los tres logran llegar a nado a un lugar seguro. Una vez a salvo, descubren que no se encuentran realmente en una isla, sino sobre una estructura metálica: un submarino a flote a cuyo interior acceden por una compuerta, llevados por ocho enmascarados.

En el interior del misterioso artefacto conocen al Capitán Nemo, personaje desgraciado y brillante, con un oscuro pasado y de grandes aptitudes científicas y artísticas. Éste les muestra toda la nave, el Nautilus, y les da notables explicaciones sobre su ingeniería. El capitán les informa de que, al haber conocido su existencia, no puede dejarlos volver a la superficie.',12);
		$this->libro_model->crear('La vuelta al mundo en ochenta días', '9784567890120',[7], [17] ,'español',321,'El flemático y solitario caballero británico Phileas Fogg abandonará su vida de escrupulosa disciplina para cumplir con una apuesta con sus colegas del Reform Club, en la que arriesgará la mitad de su fortuna comprometiéndose a dar la vuelta al mundo en solo ochenta días usando los medios disponibles en la segunda mitad del siglo XIX y siguiendo el proyecto publicado en el Morning Chronicle, su periódico de lectura cotidiana. Lo acompañará su recién contratado mayordomo francés, Jean Passepartout (llamado "Picaporte" en algunas traducciones al español) y tendrá que lidiar no solo con los retrasos en los medios de transporte, sino con la pertinaz persecución del detective Fix, que, ignorando la verdadera identidad del caballero, se enrola en toda la aventura a la espera de una orden de arresto de la Corona británica, en la creencia de que, antes de partir, Fogg robó 55 000 libras del Banco de Inglaterra.',12);
		//Miguel de Cervantes
		$this->libro_model->crear('Don Quijote de la Mancha', '9784567890120',[8], [1] ,'español',321,'Don Quijote de la Manchaa​ es una novela escrita por el español Miguel de Cervantes Saavedra. Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605, es la obra más destacada de la literatura española y una de las principales de la literatura universal.1​2​ En 1615 apareció su continuación con el título de Segunda parte del ingenioso caballero don Quijote de la Mancha. El Quijote de 1605 se publicó dividido en cuatro partes; pero al aparecer el Quijote de 1615 en calidad de Segunda parte de la obra, quedó revocada de hecho la partición en cuatro secciones del volumen publicado diez años antes por Cervantes.3​

Es la primera obra genuinamente desmitificadora de la tradición caballeresca y cortés por su tratamiento burlesco. Representa la primera novela moderna y la primera novela polifónica; como tal, ejerció un enorme influjo en toda la narrativa europea. Por considerarse «el mejor trabajo literario jamás escrito», encabezó la lista de las mejores obras literarias de la historia, que se estableció con las votaciones de cien grandes escritores de 54 nacionalidades a petición del Club Noruego del Libro en 2002; así, fue la única excepción en el estricto orden alfabético que se había dispuesto.',12);
		//Andrzej Sapkowski
		$this->libro_model->crear('El último deseo', '9784567890120',[9], [15] ,'español',321,'El último deseo (en polaco, ´Ostatnie życzenie´) es una de las dos antologías de relatos breves (siendo el otro La espada del destino - Miecz przeznaczenia) que preceden la serie principal de Geralt de Rivia, creada por el escritor polaco Andrzej Sapkowski. La primera edición en polaco fue publicada en 1993 y la primera en español, en 2002, siendo además traducido a diversos idiomas.

La antología emplea la técnica de la narración enmarcada y en la cual seis cuentos son unidos por una séptima narración intercalada entre estos.

Geralt, tras ser herido en su lucha con la estriga de Wizima, descansa en un templo. Durante ese lapso tiene recuerdos de eventos recientes de su vida, cada uno formando una historia en si. En cada uno de esos cuentos se puede ver una reinvención de varios cuentos clásicos como "la bella y la bestia" en "La Semilla de la Verdad" o "Blancanieves y los siete enanitos" en "Un mal menor". En cualquier caso, todos los cuentos están vistos desde una perspectiva más oscura, cruel y satírica de lo que esperaríamos de tales relatos.',12);
		$this->libro_model->crear('La espada del destino', '9784567890120',[9], [15] ,'español',321,'La espada del destino (Polaco:Miecz przeznaczenia) es una colección de cuentos del autor polaco Andrzej Sapkowski. Es el segundo libro en La Saga del Brujo de Andrzej Sapkowski en términos de una cronología interna, a pesar de que la edición original Polaca fue publicada en 1992, antes de El Último Deseo (pero después del libro Wiedźmin). Algunas de las historias individuales fueron publicadas primero por la revista Fantastyka.

El libro se ha traducido a Checo, Ruso, Lituano, Alemán, Español, Francés y Eslovaco. La editorial de la edición en Inglés de los libros del Brujo decidieron saltarse La Espada del Destino y publicar La Sangre de los Elfos (la primera novela de La saga del brujo) directamente después de El Último Deseo, a pesar de que las historias cortas en esta colección tienen lugar anteriormente e introduce algunos de los personajes que se convertirán en personajes principales en las novelas.',12);
		$this->libro_model->crear('La sangre de los elfos', '9784567890120',[9], [15] ,'español',321,'Geralt huye con Ciri a Kaer Morhen, donde la pequeña heredera de Cintra aprende a luchar como un brujo junto con Geralt y el resto de los brujos que pasan el invierno en dicha fortaleza olvidada. Súbitamente, aparece Triss Merigold, a quien Geralt, tras tres trances de la pequeña e inusual bruja, pide ayuda. Triss descubre que Ciri es una Fuente. Destaca, además, el debate que mantienen Triss y los brujos a propósito de la neutralidad en el conflicto con Nilfgaard, conflicto en el que Triss tomó parte, al participar, a instancias del Capítulo, en la Batalla del Monte de Sodden, donde se la dio por muerta, convirtiéndose, así, en la Decimocuarta del Monte. Con la llegada de la primavera, Geralt, Ciri y Triss parten rumbo a Ellander, al santuario de la Diosa Melitele, un lugar de confianza dónde Ciri, bajo la custodia de la sacerdotisa Nenneke, estaría a salvo de los espías. Durante el camino, sin embargo, una infección intestinal aqueja a Triss y los tres se ven obligados a viajar con un convoy de carros escoltado principalmente por enanos, viejos conocidos de Geralt (Yarpen Zigrin y sus muchachos). Durante el camino, son atacados por un comando de Scoia Tael (elfos, también conocidos como Ardillas), y Geralt, pese a sus anteriores afirmaciones sobre neutralidad, lucha contra ellos para proteger a Ciri, Triss y sus amigos.',12);
		//Serguéi Lukiánenko
		$this->libro_model->crear('Guardianes de la noche', '9784567890120',[10], [15] ,'español',321,'Antón Gorodetskiy, un resignado mago debe seguir las pistas de un vampiro al igual que va tras Yegor, quien ha sido llamado por dos vampiros mientras iba en el metro, allí ve a Svetlana, una joven mujer que tiene un vórtice sobre su cabeza y que va in crescendo. Finalmente encuentra a los vampiros que contactaron con Yegor, los cuales no tienen licencia especial, sin embargo, Antón mata a uno mientras que el otro (una mujer) huye.

Al volver al cuartel general de la Guardia Nocturna, su jefe, Borís Ignátievich "Gesar" le informa que podría estar en peligro, puesto que Zabulón ha puesto precio a su cabeza por haber matado a un Otro rival. Como ayuda y protección, Gesar le da una lechuza disecada de nombre Olga, pero lo rechaza, al cabo de unos días, Antón se encuentra el ave en su apartamento y descubre que el animal se transforma en una mujer. Al día siguiente, Antón usa de manera ilegal sus poderes para hacer el bien (lo que él llama "remoralización) y se topa con Alisa Dónnikova, una Guardiana de la Luz, con quien llega a un acuerdo en el que le esté permitida hacer un pequeño acto malévolo como compensación a cambio de no informar. Es entonces cuando descubre que Olga puede hablar dentro del cuerpo de la lechuza y esta le confiesa que está en ese cuerpo como penitencia.

Más tarde se le asigna el trabajo de proteger a Yegor de la vampiresa y acude a su apartamento, pero cuando este se adentra en la Penumbra por vez primera y cae inconsciente, se da cuenta de que puede ser el "Gran Otro" del que habla una profecía, el cual debe elegir entre la Luz o la Oscuridad. Por otro lado, Gesar envía a Ignat en busca de Svetlana Nazárova, la cual está bajo una maldición e intentar que confiese quien la maldijo pero es incapaz. Finalmente es Antón quien es llamado para visitar a Svetlana, al mismo tiempo, la vampiresa llama a Yegor y le atrae hasta la terraza.',12);
		$this->libro_model->crear('Guardianes del día', '9784567890120',[10], [15] ,'español',321,'En el prologo, una mujer llamada Natasha acude a los servicios de una bruja para que le prepare un encantério para que su marido, quien recientemente la ha dejado por otra, vuelva con ella. Pero momentos después de acordar el trato son interrumpidos por la Guardia nocturna, los cuales arrestan a la bruja por prácticas ilegales y Natasha parece confusa.

La historia se traslada hasta Alissa Donnikova, una joven, pero poderosa Otra de la oscuridad que se dispone a ir hasta la sede de la Guardia diurna para encargarse de una misión con sus compañeros. La misión consiste en reclutar a un Otro no iniciado. Lo que parece una operación rutinaria se va complicando cuando acuden a la sede de la Guardia nocturna y comienza una batalla para liberar a ese Otro que están buscando. En la contienda, Alisa casi fallece y pierde sus poderes. Para recuperarse, Zavulón la manda a un campamento de Artek a orillas del mar Negro. Allí conoce a Igor, un joven del que no duda en enamorarse, sin embargo las cosas empiezan a complicarse cuando ambos descubren que son enemigos (Igor resulta ser un mago de la Luz de tercera categoría). A pesar de que Igor le pide que se marche, Alisa se resiste y la desafía a un combate en mitad del mar en el que la bruja perece al no mostrar resistencia.

Tras llamar a Zavulón para que la ayude, descubre que su jefe había planeado su muerte desde hacía tiempo. Junto a Alisa, fallece también Makar, un joven que también se sentía atraído por ella y que muere por intentar rescatarla del ahogamiento.',12);
		$this->libro_model->crear('Guardianes del crepúsculo', '9784567890120',[10], [15] ,'español',321,'Hesser le encomienda a Anton que vaya a investigar unas misteriosas cartas que llegan a ambas guardias y a la Inquisición. En las cartas, un gran mago de la luz promete convertir a un humano corriente en un Otro. Sin embargo, los demás Otros creen que técnicamente es imposible, puesto que el Otro encargado de la transformación se arriesga a ser neutralizado por alta traición.

Para empezar, Anton se traslada al Assol, un complejo lujoso de Moscú de donde procede el correo. Por otra parte, Zavulón envía a Kostya y la Inquisición a Vităeslav y a Edgar. Tras varias pesquisas, Anton descubre que el humano interesado en tales dones ha estado chantajeando al Otro, pero para sorpresa, descubre que se trata de un hombre de negocios de 60 años que resulta ser el hijo de Hesser.

Cuando los cuatro piden explicaciones a Hesser, este admite haber tenido un hijo, pero niega saber que estaba vivo. Tras descubrir que se trata de un Otro potencial, el líder de la Guardia Nocturna reclama el derecho de iniciarle.',12);
		//Dmitry Glukhovsky
		$this->libro_model->crear('Metro 2033', '9784567890120',[11], [] ,'español',321,'En 2013 se produce una guerra nuclear y la población superviviente de lo que antaño era Moscú decide resguardarse dentro del metro distribuyéndose por la red. Cada estación ha desarrollado estructuras de estado que las asemeja a las "Ciudades Estado" con sus respectivas alianzas.

Pronto aparecen facciones varias, desde los "Guardianes del Orden" hasta la facción comunista de la "Línea Roja" pasando por los neonazis del IV Reich. En el centro se encuentra la Polis, la cual está formada por cuatro estaciones consideradas la "arteria principal" por su localización y enlaces con otras líneas, y la Hansa, la cual controla las principales estaciones de la Línea Circular y su economía.

A medida que estas "Estaciones Estado" se desarrollan, surgen los conflictos entre otras como la Línea Roja y el IV Reich, los cuales buscan imponer su supremacía sobre el otro sin importar el coste, incluyendo las otras estaciones que buscan mantenerse neutrales, algunas son demolidas y otras pretenden unirse a la Hansa. Otras tantas deben hacer frente al problema de la superficie, de la cual proceden varios animales mutados por la radiación y que acechan por todas partes a sus presas, en este caso: humanos. Otros peligros son un grupo de mutantes conocidos como "Oscuros" o "Negros". Como su nombre indica, son humanos que tras ser expuestos a la radiación a largo plazo, su piel se oscurece y desarrollan mutaciones además de la aparente habilidad para manipular la mente de los supervivientes del metro.

Si bien es cierto que la mayor parte de la red metropolitana está controlada por estas mencionadas facciones, otras tantas estaciones, las que no han sido abandonadas o destruidas, forman alianzas independientes, siendo VDNJ, una de ellas y en la que empieza la historia.',12);
		$this->libro_model->crear('Metro 2034', '9784567890120',[11], [] ,'español',321,'In the south of the Metro, Sevastopolskaya Station relies on regular supplies of ammunition and other goods from the central stations to survive. Without explanation, communication is lost and stocks begin to run low. Several scouting parties leave to investigate, but do not return.

Hunter, who disappeared during the events of Metro 2033 and is now heavily traumatised, has been working as a border guard at Sevastopolskaya. He volunteers to lead one last attempt to re-establish contact with the central Metro stations before the station mobilises its military and heads north en masse. He is accompanied by Homer, an old man searching for inspiration for a book. Hunter makes contact with the guards at Tulskaya Station, but after an argument the hermetic doors are sealed. Hunter tells Homer that the station had been captured by bandits and must be destroyed, but Homer recovers a diary left by one of the previous expeditions which indicates that the station had been infected by deadly disease.',12);
		$this->libro_model->crear('Metro 2035', '9784567890120',[11], [] ,'español',321,'It is the year 2035 and the various societies of Moscow´s post-apocalyptic metro system have seen many changes. Its neo-Nazi faction, the Fourth Reich, has been reformed with the aim of creating a less harsh image, but the confidential matters it conceals from the public eye have never been so horrifying. The Stalinist underground empire of the Red Line is faced with its largest famine thus far due to an outbreak that renders their food stocks inedible. Meanwhile, the Hanza trading alliance and the Ranger Order become suspiciously close after the former supplied the latter with new recruits following heavy losses suffered at a battle against the Red Line for control of an important bunker.

One year has passed since protagonist Artyom willingly left the Ranger Order, marrying Anna even though his CO (and now father in law) Miller was opposed to the idea. The couple move to lead a quiet life on the young man´s home station of VDNKh. But Artyom is unwilling to continue like this. Returning in his thoughts back to the time when he stood on top of the Ostankino Tower, he is certain that he managed to barely hear a transmission from another city. Fuelled by an undying hope, Artyom leaves the metro several times a week to ascend a nearby building, attempting to establish radio contact with anyone who might have survived the nuclear war in other parts of the Russian Federation and beyond. Although he was vaunted as a hero for destroying the Dark Ones - an error that only he is truly aware of - Artyom is now shunned by fellow inhabitants of VDNKh and perceived as insane for clinging onto his seemingly unrealistic vision. His risky trips outside of the subway frequently expose him to unsafe doses of radiation. His marriage is endangered also, as Anna wishes nothing more than for her husband to start functioning normally again; she dreams of one day giving birth to a healthy child.

In spite of this, Artyom obstinately carries on with his apparently irrational routine. It seems as though his devotion is answered by the arrival of Homer (one of Metro 2034´s main characters) on his home station. The two soon become involved in affairs that transcend their knowledge. They embark on a quest across the Moscow Metro in pursuit of answers and are joined by faces new and old along the way, including personas that have already appeared in Glukhovsky´s earlier books from the franchise. Artyom´s lengthy and dangerous journey culminates in the discovery of the metro´s darkest secrets.

',12);
		
	}
	
	public function creaValoracion(){
		$this->load->model('valoracion_model');
		//($id_libro, $id_usuario, $nota,$contenido)
		
		$this->valoracion_model->crear(1,1,4,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(2,1,7,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(3,1,2,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(1,2,6,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(1,3,6,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(1,4,6,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
		$this->valoracion_model->crear(1,5,6,'Lorem fistrum amatomaa amatomaa ese que llega a gramenawer me cago en tus muelas hasta luego Lucas al ataquerl amatomaa. Fistro ese que llega diodeno ahorarr ese pedazo de condemor quietooor pupita torpedo por la gloria de mi madre. Quietooor benemeritaar ese pedazo de ese hombree mamaar diodeno hasta luego Lucas diodeno de la pradera a peich a wan. Apetecan la caidita por la gloria de mi madre al ataquerl va usté muy cargadoo. Sexuarl caballo blanco caballo negroorl ese pedazo de pecador jarl. Quietooor diodeno benemeritaar benemeritaar por la gloria de mi madre va usté muy cargadoo diodenoo no te digo trigo por no llamarte Rodrigor llevame al sircoo qué dise usteer no puedor. Diodeno torpedo de la pradera llevame al sircoo de la pradera a peich llevame al sircoo qué dise usteer. A wan no te digo trigo por no llamarte Rodrigor llevame al sircoo amatomaa pecador.');
	}
	
	public function creaArticulo(){
		$this->load->model('articulo_model');
		
		//($titulo, $contenido, $idUsuario, $id_autores, $id_libros)
		$this->articulo_model->create_articulo('Articulo1', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 1, [1,2], [1,2] );
		$this->articulo_model->create_articulo('Articulo2', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 2, [3,4], [1,2] );
		$this->articulo_model->create_articulo('Articulo3', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 3, [5,6], [1,2] );
		$this->articulo_model->create_articulo('Articulo4', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 4, [7,8], [1,2] );
		$this->articulo_model->create_articulo('Articulo5', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 5, [9,10], [1,2] );
		$this->articulo_model->create_articulo('Articulo6', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 6, [11,2], [1,2] );
		$this->articulo_model->create_articulo('Articulo7', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 7, [1,2], [1,2] );
		$this->articulo_model->create_articulo('Articulo8', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 1, [11,9], [1,2] );
		$this->articulo_model->create_articulo('Articulo9', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 2, [8,10], [1,2] );
		$this->articulo_model->create_articulo('Articulo10', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 3, [7,5], [1,2] );
		$this->articulo_model->create_articulo('Articulo11', 'Lorem fistrum a gramenawer no puedor jarl torpedo. Apetecan fistro torpedo fistro a gramenawer ese que llega a peich diodenoo sexuarl mamaar torpedo. Te va a hasé pupitaa a gramenawer se calle ustée diodeno. Papaar papaar la caidita condemor pupita sexuarl a wan quietooor sexuarl se calle ustée. Sexuarl papaar papaar caballo blanco caballo negroorl mamaar. Fistro ahorarr mamaar se calle ustée de la pradera jarl apetecan condemor pupita amatomaa. Torpedo se calle ustée me cago en tus muelas apetecan. Mamaar hasta luego Lucas apetecan torpedo papaar papaar a wan está la cosa muy malar la caidita al ataquerl sexuarl pecador.

Va usté muy cargadoo a wan apetecan pupita papaar papaar me cago en tus muelas. De la pradera fistro la caidita está la cosa muy malar. Diodeno no te digo trigo por no llamarte Rodrigor a peich ese pedazo de. Benemeritaar hasta luego Lucas no te digo trigo por no llamarte Rodrigor ahorarr pupita quietooor. Papaar papaar pupita hasta luego Lucas hasta luego Lucas caballo blanco caballo negroorl ese hombree te voy a borrar el cerito ese pedazo de ese hombree llevame al sircoo a wan. Quietooor te va a hasé pupitaa va usté muy cargadoo hasta luego Lucas de la pradera tiene musho peligro ese que llega no puedor. Papaar papaar diodeno no te digo trigo por no llamarte Rodrigor ese pedazo de no puedor mamaar está la cosa muy malar ese que llega está la cosa muy malar. Al ataquerl la caidita de la pradera benemeritaar diodeno me cago en tus muelas llevame al sircoo.

Papaar papaar por la gloria de mi madre caballo blanco caballo negroorl de la pradera pecador torpedo a wan al ataquerl la caidita no puedor ese hombree. Fistro va usté muy cargadoo a peich no puedor ese pedazo de pecador llevame al sircoo tiene musho peligro ese pedazo de jarl. Te voy a borrar el cerito está la cosa muy malar ese pedazo de condemor de la pradera ese que llega. No te digo trigo por no llamarte Rodrigor por la gloria de mi madre a wan va usté muy cargadoo llevame al sircoo al ataquerl diodenoo condemor amatomaa tiene musho peligro torpedo. Te voy a borrar el cerito sexuarl me cago en tus muelas a peich apetecan. De la pradera llevame al sircoo ese que llega a wan sexuarl te voy a borrar el cerito benemeritaar condemor se calle ustée caballo blanco caballo negroorl diodeno. A gramenawer qué dise usteer apetecan ese hombree torpedo ahorarr papaar papaar.', 4, [1,2], [1,2] );
		
	}
	
	public function creaComentario(){
		$this->load->model('comentario_model');
		
		//($contenido, $id_artículo, $id_usuario)
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 2);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 3);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 4);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 5);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 6);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 7);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 1);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 2);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 3);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 4);
		$this->comentario_model->crear('Lorem fistrum me cago en tus muelas hasta luego Lucas a gramenawer por la gloria de mi madre de la pradera diodenoo papaar papaar va usté muy cargadoo no te digo trigo por no llamarte Rodrigor va usté muy cargadoo.', 1, 5);
	}
	
	public function creaListaLibros(){
		$this->load->model('listaLibros_model');
		
		//($nombre, $ids_libros, $id_usuario,$descripcion)
		$this->listaLibros_model->crear('ListaLibros1', [1,2,3,4,5], 1, 'Esta Es la lista de libros numero 1');
		$this->listaLibros_model->crear('ListaLibros2', [1,2,3,4,5], 2, 'Esta Es la lista de libros numero 2');
		$this->listaLibros_model->crear('ListaLibros3', [1,2,3,4,5], 3, 'Esta Es la lista de libros numero 3');
		$this->listaLibros_model->crear('ListaLibros4', [1,2,3,4,5], 4, 'Esta Es la lista de libros numero 4');
		$this->listaLibros_model->crear('ListaLibros5', [1,2,3,4,5], 5, 'Esta Es la lista de libros numero 5');
		$this->listaLibros_model->crear('ListaLibros6', [1,2,3,4,5], 6, 'Esta Es la lista de libros numero 6');
		$this->listaLibros_model->crear('ListaLibros7', [1,2,3,4,5], 7, 'Esta Es la lista de libros numero 7');
		$this->listaLibros_model->crear('ListaLibros8', [1,2,3,4,5], 1, 'Esta Es la lista de libros numero 1');
		$this->listaLibros_model->crear('ListaLibros9', [1,2,3,4,5], 2, 'Esta Es la lista de libros numero 2');
		$this->listaLibros_model->crear('ListaLibros10', [1,2,3,4,5], 3, 'Esta Es la lista de libros numero 3');
	}
	
	public function creaListaAutores(){
		$this->load->model('listaautores_model');
		
		//($nombre, $ids_autores, $id_usuario,$descripcion)
		$this->listaautores_model->crear('Listaautores1', [1,2,3,4,5], 1, 'Esta Es la lista de autores numero 1');
		$this->listaautores_model->crear('Listaautores2', [6,7,8,9,10], 2, 'Esta Es la lista de autores numero 2');
		$this->listaautores_model->crear('Listaautores3', [1,3,4,5,7], 3, 'Esta Es la lista de autores numero 3');
		$this->listaautores_model->crear('Listaautores4', [2,4,6,8,10], 4, 'Esta Es la lista de autores numero 4');
		$this->listaautores_model->crear('Listaautores5', [1,2,3,4,5], 5, 'Esta Es la lista de autores numero 5');
		$this->listaautores_model->crear('Listaautores6', [3,6,9,10,11], 6, 'Esta Es la lista de autores numero 6');
		$this->listaautores_model->crear('Listaautores7', [1,2,3,4,5], 7, 'Esta Es la lista de autores numero 7');
		$this->listaautores_model->crear('Listaautores8', [1,2,3,4,5], 1, 'Esta Es la lista de autores numero 8');
		$this->listaautores_model->crear('Listaautores9', [1,2,3,4,5], 2, 'Esta Es la lista de autores numero 9');
		$this->listaautores_model->crear('Listaautores10', [1,2,3,4,5], 3, 'Esta Es la lista de autores numero 10');
		
	}
    
    //Crear tabla referencial de paises en la base de datos. http://localhost/proyecto/pais
    public function crear(){
        $this->load->model('pais_model');       
        
        try{
            
            $this ->pais_model ->create_pais('Afganistán');
            $this ->pais_model ->create_pais('Albania');
            $this ->pais_model ->create_pais('Alemania');
            $this ->pais_model ->create_pais('Andorra');
            $this ->pais_model ->create_pais('Angola');
            $this ->pais_model ->create_pais('Antigua y Barbuda');
            $this ->pais_model ->create_pais('Arabia Saudita ');
            $this ->pais_model ->create_pais('Argelia');
            $this ->pais_model ->create_pais('Argentina');
            $this ->pais_model ->create_pais('Armenia');
            $this ->pais_model ->create_pais('Australia');
            $this ->pais_model ->create_pais('Austria');
            $this ->pais_model ->create_pais('Azerbaiyán');
            $this ->pais_model ->create_pais('Bahamas');
            $this ->pais_model ->create_pais('Bangladés');
            $this ->pais_model ->create_pais('Barbados');
            $this ->pais_model ->create_pais('Baréin');
            $this ->pais_model ->create_pais('Bélgica');
            $this ->pais_model ->create_pais('Belice');
            $this ->pais_model ->create_pais('Benín');
            $this ->pais_model ->create_pais('Bielorrusia');
            $this ->pais_model ->create_pais('Birmania');
            $this ->pais_model ->create_pais('Bolivia');
            $this ->pais_model ->create_pais('Bosnia y Herzegovina');
            $this ->pais_model ->create_pais('Botsuana');
            $this ->pais_model ->create_pais('Brasil');
            $this ->pais_model ->create_pais('Brunéi');
            $this ->pais_model ->create_pais('Bulgaria');
            $this ->pais_model ->create_pais('Burkina Faso');
            $this ->pais_model ->create_pais('Burundi');
            $this ->pais_model ->create_pais('Bután');
            $this ->pais_model ->create_pais('Cabo Verde');
            $this ->pais_model ->create_pais('Camboya');
            $this ->pais_model ->create_pais('Camerún');
            $this ->pais_model ->create_pais('Canadá');
            $this ->pais_model ->create_pais('Catar');
            $this ->pais_model ->create_pais('Chad');
            $this ->pais_model ->create_pais('Chile');
            $this ->pais_model ->create_pais('China');
            $this ->pais_model ->create_pais('Chipre');
            $this ->pais_model ->create_pais('Ciudad del Vaticano');
            $this ->pais_model ->create_pais('Colombia');
            $this ->pais_model ->create_pais('Comoras');
            $this ->pais_model ->create_pais('Corea del Norte');
            $this ->pais_model ->create_pais('Corea del Sur');
            $this ->pais_model ->create_pais('Costa de Marfil');
            $this ->pais_model ->create_pais('Costa Rica');
            $this ->pais_model ->create_pais('Croacia');
            $this ->pais_model ->create_pais('Cuba');
            $this ->pais_model ->create_pais('Dinamarca');
            $this ->pais_model ->create_pais('Dominica');
            $this ->pais_model ->create_pais('Ecuador');
            $this ->pais_model ->create_pais('Egipto');
            $this ->pais_model ->create_pais('El Salvador');
            $this ->pais_model ->create_pais('Emiratos Árabes Unidos');
            $this ->pais_model ->create_pais('Eritrea');
            $this ->pais_model ->create_pais('Eslovaquia');
            $this ->pais_model ->create_pais('Eslovenia');
            $this ->pais_model ->create_pais('España');
            $this ->pais_model ->create_pais('Estados Unidos');
            $this ->pais_model ->create_pais('Estonia');
            $this ->pais_model ->create_pais('Etiopía');
            $this ->pais_model ->create_pais('Filipinas');
            $this ->pais_model ->create_pais('Finlandia');
            $this ->pais_model ->create_pais('Fiyi');
            $this ->pais_model ->create_pais('Francia');
            $this ->pais_model ->create_pais('Gabón');
            $this ->pais_model ->create_pais('Gambia');
            $this ->pais_model ->create_pais('Georgia');
            $this ->pais_model ->create_pais('Ghana');
            $this ->pais_model ->create_pais('Granada');
            $this ->pais_model ->create_pais('Grecia');
            $this ->pais_model ->create_pais('Guatemala');
            $this ->pais_model ->create_pais('Guyana');
            $this ->pais_model ->create_pais('Guinea');
            $this ->pais_model ->create_pais('Guinea ecuatorial');
            $this ->pais_model ->create_pais('Guinea-Bisáu');
            $this ->pais_model ->create_pais('Haití');
            $this ->pais_model ->create_pais('Honduras');
            $this ->pais_model ->create_pais('Hungría');
            $this ->pais_model ->create_pais('India');
            $this ->pais_model ->create_pais('Indonesia');
            $this ->pais_model ->create_pais('Irak');
            $this ->pais_model ->create_pais('Irán');
            $this ->pais_model ->create_pais('Irlanda');
            $this ->pais_model ->create_pais('Islandia');
            $this ->pais_model ->create_pais('Islas Marshall');
            $this ->pais_model ->create_pais('Islas Salomón');
            $this ->pais_model ->create_pais('Israel');
            $this ->pais_model ->create_pais('Italia');
            $this ->pais_model ->create_pais('Jamaica');
            $this ->pais_model ->create_pais('Japón');
            $this ->pais_model ->create_pais('Jordania');
            $this ->pais_model ->create_pais('Kazajistán');
            $this ->pais_model ->create_pais('Kenia');
            $this ->pais_model ->create_pais('Kirguistán');
            $this ->pais_model ->create_pais('Kiribati');
            $this ->pais_model ->create_pais('Kuwait');
            $this ->pais_model ->create_pais('Laos');
            $this ->pais_model ->create_pais('Lesoto');
            $this ->pais_model ->create_pais('Letonia');
            $this ->pais_model ->create_pais('Líbano');
            $this ->pais_model ->create_pais('Liberia');
            $this ->pais_model ->create_pais('Libia');
            $this ->pais_model ->create_pais('Liechtenstein');
            $this ->pais_model ->create_pais('Lituania');
            $this ->pais_model ->create_pais('Luxemburgo');
            $this ->pais_model ->create_pais('Madagascar');
            $this ->pais_model ->create_pais('Malasia');
            $this ->pais_model ->create_pais('Malaui');
            $this ->pais_model ->create_pais('Maldivas');
            $this ->pais_model ->create_pais('Malí');
            $this ->pais_model ->create_pais('Malta');
            $this ->pais_model ->create_pais('Marruecos');
            $this ->pais_model ->create_pais('Mauricio');
            $this ->pais_model ->create_pais('Mauritania');
            $this ->pais_model ->create_pais('México');
            $this ->pais_model ->create_pais('Micronesia');
            $this ->pais_model ->create_pais('Moldavia');
            $this ->pais_model ->create_pais('Mónaco');
            $this ->pais_model ->create_pais('Mongolia');
            $this ->pais_model ->create_pais('Montenegro');
            $this ->pais_model ->create_pais('Mozambique');
            $this ->pais_model ->create_pais('Namibia');
            $this ->pais_model ->create_pais('Nauru');
            $this ->pais_model ->create_pais('Nepal');
            $this ->pais_model ->create_pais('Nicaragua');
            $this ->pais_model ->create_pais('Níger');
            $this ->pais_model ->create_pais('Nigeria');
            $this ->pais_model ->create_pais('Noruega');
            $this ->pais_model ->create_pais('Nueva Zelanda');
            $this ->pais_model ->create_pais('Omán');
            $this ->pais_model ->create_pais('Países Bajos');
            $this ->pais_model ->create_pais('Pakistán');
            $this ->pais_model ->create_pais('Palaos');
            $this ->pais_model ->create_pais('Panamá');
            $this ->pais_model ->create_pais('Papúa Nueva Guinea');
            $this ->pais_model ->create_pais('Paraguay');
            $this ->pais_model ->create_pais('Perú');            
            $this ->pais_model ->create_pais('Polonia');
            $this ->pais_model ->create_pais('Portugal');
            $this ->pais_model ->create_pais('Reino Unido');
            $this ->pais_model ->create_pais('República Centroafricana');
            $this ->pais_model ->create_pais('República Checa');
            $this ->pais_model ->create_pais('República de Macedonia');
            $this ->pais_model ->create_pais('República del Congo');
            $this ->pais_model ->create_pais('República Democrática del Congo');
            $this ->pais_model ->create_pais('República Dominicana');
            $this ->pais_model ->create_pais('República Sudafricana');
            $this ->pais_model ->create_pais('Ruanda');
            $this ->pais_model ->create_pais('Rumanía');
            $this ->pais_model ->create_pais('Rusia');
            $this ->pais_model ->create_pais('Samoa');
            $this ->pais_model ->create_pais('San Cristóbal y Nieves');
            $this ->pais_model ->create_pais('San Marino');
            $this ->pais_model ->create_pais('San Vicente y las Granadinas');
            $this ->pais_model ->create_pais('Santa Lucía');
            $this ->pais_model ->create_pais('Santo Tomé y Príncipe');
            $this ->pais_model ->create_pais('Senegal');
            $this ->pais_model ->create_pais('Serbia');
            $this ->pais_model ->create_pais('Seychelles');
            $this ->pais_model ->create_pais('Sierra Leona');
            $this ->pais_model ->create_pais('Singapur');
            $this ->pais_model ->create_pais('Siria');
            $this ->pais_model ->create_pais('Somalia');
            $this ->pais_model ->create_pais('Sri Lanka');
            $this ->pais_model ->create_pais('Suazilandia');
            $this ->pais_model ->create_pais('Sudán');
            $this ->pais_model ->create_pais('Sudán del Sur');
            $this ->pais_model ->create_pais('Suecia');
            $this ->pais_model ->create_pais('Suiza');
            $this ->pais_model ->create_pais('Surinam');
            $this ->pais_model ->create_pais('Tailandia');
            $this ->pais_model ->create_pais('Tanzania');
            $this ->pais_model ->create_pais('Tayikistán');
            $this ->pais_model ->create_pais('Timor Oriental');
            $this ->pais_model ->create_pais('Togo');
            $this ->pais_model ->create_pais('Tonga');
            $this ->pais_model ->create_pais('Trinidad y Tobago');
            $this ->pais_model ->create_pais('Túnez');
            $this ->pais_model ->create_pais('Turkmenistán');
            $this ->pais_model ->create_pais('Turquía');
            $this ->pais_model ->create_pais('Tuvalu');
            $this ->pais_model ->create_pais('Ucrania');
            $this ->pais_model ->create_pais('Uganda');
            $this ->pais_model ->create_pais('Uruguay');
            $this ->pais_model ->create_pais('Uzbekistán');
            $this ->pais_model ->create_pais('Vanuatu');
            $this ->pais_model ->create_pais('Venezuela');
            $this ->pais_model ->create_pais('Vietnam');
            $this ->pais_model ->create_pais('Yemen');
            $this ->pais_model ->create_pais('Yibuti');
            $this ->pais_model ->create_pais('Zambia');
            $this ->pais_model ->create_pais('Zimbabue');
            
          
            
        }catch (Exception $e){
            
        }
    }    
    
    public function listar(){
    	$this->listarPost();
    }
    public function listarPost($f=''){
    	$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : $f;
    	
    	$this->load->model('pais_model');
    	$datos['paises']=$this->pais_model->getAll($filtro);
    	$datos['filtro'] = $filtro;
    	enmarcar($this, 'pais/listar',$datos);    	
    	
    }    
    
    
}