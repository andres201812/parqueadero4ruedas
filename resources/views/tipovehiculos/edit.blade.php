@extends('layouts.app')

@section('title','Editar Tipo Vehículo')

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
						<form method="POST" action="{{ route('tipovehiculos.update',$tipovehiculo) }}">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
									<div class="form-group label-floating">
										<label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
										<input type="text" class="form-control" name="nombre" placeholder="Por ejemplo, AUTOMOVIL" autocomplete="off" value="{{ $tipovehiculo->nombre }}">
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('tipovehiculos.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
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