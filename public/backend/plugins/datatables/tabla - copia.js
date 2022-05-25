$(function () {
			$("#example1").DataTable({
				"responsive": true, 
				"lengthChange": true, 
				"autoWidth": false,
				"dom": 'lfrtip',
				"sPaginationType": "full_numbers",
				//"aLengthMenu": ['10', '25', '50', '100'],
				"language": {
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
				/*"dom": 'Bfrtip',
				"buttons": [
					{
						extend: 'pdfHtml5',
						text: '<i class="fas fa-file-pdf"></i>',
						titleAttr: 'Exportar a PDF',
						className: 'btn btn-danger',
						footer: true
						//orientation: 'landscape'
						//pageSize: 'LEGAL'
					},
					
					{
						extend: 'excelHtml5',
						text: '<i class="fas fa-file-excel"></i>',
						titleAttr: 'Exportar a EXCEL',
						className: 'btn btn-success'
					},
					{
						extend: 'print',
						text: '<i class="fas fa-print"></i>',
						titleAttr: 'Imprimir',
						className: 'btn btn-info'
					}
				],*/
				//"buttons": ["excel", "pdf", "print", "colvis"],
				
			});
		});