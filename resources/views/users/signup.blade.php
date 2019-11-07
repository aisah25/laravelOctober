@extends('../layouts.master') 
@section('content')
  <main role="main">
    <!-- Content -->
    <article>

      <header class="section background-dark">
        <div class="line">        
          <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">SignUp</h1>

<form method="post" action="{{ route('signup.store')}}">
	{{ csrf_field() }}
	<label for="frist"> First Name</label><br>
		<input type="text" name="first_name" id="frist" placeholder="First Name.." class="form control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" />
		<div class="invalid-feedback">{!! $errors->first('first_name') !!}
		</div>
	
	<label for="last"> Last Name</label><br>
		<input type="text" name="last_name" id="last" placeholder="Last Name.." class="form control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"/>
		<div class="invalid-feedback">{!! $errors->first('last_name') !!}
		</div>

	<label for="email"> Email</label><br>
		<input type="text" name="email" id="email" placeholder="Email@gmail.com" class="form control {{ $errors->has('email') ? ' is-invalid' : '' }}"/>
		<div class="invalid-feedback">{!! $errors->first('email') !!}
		</div>
	
	<label for="password"> Password</label><br>
		<input type="password" name="password" id="password" placeholder="Password" class="form control {{ $errors->has('password') ? ' is-invalid' : '' }}"/>
		<div class="invalid-feedback">{!! $errors->first('password') !!}
		</div>

	<label for="confir"> Password Confirmation</label><br>
		<input type="password" name="password_confirmation" id="password" placeholder="Password Confirmation" class="form control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"/><br><br>
		<div class="invalid-feedback">{!! $errors->first('password_confirmation') !!}
		</div>

	<input type="submit" value="Submit"></div>
</form>

@endsection