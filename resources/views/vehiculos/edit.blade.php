@extends('layouts.app')

@section('title','Editar Vehículo')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-secondary">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{ route('vehiculos.update',$vehiculo) }}">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Propietario <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="propietario_id" id="propietario">
												<option value>Seleccione Propietario</option>
												@foreach($propietarios as $propietario)
													<option {{ $propietario->id == $vehiculo->propietario->id ? 'selected' : '' }} value="{{ $propietario->id }}">{{ $propietario->nombre }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Tipo Vehículo <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="tipovehiculo_id" id="tipovehiculo">
												<option value>Seleccione Tipo Vehículo</option>
												@foreach($tipovehiculos as $tipovehiculo)
													<option {{ $tipovehiculo->id == $vehiculo->tipovehiculo->id ? 'selected' : '' }} value="{{ $tipovehiculo->id }}">{{ $tipovehiculo->nombre }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Marca <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="marca_id" id="marca">
												<option value>Seleccione Marca</option>
												@foreach($marcas as $marca)
													<option {{ $marca->id == $vehiculo->marca->id ? 'selected' : '' }} value="{{ $marca->id }}">{{ $marca->nombre }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Placa <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="placa" placeholder="Por ejemplo, HXK147" autocomplete="off" value="{{ $vehiculo->placa }}">
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('vehiculos.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@push('scripts')

<script type="text/javascript">
	$("#tipovehiculo").select2({
		allowClear: true
	});
</script>

<script type="text/javascript">
	$("#marca").select2({
		allowClear: true
	});
</script>

<script type="text/javascript">
	$("#propietario").select2({
		allowClear: true
	});
</script>

@endpush