<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class documentossolicitadosmodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}




function redord($documento_solicitado , $especificacionesdocumento , $idarchivo){
  	
  	


	$existe  = $this->existredocumentoinarchivo( $documento_solicitado , $idarchivo);
	if ($existe!=1) {
		
		$queryinsert ="INSERT INTO  documentosolicitado(nombredocumento , status , idarchivo , notadocumento , puntuacion) 
					VALUES ( '".$documento_solicitado ."' , 1 , '".$idarchivo."' ,  '".$especificacionesdocumento."' , 10 )"; 
  	
		$dbresponse = $this->db->query( $queryinsert); 	

	}else{
		$dbresponse = 2;
	}

	return $dbresponse;
	 	
}


 function existredocumentoinarchivo( $documento_solicitado , $idarchivo){

        $query_existrecurso ="SELECT * FROM documentosolicitado WHERE  nombredocumento = '". $documento_solicitado . "'  AND  idarchivo = '". $idarchivo."' ";
        $result = $this->db->query($query_existrecurso);  
        /*Bandera */

        $b=0;
        foreach ($result ->result_array() as $row){

            $b++;


        }   
        return $b;      
    }
    /*Termina función */


function listbyidarchivo($idarchivo){
	


	$queryselect  = "SELECT * FROM documentosolicitado WHERE idarchivo = '".$idarchivo."' ";
	$result = $this->db->query($queryselect);  
	return $result->result_array();

}




/**/

function updatenombredocsolicitadobyid($nuevonombre, $iddocumentosolicitado){
	

	$queryupdatenombre  = "UPDATE  documentosolicitado SET nombredocumento  = '".$nuevonombre."' WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdatenombre);  
	return $result;


}


function updatenotadocumentosolicitadomyid($nuevanota, $iddocumentosolicitado){
	
	$queryupdatenota  = "UPDATE  documentosolicitado SET notadocumento = '".$nuevanota."' WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdatenota);  
	return $result;


}



function deletesolicituddbbyid( $iddocumentosolicitado){

	$querydelete = "DELETE FROM documentosolicitado  WHERE iddocumentosolicitado  = '". $iddocumentosolicitado."' ";
	$result = $this->db->query($querydelete);  
	return $result;
}


function uppuntuaciondbbyiddocumentosolicitado($iddocumentosolicitado, $nuevapuntuacion){

	$queryupdate = "UPDATE documentosolicitado SET puntuacion = '".$nuevapuntuacion."' WHERE  iddocumentosolicitado = '".$iddocumentosolicitado."' ";
	$result = $this->db->query($queryupdate);  
	return $result;

}


/*Termina modelo */
}



