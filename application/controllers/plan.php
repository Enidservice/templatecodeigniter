<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Plan  extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function index(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			$data['titulo']='Planes empresariales';
			$data['titulo_sistema']='FEX';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$this->load->view('Template/header', $data);
			$this->load->view("plan/userplan" , $data);
			$this->load->view('Template/footer', $data);	
		
			


    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/



		
}/*Termina el controlador */
