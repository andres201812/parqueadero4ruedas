@extends('layouts.app')

@section('title','Crear Vehículo')

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
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-secondary">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{ route('vehiculos.store') }}">
							@csrf
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Tipo Vehículo <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="tipovehiculo_id" id="tipovehiculo">
												<option value>Seleccione Tipo Vehículo</option>
												@foreach($tipovehiculos as $tipovehiculo)
													<option value="{{ $tipovehiculo->id }}">{{ $tipovehiculo->nombre }}</option>
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
													<option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Placa <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="placa" placeholder="Por ejemplo, HXK147" autocomplete="off" value="{{ old('placa') }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Propietario <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="nombre" placeholder="Por ejemplo, CARLOS PUENTES FLOREZ" autocomplete="off" value="{{ old('nombre') }}">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Número Documento <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="numerodocumento" placeholder="Por ejemplo, 1063244556" autocomplete="off" value="{{ old('numerodocumento') }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Dirección</label>
											<input type="text" class="form-control" name="direccion" placeholder="Por ej, CALLE 20 # 20-40 - BARRIO CENTRO" autocomplete="off" value="{{ old('direccion') }}">
										</div>
									</div>
									<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Email</label>
											<input type="email" class="form-control" name="email" placeholder="Por ejemplo, cmpf@gmail.com" autocomplete="off" value="{{ old('email') }}">
										</div>
									</div>
									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Celular</label>
											<input type="tel" class="form-control" name="celular" placeholder="Por ej, 3125693456" pattern="[0-9]{10}" autocomplete="off" value="{{ old('celular') }}">
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

@endpush
