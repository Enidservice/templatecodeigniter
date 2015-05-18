<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Creditorest extends REST_Controller{

    function __construct(){
            parent::__construct();
            

            $this->load->model("clientesmodel");
            $this->load->model("empresamodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        





/********************************************************************************************************/

function listinfocreditobyempresa_get(){

    
    if ( $this->sessionclass->is_logged_in() == 1) {            

            /*Captamos el recurso que estamo solicitando*/
           $idempresa =  $this->sessionclass->getidempresa();
           $this->response($this->getcreditosbyempresa($idempresa));  


       }else{
            $this->sessionclass->logout();
        }


}/*Termina la función*/



function getcreditosbyempresa($idempresa){

    return $this->empresamodel->getcreditosdisponiblesbyidempresa($idempresa);
}/*Termina la función*/


/**********************************************************************************/
function listarpersonasconcreditoempresa_get(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

          $idempresa =  $this->sessionclass->getidempresa();
         $this->response($this->clientesmodel->clientesbyempresa($idempresa));

        

       }else{
            $this->sessionclass->logout();
    }
}/*termina */

/**********************************************************************************/



function listarinformacioncreditobyuser_get(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->listarinfocreditosbyuser($clienteorg) );

       }else{
            $this->sessionclass->logout();
    }
}/*termina */

/**********************************************************************************/



function listarelnumerodecreditosdelapersona_get(){
  
    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->listarelnumerodecreditosdelapersona($clienteorg ) );

       }else{
            $this->sessionclass->logout();
    }

}



function surveydocumentclient_get(){

  

    if ( $this->sessionclass->is_logged_in() == 1) {            

        $documento = $this->get("documento");
        $clienteorg =  $this->get("clienteorg");

        $this->response($this->clientesmodel->surveydocumentclienteorg( $documento ,  $clienteorg ));

       }else{
            $this->sessionclass->logout();
    }

}/*termina función*/






function updaterespuestacliente_post(){


    if ( $this->sessionclass->is_logged_in() == 1) {            

      $pregunta = $this->post("pregunta"); 
      $idcostomer = $this->post("idcostomer");
      $respuesta =  $this->post("respuesta");

        $this->response($this->clientesmodel->updaterespuesta($pregunta , $idcostomer, $respuesta));

       }else{

        $this->sessionclass->logout();
    }


}/*termina la funcion*/
/**********************************************************************************/





function getinfodocument_get(){
   
   if ( $this->sessionclass->is_logged_in() == 1) {            

        
        $documento = $this->get("documento");
        $this->response($this->empresamodel->getinfodocumentbyid($documento));

       }else{

        $this->sessionclass->logout();
    }

}/*Termina la función*/


	/*Termina rest*/
}
