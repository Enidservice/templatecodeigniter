<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class evaluacionmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */

    function getdocumentosuser( $idclienteorg ){

      $querydocumentossolicitados = "select * from documentosolicitado as ds , historial_crediticio as hc where ds.idarchivo = hc.idcredito and hc.idclienteorg = '".$idclienteorg ."' ";

      
      $resultado = $this->db->query($querydocumentossolicitados);
      return $resultado ->result_array();
    }



/*Termina modelo */
}



