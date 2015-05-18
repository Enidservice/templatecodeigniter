<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Movimientosrest extends REST_Controller{

    function __construct(){

            parent::__construct();


            $this->load->model("clientesmodel");  	
            $this->load->library('sessionclass');


            
    }        

    //Obtenemos una peticion por el metodo post para actualizarNombre mediante el modelo

    function administradorconusers_get(){

          if ( $this->sessionclass->is_logged_in() == 1) {  


          		$idusuario =  $this->sessionclass->getidusuario();


          		$this->response($this->clientesmodel->getClienteByidUserrepo($idusuario));

             }else{
           		
           		 $this->sessionclass->logout();
        	}       
        
    }

/*************************************************************************************************************/

    /*Termina rest*/
}
