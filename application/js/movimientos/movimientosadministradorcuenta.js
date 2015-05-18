$(document).on("ready", function(){

	$("footer").ready(listmovimientosusuarios);
});


function listmovimientosusuarios(){

	url =now + "index.php/api/movimientosrest/administradorconusers/format/json/";

	$.get(url).done(function(data){


		lista ="<article class='timeline-item alt'><div class='text-right'><div class='time-show first'><a href='#' class='btn btn-primary'>Clientes registrados</a></div></div></article>";
		b=0;
		for(var x in data){
			
			fecha_registro = data[x].fecha_registro;
			nombrecompleto = data[x].nombrecompleto;
			if (b == 0 ) {

				  	lista+="<article class='timeline-item alt'>";
                            	lista+="<div class='timeline-desk'>";
                                	lista+="<div class='panel'>";
                                    	lista+="<div class='panel-body'>";
	                                    	lista+="<span class='arrow-alt'></span>";
	                                        lista+="<span class='timeline-icon'></span>";
	                                        lista+="<span class='timeline-date'>08:25 am</span>";
                                        	lista+="<h1 class='red'>"+fecha_registro +"</h1>";
                                        	lista+="<p>"+nombrecompleto+" </p>";
                                    	lista+="</div>";
                                	lista+="</div>";
                            	lista+="</div>";
                        	lista+="</article>";
                        	b=1;
                }else{

                	 	
                	 	  lista+="<article class='timeline-item '>";
                            lista+="<div class='timeline-desk'>";
                                lista+="<div class='panel'>";
                                    lista+="<div class='panel-body'>";
                                        lista+="<span class='arrow'></span>";
                                        lista+="<span class='timeline-icon'></span>";
                                        lista+="<span class='timeline-date'>10:00 am</span>";
                                        lista+="<h1 class='green'>"+fecha_registro +"</h1>";
                                        lista+="<p>"+nombrecompleto+"</p>";
                                    lista+="</div>";
                                lista+="</div>";
                            lista+="</div>";
                        lista+="</article>";
                        	b=0;
                                        
                }        	


		}




		
                        
                       

		llenaelementoHTML("#clientesregistrados" , lista);
	
						



		

	}).fail(function(){
		alert("Algo susedió");
	});
}