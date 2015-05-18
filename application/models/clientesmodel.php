<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once("cuentageneralmodel.php"); 
 class clientesmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }



    function clientesbyempresa($idempresa){

      $select= "SELECT  usuario.nombre as quienregistro, clienteorg.idclienteorg, clienteorg.nombrecompleto, 
      clienteorg.fecha_registro , clienteorg.status from  usuario, clienteorg WHERE clienteorg.idempresa = '".$idempresa."' and clienteorg.idusuario =  usuario.idusuario ";
      $result = $this->db->query($select);
      return $result ->result_array();
            
    }/*Termina la función*/     



/******************************************************************************************/
    
    function listarinfocreditosbyuser($idclienteorg){
      
      $query_select ="SELECT a.idarchivo , a.nombre , a.descripcion , 
      h.monto , h.idhistorial FROM  archivo AS a , historial_crediticio as h WHERE 
       a.idarchivo = h.idcredito AND h.idclienteorg ='".$idclienteorg."'";
      $result = $this->db->query($query_select);


      //$data["persona"] =  $result->result_array();
      //listarelnumerodecreditosdelapersona($idclienteorg)
     
    
      return  $result ->result_array() ;
    }

/**/

    function listarelnumerodecreditosdelapersona($idclienteorg){

      $query_select ="SELECT * FROM  historial_crediticio WHERE idclienteorg ='".$idclienteorg."'";
      $result = $this->db->query($query_select);
      return $result ->num_rows();
      
    }
/*****************************************************************************************/
  

  function displayinfoclientebyid($idclienteorg){
  
    $queryselectcliente  ="select c.idclienteorg, c.primernombre , c.segundonombre , c.primerapellido , 
    c.segundoapellido,  c.fecha_registro , c.nombrecompleto , c.status, usuario.nombre as personaqueregistropemera , usuario.idusuario  from clienteorg as c , usuario where  c.idusuario=usuario.idusuario AND c.idclienteorg='".$idclienteorg."'";
    $result =  $this->db->query($queryselectcliente);
    return $result->result_array();
  }



/****************************************************************************************************/

  function surveydocumentclienteorg( $documento ,  $clienteorg ){

      $dynamicquery = "select * from pregunta, documentosolicitado_pregunta where 
        documentosolicitado_pregunta.iddocumentosolicitado='".$documento."'
        and documentosolicitado_pregunta.idpregunta = pregunta.idpregunta";
      $result = $this->db->query($dynamicquery);
      $data["preguntas"] =  $result->result_array();


      $dynamicqueryrespuesta = "SELECT * FROM  clienteorg_respuesta WHERE idclienteorg ='".$clienteorg."' ";
      $resultclientresponde = $this->db->query($dynamicqueryrespuesta);

      $data["respuestas"] = $resultclientresponde->result_array();

      return $data;
  }



/****************************************************************************************************/


  function updaterespuesta($pregunta , $idcostomer , $respuesta){


      $queryexist  = "SELECT * FROM clienteorg_respuesta WHERE idclienteorg ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";
      $result = $this->db->query($queryexist);
      $existe=  $result ->num_rows();  

      if ($existe >0  ) {
        /*Update*/
          $queryupdate = "UPDATE clienteorg_respuesta  SET respuesta = '".$respuesta."' WHERE idclienteorg ='".$idcostomer."' AND idpregunta ='".$pregunta."' ";
          $resultupdate = $this->db->query($queryupdate);
          return $resultupdate;
      }else{
        /*INSERT*/
          $queryinsert = "INSERT INTO clienteorg_respuesta  (idclienteorg , idpregunta, respuesta )  VALUES('".$idcostomer."' , '".$pregunta."' , '".$respuesta."')";
          $resultinsert = $this->db->query($queryinsert);
          return  $resultinsert;

      }


  }





  function getClienteByidUserrepo($idusuario){

      $queryselectrepo ="SELECT * FROM clienteorg WHERE idusuario='".$idusuario."'";
      $result = $this->db->query($queryselectrepo);
     
      return $result ->result_array();

  }



/*Termina modelo */
}



