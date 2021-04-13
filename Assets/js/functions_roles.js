var tableRoles;

document.addEventListener('DOMContentLoaded', function(){

	tableRoles = $('#tableRoles').dataTable({
		"aProcessing":true,
		"aServerSide":true,
		"language": { "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json" },
		/* "language": {
            "decimal": "",
            "emptyTable": "No hay registros",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(Filtrado de _MAX_ total registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }, */
		"ajax":{
			"url": " "+base_url+"/Roles/getRoles",
			"dataSrc":""
		},
		"columns":[
			{"data":"idrol","width":"1%"},
			{"data":"nombrerol","width":"3%"},
			{"data":"descripcion","width":"6%"},
			{"data":"status","width":"1%"},
			/* {"data":"options","width":"1%"} */
		],
		"responsive":"true",
		"bDestroy":true,
		"iDisplayLength": 10,
		"order":[[0,"asc"]]

	});
});

$('#tableRoles').DataTable();

function openModal(){
    $('#modalFormRol').modal('show');
}