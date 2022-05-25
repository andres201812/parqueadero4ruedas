@extends('layouts.applogin')

@section('title','Login')

@section('content')
	<div class="login-box">
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
			  <img src="{{asset('backend/dist/img/logo_audysoft.png')}}" class="img-circle" alt="">
			</div>
			<div class="card-body">
				<p class="login-box-msg">Iniciar Sesión</p>
				<form method="POST" action="{{ route('login') }}">
				@csrf
					<div class="input-group mb-3">
						<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
									<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required autocomplete="current-password">
						<div class="input-group-append">
							<div class="input-group-text">
									<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<p class="mb-0">
								<a href="{{ route('register') }}" class="text-center">Registro</a>
							</p>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->
@endsection
