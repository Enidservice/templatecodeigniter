/*Listar las personas que ya tiene algín crédito*/
function listarpersonasconcreditosasigados(){

	url = now + "index.php/api/creditorest/listarpersonasconcreditoempresa/format/json/";

	$.get(url ).done(function (data){

		
			b  = 1;
			
			listacompleta ="<table style='background:#D1FFCE' class='display table table-bordered dataTable' id='hidden-table-info'><thead >";
			listacompleta +="<tr role='row'><th>#</th>";
			listacompleta +="<th>Calificación crediticia</th><th>Cliente</th><th>Ejecutivo que registró</th><th>Datos capturados</th><th>Créditos</th></tr></thead>";
			
			flag = 0;

			for(var x in data){

				
				idclienteorg = data[x].idclienteorg;    
				nombrecompleto = data[x].nombrecompleto;
				quienregistro = data[x].quienregistro;
				fecha_registro = data[x].fecha_registro;  
				urlimg =now + "application/img/general/credit31.png";
				urlnextmetricas = now + "index.php/expedientes/metricas?oxjexyet="+ idclienteorg+"&format=json";
	            estadoactual = data[x].status;			
	            estadocliente ="";
	            	if (flag == 1) {

	            		listacompleta +="<tr class='' style='background: #D1FFCE;'>";
	            		flag =0;
	            	}else{

	            		listacompleta +="<tr style='background: white;'>";
						flag =1;
	            	}	
	            	estadocliente = "<div class='progress-bar progress-bar-info'  role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 70%'></div>";

	            	/*
	            	if (  estadoactual == 1 ) {

	            		estadocliente = "<div class='progress-bar progress-bar-info'  role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 70%'></div>";
	            	}else{	
	            		estadocliente = "<div class='progress-bar progress-bar-info'  role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 70%'></div>";
	            	}
	            	*/
	                listacompleta +="<td class='sorting_1'>"+idclienteorg+"</td>";
	                listacompleta +="<td>"+estadocliente+"</td>";
	                listacompleta +="<td class=' '>"+nombrecompleto+"</td>";
	                listacompleta +="<td class='hidden-phone '>"+quienregistro+"</td>";
	                listacompleta +="<td class='center hidden-phone '>"+fecha_registro+"</td>";
	               	listacompleta +="<td><a href='"+urlnextmetricas +"'><img class='metricas_user' src='"+urlimg+"'></a></td>";
	                listacompleta +="</tr>";


	            
               	 b++;
			
			}              
			
			llenaelementoHTML("#list_person" , listacompleta);

	}).fail(function(){

		alert("");
	});



}