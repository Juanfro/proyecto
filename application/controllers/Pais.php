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
		
	}
	
	public function creaValoracion(){
		
	}
	
	public function creaArticulo(){
		
	}
	
	public function creaComentario(){
		
	}
	
	public function creaListaLibros(){
		
	}
	
	public function creaListaAutores(){
		
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