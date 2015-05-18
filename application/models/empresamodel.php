<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class empresamodel extends CI_Model {

function __construct(){

        parent::__construct();        
        $this->load->database();
}


function existcompanybyname( $nombreempresa ){


    $query_exist = "SELECT * FROM empresa WHERE nombreempresa = '".$nombreempresa."' "; 
    
    $result = $this->db->query($query_exist);       
            
    $flag = 0; 

     foreach ($result->result_array() as  $row) {
              
          $flag++;

      }
     
    return $flag;


}/*Termina la función */




function recordempresawhitname( $nombreempresa ){


    $query_insert = "INSERT INTO empresa (nombreempresa) VALUES ('".$nombreempresa."' )";
    $tryrecord = $this->db->query($query_insert); 
    

    /*Si se registro*/
    if ( $tryrecord   ==  true ) {
  
    $query_lastelemento  = "SELECT MAX(idempresa) AS idempresa FROM empresa";
    $resultlastelemento  = $this->db->query($query_lastelemento); 


        $ultimo = 0;

        /*Ultimo elemento ingresado */
        foreach ($resultlastelemento ->result_array() as $row) {
         
           $ultimo = $row["idempresa"];
        }
        
        return $ultimo;


    }else{
      return "Fallo algo al registrar empresa";
    }


    
}/*Termina la función */


/*Lista los créditos que éstan asociados */
function getcreditosdisponiblesbyidempresa($idempresa){



  $queryselect ="SELECT * FROM archivo WHERE  idempresa ='". $idempresa. "'";
  $result  = $this->db->query($queryselect ); 
    
  return $result->result_array();

}/**/


function getinfodocumentbyid($documento){

  $selectinfo = "SELECT * FROM documentosolicitado WHERE iddocumentosolicitado = '".$documento."' "; 
  $result  = $this->db->query($selectinfo ); 
    
  return $result->result_array();
}


/*Termina modelo */
}



