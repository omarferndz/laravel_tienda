@guest
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
			<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
                            	document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
		</ul>
	</li>
@endguest