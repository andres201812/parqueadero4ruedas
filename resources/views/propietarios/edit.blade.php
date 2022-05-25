@extends('layouts.app')

@section('title','Editar Propietario')

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
						<form method="POST" action="{{ route('propietarios.update',$propietario) }}">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="nombre" placeholder="Por ejemplo, CARLOS PUENTES FLOREZ" autocomplete="off" value="{{ $propietario->nombre }}">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Número Documento <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="numerodocumento" placeholder="Por ejemplo, 1063244556" autocomplete="off" value="{{ $propietario->numerodocumento }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Dirección</label>
											<input type="text" class="form-control" name="direccion" placeholder="Por ej, CALLE 20 # 20-40 - BARRIO CENTRO" autocomplete="off" value="{{ $propietario->direccion }}">
										</div>
									</div>
									<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Email</label>
											<input type="email" class="form-control" name="email" placeholder="Por ejemplo, cmpf@gmail.com" autocomplete="off" value="{{ $propietario->email }}">
										</div>
									</div>
									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group label-floating"> 
											<label class="control-label">Celular</label>
											<input type="tel" class="form-control" name="celular" placeholder="Por ej, 3125693456" pattern="[0-9]{10}" autocomplete="off" value="{{ $propietario->celular }}">
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
										<a href="{{ route('propietarios.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
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

@endpush