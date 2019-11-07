@if (Sentinel::check())
	<li><a href="{{route('logout')}}">Logout</a></li>
	<li><a>Welcome {!! Sentinel::getUser()->email!!}</a></li>
@else
	<li><a href="{{route('signup')}}">Signup</a></li>
	<li><a href="{{route(('login')}}">Login</a></li>
@endif