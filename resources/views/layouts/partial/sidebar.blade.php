<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
		<img src="{{('backend/dist/img/logo_audysoft.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AUDYSOFTW</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ url('/home') }}" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Panel De Control
						</p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-car"></i>
						<p>Vehículos<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('tipovehiculos.index') }}" class="nav-link">
								<i class="nav-icon fas fa-bus"></i>
								<p>Tipo Vehículo</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('marcas.index') }}" class="nav-link">
								<i class="nav-icon fas fa-registered"></i>
								<p>Marca</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('propietarios.index') }}" class="nav-link">
								<i class="nav-icon fas fa-restroom"></i>
								<p>Propietario</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('vehiculos.index') }}" class="nav-link">
								<i class="nav-icon fas fa-car-alt"></i>
								<p>Vehículo</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('vehiculos.count') }}" class="nav-link">
								<i class="nav-icon fas fa-car-alt"></i>
								<p>Cantidad Vehículos</p>
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>