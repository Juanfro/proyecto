<?php
class Pais extends CI_Controller{
    public function index(){
        $this->crear();
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
    	$this->load->model('pais_model');
    	$datos['paises']=$this->pais_model->getAll();
    	enmarcar($this, 'Pais/listar',$datos);
    }
    
    
    
}