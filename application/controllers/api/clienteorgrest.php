<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Clienteorgrest extends REST_Controller{

    function __construct(){
            parent::__construct();
            

            $this->load->model("clientesmodel");
            $this->load->library('sessionclass');
            
        }         
	function index(){}        





function displayinfoclientebyid_get(){
  
    if ( $this->sessionclass->is_logged_in() == 1) {            

          $clienteorg = $this->input->get("clienteorg");
          $this->response( $this->clientesmodel->displayinfoclientebyid($clienteorg) );



       }else{
            $this->sessionclass->logout();
    }

}

/**********************************************************************************/

	/*Termina rest*/
}
