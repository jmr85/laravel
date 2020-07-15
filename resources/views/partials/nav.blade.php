<nav class="navbar bg-white shadow-sm">
		<a class="navbar-brand" href="{{ route('home') }}">
				{{ config('app.name') }} {{-- lo obtiene del archivo .env --}}
		</a>
		<ul class="nav nav-pills"> {{-- ubica horizontalmente los liks, nav-pills es el relleno simlar a un boton --}}
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
				<li class="nav-item"> 
					<a class="nav-link {{ setActive('logout-form') }}" href="#" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
				</li>			
			@endguest
		</ul>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
</nav>