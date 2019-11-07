<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
        <a href="{{url('/')}}" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
        </a>
        </div>
        <div class="top-nav s-12 l-10">
        
        <ul class="right chevron">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/article')}}">Article</a></li>
            <li><a href="{{url('/buku')}}">Books</a></li>
            <li><a href="{{url('/profile')}}">Profile</a></li>
            <li><a href="{{url('/gallery')}}">Gallery</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>

       @if (Sentinel::check())
   
    <li><a href="{{route('logout')}}">Logout</a></li>
    <li><a>Welcome {!! Sentinel::getUser()->email!!}</a></li>
@else
<li><a href="{{route('signup')}}">Signup</a></li>
<li><a href="{{route('login')}}">login</a></li>
@endif
        </ul>
        </div>
    </nav>
</header>