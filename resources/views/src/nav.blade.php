<nav class="navbar navbar-inverse">
	<!-- navigation menu goes in here -->
	<div class="container-fluid">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>



			<a class="navbar-brand" href="#">SmartReady</a>


		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="icon-link">
					<a href="{{url('/')}}"><i class="fa fa-home"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quienes somos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('/') }}">Acerca de</a></li>
							@guest
								<li role="separator" class="divider"></li>
								<li><a href="{{url('/login')}}">Ingreso</a></li>
								<li><a href="{{url('/regiser')}}">Registracion</a></li>
							@else
								<li><a href="user.php">Usuario</a></li>
								<li><a href="updatepassword.php">Cambio de clave</a></li>
							@endguest
					</ul>
				</li>
				<li>
					<a href="{{ url('/service') }}">Servicios</a>
				</li>
				<li>
						<a href="{{ url('/plans') }}">Planes</a>
				</li>
					@guest

					@else
						<li>
							<a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();>">Salir</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
						</li>
					@endguest
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@guest

				@else
				<li>
					<a href="{{url('/user')}}"><i class="fa fa-user"></i>  {{ Auth::user()->name }} - {{ Auth::user()->last_name }}

					</a>
				</li>
				@endguest
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

			</ul>
		</ul>
		<!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
