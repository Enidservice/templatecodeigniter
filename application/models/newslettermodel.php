<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class newslettermodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}

function registrarCorreo($correo, $seccion)
{
	//return $correo . $seccion;
  	$consulta = "INSERT INTO newsletters (mail, seccion) VALUES ('".$correo."','".$seccion."') ";
  	$resultado = $this->db->query($consulta);
  	return $resultado;
}


}/*Termina la función */






