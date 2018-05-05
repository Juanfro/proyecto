<?php

class Articulo extends CI_Controller
{

    public function index(){
        $this->crear();
    }

    public function crear(){
        enmarcar($this, 'Articulo/crear');
    }
    
    public function crearPost(){
        $this->load->model('articulo_model');
        
        $titulo = isset($_POST['titulo']) ? $_POST['titulo']: null;
        $contenido = isset($_POST['contenido']) ? $_POST['contenido']: null;
        
        try{
            $this-> articulo_model -> create_articulo($titulo, $contenido);
            header('Location:'.base_url().'articulo/crearPOSTok?titulo='.$titulo.'&contenido='.$contenido);
            
        }catch(Exception $e){
            header('Location:'.base_url().'articulo/crearPOSTerror?titulo='.$titulo.'&contenido='.$contenido);
        }
    }
    
    public function crearPOSTok(){
        $datos['body']['titulo'] = $_GET['titulo'];
        $datos['body']['contenido'] = $_GET['contenido'];
        enmarcar($this, 'articulo/crearPOSTok', $datos);
    }
    public function crearPOSTerror(){
        $datos['body']['titulo'] = $_GET['titulo'];
        $datos['body']['contenido'] = $_GET['contenido'];
        enmarcar($this, 'articulo/crearPOSTerror', $datos);
    }
    
    //TODO Crear Articulos de muestra
    
    
    
    //si pongo ['body']  me miestra errores
    public function listar(){
    	$this->load->model('articulo_model');
    	$datos['articulos']=$this->articulo_model->getAll();
    	enmarcar($this, 'Articulo/listar',$datos);
    }
    
    public function modificar(){
    	
    	$this->load->model('articulo_model');
    	$id_articulo=$_POST['id_articulo'];
    	$datos['articulo']=$this->articulo_model->getArticuloPorId($id_articulo);
     
    	enmarcar($this, 'Articulo/modificar',$datos);
    }
    
    public function modificarPost(){
    	
    	$titulo=$_POST['titulo'];
    	$contenido=$_POST['contenido'];
    	
    	$id_articulo=$_POST['id_articulo'];
    	$this->load->model('articulo_model');
    	
    	$this->articulo_model->modificar($id_articulo,$titulo,$contenido);
    	
    	
    	enmarcar($this, 'Articulo/modificarOK');
    }
   
    public function borrar(){
    	
    	$id_articulo=$_POST['id_articulo'];
    	$this->load->model('articulo_model');
    	$this->articulo_model->borrar($id_articulo);
    	
    	enmarcar($this, 'Articulo/borrarOK');
    	
    }
}
?>
