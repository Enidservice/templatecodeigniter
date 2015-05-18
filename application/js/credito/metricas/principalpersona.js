$(document).on("ready", function(){

	$("footer").ready(loadcreditosinfosuser);
	$("footer").ready(listarelnumerodecreditosdelapersona);
	$("footer").ready(displayinfocliente);
});



/*Cargar los creditos del usuario*/	
function loadcreditosinfosuser(){

	url  = now + "index.php/api/creditorest/listarinformacioncreditobyuser/format/json/";
	clienteorg  = $("#clienteorg").val();
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		urldocumentos  = now + "application/img/general/clipboard44.png";
		l="";
		for(var x in data){

			historial = data[x].idhistorial;
			l +="";
			l +="<div class='media-body'>";
			l +="<h4 class=''>"+data[x].nombre+"</h4>";
			l +="<p class='texto_description_credito'>"+ data[x].descripcion+ "</p>";
			l +="<table><tr><td><a href='"+ now+"index.php/files/info"+"?clienteorg="+clienteorg+"&historial="+historial+  "'> <img class='documentoscredito' src='"+urldocumentos+"'></td> <td><label>Monto : $ </label></td><td><label id=''>"+ data[x].monto+ "</label> </td> <td></td><td><label>Folio del crédito : </td><td><label id=''>"+ data[x].idhistorial+ "</label> </td></tr>";
			
			l +="</table>";
			l +="</div>";
		}
		llenaelementoHTML("#infocredito" , l);

	}).fail(function(){
		alert("algo malo susedió");

	});

}	





function listarelnumerodecreditosdelapersona(){


	url  = now + "index.php/api/creditorest/listarelnumerodecreditosdelapersona/format/json/";
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		llenaelementoHTML("#numerocreditos" , data);
	}).fail(function(){
		alert("algo malo susedió");

	});


}



function displayinfocliente(){
	

	url  = now + "index.php/api/clienteorgrest/displayinfoclientebyid/format/json/";
	$.get(url, $("#user_form_general").serialize() ).done(function(data){

		
		l="<div id=''>";
		for(var x in data){


			idclienteorg  =  data[x].idclienteorg;
			primernombre =  data[x].primernombre;
			segundonombre = data[x].segundonombre;
			primerapellido =  data[x].primerapellido;
			segundoapellido =  data[x].segundoapellido;
			idusuario = data[x].idusuario;
			fecha_registro =  data[x].fecha_registro;
			
			nombrecompleto = data[x].nombrecompleto;
			personaqueregistropemera = data[x].personaqueregistropemera;
			idusuario  =  data[x].idusuario;
			estadocliente =  data[x].status;
			good="";

			if (estadocliente  ==  1) {
				  good="<td class='text_whithe'><img style='width:70%;' src='"+now + "application/img/general/ok2.png"+"'></td></tr>";


			}else{
				  good="<td class='text_whithe'><img style='width:70%;' src='"+now + "application/img/general/teacher34.png"+"'></td></tr>";


			}	
                              
			l+="<tr class='trclass'><td class='text_whithe'>"+ idclienteorg +"</td>";
            l+="<td class='text_whithe'>"+ primerapellido +"</td>";
            l+="<td class='text_whithe'>"+ segundoapellido+"</td>";
            l+="<td class='text_whithe'>"+ primernombre +"</td>";
            l+="<td class='text_whithe'>"+ segundonombre +"</td>";
            l+="<td class='text_whithe'>"+ nombrecompleto +"</td>";
            l+="<td class='text_whithe'>"+ fecha_registro +"</td>";
            l+="<td class='text_whithe'>"+ personaqueregistropemera +"</td>";
            l+="<td class='text_whithe'>"+ estadocliente+"</td>";
           
            l+= good;
		}
		l+="</div>";
		llenaelementoHTML("#infoclientemoved", l);
        
	}).fail(function(){
		alert("algo falló");

	});



}