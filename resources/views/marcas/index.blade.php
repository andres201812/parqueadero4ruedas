@extends('layouts.app')

@section('title','Listado De Marcas')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partial.msg')
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header bg-secondary" style="font-size: 1.75rem;font-weight: 500; line-height: 1.2; margin-bottom: 0.5rem;">
							@yield('title')
								<a href="{{ route('marcas.create') }}" class="btn btn-primary float-right" title="Nuevo"><i class="fas fa-plus nav-icon"></i></a>
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover" style="width:100%">
								<thead>
									<tr>
										<th width="10px">ID</th>
										<th>Marca</th>
										<th width="50px">Acción</th>
									</tr>
								</thead>
								<tbody>
									@foreach($marcas as $marca)
									<tr>
										<td>{{ $marca->id }}</td>
										<td>{{ $marca->nombre }}</td>
										<td>
											<a href="{{ route('marcas.edit',$marca->id) }}" class="btn btn-info btn-sm" title="Editar"><i class="fas fa-pencil-alt"></i></a>
											<form class="d-inline delete-form" action="{{ route('marcas.destroy', $marca) }}"  method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
 </div>
@endsection

@push('scripts')
	<script>
	$('.delete-form').submit(function(e){
		e.preventDefault();
		Swal.fire({
			title: 'Estas seguro?',
			text: "Este registro se eliminara definitivamente",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Aceptar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	</script>
	@if(session('eliminar') == 'ok')
		<script>
			Swal.fire(
				'Eliminado',
				'El registro ha sido eliminado exitosamente',
				'success'
			)
		</script>
	@endif
	<script type="text/javascript">
		$(function () {
			$("#example1").DataTable({
				"responsive": true, 
				"lengthChange": true, 
				"autoWidth": false,
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
				}
			});
		});
	</script>
@endpush