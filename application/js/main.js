$(document).on("ready" , function(){

	now = $(".now").val();
});
function outsystem(){
	urlnext = $(".now").val()+"index.php/sessioncontroller/logout/";		
	redirect(urlnext);	
}
function llenaelementoHTML(idelement , data){

	$(idelement).html(data);
} 
function valorHTML(idelement , data){

	$(idelement).val(data);
} 
function redirect(url){
	window.location.replace(url);
}
function recorrepage(idrecorrer){
	
      $('html,body').animate({
        scrollTop: $(idrecorrer).offset().top
    }, 200);
}


function showhide(elementoenelquepasas, elementodinamico ){

	$( elementoenelquepasas ).mouseover(function() {

			$(elementodinamico).show();
	
	}).mouseout(function() {

		$(elementodinamico).hide();
	});


}


function showonehideone( elementomostrar , elementoocultar  ){
 
	$(elementomostrar).show();
	$(elementoocultar).hide();

}


/*saca el id del elemento */
function getidstringanddinamicelement(completa, elementomostrar , elementoocultar){

	bandera =0; 
	id="";

	for(var x in completa){

			if (bandera>0) {
				id += completa[x];
			}

			if (completa[x] == "_") {
				bandera++;
			}


	}/*Termina el ciclo*/
	
	dinamicinput =  elementomostrar + id;
	dinamicpnombre =  elementoocultar+ id;
	showonehideone( dinamicinput , dinamicpnombre  );
	return id;



}





/*saca el id del elemento */
function getidstringcadena(completa){

	bandera =0; 
	id="";

	for(var x in completa){

			if (bandera>0) {
				id += completa[x];
			}

			if (completa[x] == "_") {
				bandera++;
			}


	}/*Termina el ciclo*/
	
	return id;

}





 function valEmail(valor){
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(valor))    {
        return false;
    }else{
        return true;
    }
}
