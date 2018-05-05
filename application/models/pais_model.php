<?php
class pais_model extends CI_Model{
    
    public function create_pais($nombre_pais){
        $pais = R::findOne('pais', 'nombre=?', [$nombre_pais]);
        
        if ($pais==null){
            $pais=R::dispense('pais');
            
            $pais->nombre=$nombre_pais;
            
            R::store($pais);
            
        }else{
            //throw new Exception('pais duplicado');
        }
        
        R::close();
    }
    
    public function getAll(){
    	return R::findAll('pais');
    }
}