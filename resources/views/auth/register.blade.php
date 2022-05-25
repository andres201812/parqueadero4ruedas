@extends('layouts.applogin')

@section('title','Registro')

@section('content')
	<div class="register-box">
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<img src="{{asset('backend/dist/img/logo_audysoft.png')}}" class="img-circle" alt="">
			</div>
			<div class="card-body">
				<p class="login-box-msg">Registro De Usuarios</p>
				<form method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="input-group mb-3">
						<input id="name" type="text" placeholder="Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="password-confirm" type="password" placeholder="Confirme Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Registrar</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
	<!-- /.register-box -->
@endsection

