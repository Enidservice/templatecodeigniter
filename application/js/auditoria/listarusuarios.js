$(document).on("ready" , function(){

	$("#listausuariosempresa").ready(loaduserscuenta);
});


/*Cargamos info de las personas que se encuentra en la cuenta */
function loaduserscuenta(){

	url = now + "index.php/api/cuentageneralrest/getintegrantesinfocuenta/format/json";

	var clientresponse = ["Error al cargar los colaboradores, reporte al administrador"]

	$.get(url ).done(function( data ){

		list="";

		for(var x in data){

			id = data[x].idusuario;
			nombre = data[x].nombre;
			email = data[x].email;
			fecha_registro  = data[x].fecha_registro;
			nombreperfil = data[x].nombreperfil;

			list +="<tr>";
			list+="<td>"+id+"</td>";
			list+="<td>"+nombre+"</td>";	
			list+="<td>"+email+"</td>";
			list+="<td>"+fecha_registro+"</td>";
			list+="<td>"+nombreperfil+"</td>";
			list+="<td><a href='"+now+"index.php/auditoriacontrolador/porUsuario?miembro="+id+"&campo="+nombre+"&correo="+email+"&fecha="+fecha_registro+"&perfil="+nombreperfil+"'><img style='width: 30%;' class='nextAuditor' id='"+id+"' src='"+now+"application/img/general/business56.png"+" ' ></a></td>";
			list+="</tr>";

		}

		llenaelementoHTML( "#listausuariosempresa", list );
	}).fail(function(){

		llenaelementoHTML( "#listausuariosempresa", clientresponse[0]);
	});




}/*Termina la funcion */