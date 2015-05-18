<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reportecontrolador extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model("model_pdf" , "pdf");
        $this->load->library('sessionclass');  
        
        
    }

    function index()
    {
        $data['titulo']='Informe de error';

    	$this->load->view('Template/header', $data);
        $this->load->view('reporte/reportes');
        $this->load->view('Template/footer', $data);
    	
    }

     function listarReportes()
    {
        $data['titulo']='Reportes del Sistema';

        $this->load->view('Template/header', $data);
        $this->load->view('reporte/listarReportes/listado');
        $this->load->view('Template/footer', $data);
    }
    

     function exportaPDF(){
        $data['titulo']='PDF de Reportes';

        $data["reportesystema"] = $this->pdf->getReportes();

        $this->load->view('Template/header', $data);
        $this->load->view('reporte/exportaPDF/documento');
        $this->load->view('Template/footer', $data);
    }


}
