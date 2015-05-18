$(document).on("ready", function(){

	$("footer").ready(cargartabladocumentos);
	$("#evaluaruser").click(cargartabladocumentos);
});


function cargartabladocumentos(){
	

	url  = now + "index.php/api/evaluacionrest/evaluaruserclientdocument/format/json/";
	

	$.get(url, $("#user_form_general").serialize() ).done(function(data){

	l ="";

		for(var x in data){

				iddocumentosolicitado  = data[x].iddocumentosolicitado;
				nombredocumento = data[x].nombredocumento;
				notadocumento  =  data[x].notadocumento;  
				nextlocation = now + "index.php/expedientes/surveyanddocument?template=newsorvey&documentacion=" + iddocumentosolicitado+"&org="+data.clienteorg;


				l += "<a href='"+nextlocation+"'> <ul class='goal-progress'><li> ";
				l +="<div class='details'> <div class='title_documentacion'>" + nombredocumento + "</div>";
            	l += "<div class='col-sm-3 col-xs-3'> </div> <div class='progress progress-xs col-sm-9 col-xs-9'><div class='progress-bar progress-bar-info' role=progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>"
            	l += "<span class=''>100%</span> </div></div>  </div></li></ul></a>";
                
               
		} 

		

			llenaelementoHTML("#listadocumentook", l);	



	}).fail(function(){
		alert("algo malo susedió");

	});


}

