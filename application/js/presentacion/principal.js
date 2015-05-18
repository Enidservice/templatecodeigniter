$(document).on("ready", function(){
	

	$("#numerointegrantes").ready(loadnumintegrantes);
	$("footer").ready(getnumeroclientes);
	$("footer").ready(getsolicitudescuentaenvalidacion);
	$("footer").ready(getsolicitudesqueeenviado);
	$("footer").ready(getnumeroclientesquemeanaprobado);
	$("footer").ready( getnumeroclientesrechazados);
});


/*Cargamos los integrantes regostrados en la cuenta */


function loadnumintegrantes(){


		var clienteresponse = ["Falla al cargar el número de integrantes"];

		URL = now + "index.php/api/cuentageneralrest/getnumintegrantescuenta/format/json/"; 


		$.get(URL).done(function(data){
			
			llenaelementoHTML("#numerointegrantes" ,  data);
		}).fail(function(){

			llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}
/*Termina la función */


/**********************************************************************************************/
function getnumeroclientes(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientes/format/json/"; 


		$.get(URL).done(function(data){
				
				llenaelementoHTML( "#numeroclientes", data );
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}



function getsolicitudescuentaenvalidacion(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesenvalidacion/format/json/"; 


		$.get(URL).done(function(data){
				
				llenaelementoHTML( "#numeroclientessolicitantes", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}




function getsolicitudesqueeenviado(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesquehesolicitado/format/json/"; 


		$.get(URL).done(function(data){
				
				
				llenaelementoHTML( "#numeroclientessolicitantesquehesolicitado", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}



function getnumeroclientesquemeanaprobado(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesquemeanaprobado/format/json/"; 


		$.get(URL).done(function(data){
				
				
				llenaelementoHTML( "#numeroclientequemeaprobaron", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}






function getnumeroclientesrechazados(){
	
	var clienteresponse = ["Falla al cargar el número de expedientes"];

		URL = now + "index.php/api/cuentageneralrest/getnumeroclientesrechazados/format/json/"; 


		$.get(URL).done(function(data){
				
				
				llenaelementoHTML( "#getnumeroclientesrechazados", data );
				
		}).fail(function(){

			alert("error al cargar clientes");
			//llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}

/**********************************************************************************************/
