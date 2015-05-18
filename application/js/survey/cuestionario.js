$(document).on("ready", function(){

	$("footer").ready(loadsurvey);
	$("footer").ready(loadinfodocumentosolicitado);
});


function loadsurvey(){

	url  = now + "index.php/api/creditorest/surveydocumentclient/format/json/";
	$.get(url, $("#generic_form").serialize()).done(function(data){

		l ="<ul class='to-do-list ui-sortable' id='sortable-todo'><table class='table'>";
		l+="<thead><tr><th>#</th><th>cuestionario</th> <th>SI</th> <th>NO</th></tr></thead><tbody>";
		b=1;
		idpregunta = 0;
		pregunta ="";
		flaresponde = 0;
			for(var x in data.preguntas ){
				idpregunta= data.preguntas[x].idpregunta;
				pregunta= data.preguntas[x].pregunta;
				flaresponde = 0;
					for (var z in data.respuestas){
								
							idpreguntacliente =  data.respuestas[z].idpregunta;
							respuestacliente  =  data.respuestas[z].respuesta;
							e = 0;
								if(idpregunta == idpreguntacliente ){
										
										if (respuestacliente  == "yes") {

											l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            				l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' checked></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
										}else{
											l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
				            				l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"' ></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' checked> </td></tr>";
										}
											
									
									flaresponde = 1;			
								}
							
					}
					/**/
						if (flaresponde == 0 ){		
								l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
		            			l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"'></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
						}
				b++;
			}

		l+="</tbody></table></ul>";
		llenaelementoHTML("#cuestionario" , l);



		$(".trueresponse").click(trueresponseaction);
		$(".falseresponse").click(falseresponseaction);

	}).fail(function(){
		alert("Falló algo reportar ");

	});

}


/********************************************************************************************/
function trueresponseaction(e){

	pregunta = e.target.id;
	idcostomer  =  $("#idcostomer").val();

	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , {"pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "yes"})
	.done(function(data){

				
	}).fail(function(){
		alert("Fallo actualización");
	});
	loadsurvey();
}


/********************************************************************************************/
function falseresponseaction(e){

	pregunta = e.target.id;
	idcostomer  =  $("#idcostomer").val();


	url = now + "index.php/api/creditorest/updaterespuestacliente/format/json";
	$.post(url , {"pregunta" : pregunta , "idcostomer" : idcostomer  , "respuesta" : "not"})
	.done(function(data){

		
	}).fail(function(){
		alert("Fallo actualización");
	});
	loadsurvey();

}


/********************************************************************************************/


function loadinfodocumentosolicitado(){

	documento = $("#documento").val();	
	nombredocumento ="";
	notadocumento =  ""; 
	url = now + "index.php/api/creditorest/getinfodocument/format/json";
	$.get(url , {"documento" : documento})
	.done(function(data){

			
			for (var x in data) {
				
				nombredocumento   = data[x].nombredocumento;
				notadocumento =  	data[x].notadocumento;
			}
			llenaelementoHTML("#documentosolicitado" , nombredocumento);
			llenaelementoHTML("#especificaciones" , notadocumento);
		
	}).fail(function(){
		alert("Fallo actualización");
	});		
}


