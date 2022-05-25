$(function () {
    $("#example1").DataTable({
		"responsive": true, 
		"lengthChange": true, 
		"autoWidth": false,
		//"buttons": ["excel", "pdf", "print", "colvis"],
		"language": 
				{
					"sLengthMenu": "Mostrar _MENU_ entradas",
					"sEmptyTable": "No hay datos disponibles en la tabla",
					"sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
					"sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
					"sSearch": "Buscar:",
					"sZeroRecords": "No se encontraron registros coincidentes en la tabla",
					"sInfoFiltered": "(Filtrado de _MAX_ entradas totales)",
					"oPaginate": {
						"sFirst": "Primero",
						"sPrevious": "Anterior",
						"sNext": "Siguiente",
						"sLast": "Ultimo"
					},
					/*"buttons": {
						"print": "Imprimir",
						"colvis": "Visibilidad Columnas"
						/*"create": "Nuevo",
						"edit": "Cambiar",
						"remove": "Borrar",
						"copy": "Copiar",
						"csv": "fichero CSV",
						"excel": "tabla Excel",
						"pdf": "documento PDF",
						"collection": "Colección",
						"upload": "Seleccione fichero...."
					}*/
				}
    });//.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});