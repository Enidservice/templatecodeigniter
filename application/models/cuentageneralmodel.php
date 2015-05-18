<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class cuentageneralmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */



function getintegrantesbyidusuario($iduser){

    $idempresa =  $this->getidempresabyidusuario($iduser);

    $queryuserbycuenta ="SELECT count(*) AS usuariosregistrados  FROM usuario WHERE  idempresa = $idempresa "; 
    $result = $this->db->query( $queryuserbycuenta);

    $registrados = 1; 

    /*Inicia el ciclo para ver el numero de usuarios registrados*/
     foreach ($result ->result_array() as $row) {
   
          $registrados  =  $row["usuariosregistrados"];
    }/*Termina el ciclo*/

    return $registrados;
}/*Termina la función */





/**/

function getintegrantesinforme($iduser){

    $idempresa =  $this->getidempresabyidusuario($iduser);



    $querygetinfointegrantes ="SELECT u.idusuario , u.nombre , u.email ,u.fecha_registro , p.nombreperfil 
    FROM usuario as u , perfil as p , usuario_perfil as up WHERE  u.idusuario = up.idusuario AND
       p.idperfil = up.idperfil AND u.idempresa = $idempresa ";

    $resultquery = $this->db->query($querygetinfointegrantes);
    return  $resultquery->result_array();
}



/*regresa el id de la empresa a la cual pertenece un usuario */
function getidempresabyidusuario($iduser){


  $querygetidempresa   ="SELECT idempresa FROM usuario WHERE idusuario = $iduser "; 
  $result = $this->db->query($querygetidempresa); 

  $idempresa = 0;

  foreach ($result ->result_array() as $row) {
   
     $idempresa =  $row["idempresa"];
  }

  return $idempresa;
}
/*Termina la función*/



function getperfilesdelacuenta($idempresa){
    

  
  $idplan = $this->getidplanbyidempresa($idempresa);
  $querygetplanperfiles = "SELECT perfil.nombreperfil , perfil.idperfil  FROM  perfil, plan_perfil  WHERE 
  plan_perfil.idperfil =perfil.idperfil AND plan_perfil.idplan = '".  $idplan."' ";  

  $result = $this->db->query($querygetplanperfiles);  
  return $result ->result_array();
}


function getidplanbyidempresa($idempresa){


  $querygetplan = "SELECT idplan FROM empresa WHERE  idempresa ='". $idempresa . "' ";
  $result = $this->db->query($querygetplan);   
  $idplan = 0; 
   foreach ($result ->result_array() as $row) {
   
     $idplan =  $row["idplan"];
  }
  return $idplan;
}



/************************************************************************************/
function getnumeroclientesnotrepeat($idempresa) {

  $countquery =  "select * from clienteorg where idempresa='".$idempresa."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();

}


function getnumeroclientesenvalidacion($idempresa){


  $countquery =  "select * from historial_crediticio where status='En validación' and idempresa='".$idempresa."'";
  $result = $this->db->query($countquery);   
  return   $result->num_rows();

}


function getnumeroclientesquehesolicitado($idempresa, $iduser){

  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='En validación' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";

  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}




function getnumeroclientesquemeanaprobado($idempresa, $iduser){

  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='aprobado' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";

  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}







function getnumeroclientesrechazados($idempresa, $iduser){

  $countquery =  " select * from historial_crediticio as hc , clienteorg as c  where
   hc.status='rechazados' and hc.idempresa='".$idempresa."'  and c.idclienteorg = hc.idclienteorg 
   and c.idusuario='".$iduser."'";

  $result = $this->db->query($countquery);   
  return   $result->num_rows();
}
/*Termina modelo */
}



