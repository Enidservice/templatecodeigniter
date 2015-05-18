$(document).on("ready", function(){

    listarReporte();

});

 function listarReporte()
{
    url = now + "index.php/api/listarreportesrest/listarReportes/format/json";

    $.get( url )
        .done(function( data ) {
            listar = "<thead><tr><th>#</th><th>Reporte</th><th>Descripcion</th><th >Fecha de Registro</th><th>Tipo</th></tr></thead><tbody>";

                            
        for(var i in data){

            
            idreporte = data[i].idreportesystema;
            nombre = data[i].reporte;
            descripcion = data[i].descripcionreporte;
            fecha = data[i].fecha_registro;
            tipo = data[i].tiporeporte;

            listar += "<tr><td>"+idreporte+"</td>";
            listar += "<td>"+nombre+"</td>";
            listar += "<td>"+descripcion+"</td>";
            listar += "<td>"+fecha+"</td>";
            listar += "<td>"+tipo+"</td></tr>";

        };
        listar+="</tbody>";
        llenaelementoHTML("#tabla" , listar);
        //alert(listar);

    })
    .fail(function() {
        alert( "error" );
    });
 }
