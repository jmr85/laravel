<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
				{{ config('app.name') }} {{-- lo obtiene del archivo .env --}}
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			{{-- boton para expandir o colapsar el nav cuando estamos en un movil --}}
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills ml-auto"> {{-- ubica horizontalmente los liks, nav-pills es el relleno simlar a un boton --}}
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}"  href="{{route('home')}}">
						{{-- nav-link y {{setActive('home')}} es lo mismo que nav-link y active  --}}
						@lang('Home')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">
						@lang('About')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href="{{route('projects.index')}}">
						@lang('Projects')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href="{{route('contact')}}">
						@lang('Contact')
					</a>
				</li>

				@guest
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}"  href="{{route('login')}}">
							@lang('Login')
						</a>
					</li>
				@else		
					{{-- <li class="nav-item"> 
						<a class="nav-link {{ setActive('logout-form') }}" href="#" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
					</li> --}}
					@if ( auth()->user()->hasRoles(['admin']) )
						<li class="nav-item" >
							<a class="nav-link {{ setActive('user.*') }}" href="{{ route('user.index') }}">Usuarios</a>
						</li>
					@endif
					
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ auth()->user()->name }} <span class="caret"></span>{{--caret es la flecha hacia abajo que indica que es dropdown--}}
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>		
				@endguest
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>
