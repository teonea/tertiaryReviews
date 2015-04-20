@extends('app')

@section('content')
<h1>Login</h1>

<hr />

@if (count($errors) > 0)
	<p class="error b">Whoops! There were some problems with your input.</p>
	@include('errors.list')
@endif

<form role="form" method="POST" action="{{ url('/auth/login') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div>
		<label for="email">E-Mail Address</label>
		<input type="email" name="email" value="{{ old('email') }}">
	</div>

	<div>
		<label for="password">Password</label>
		<input type="password" name="password">
	</div>

	<div>
		<label for="remember">
			<input type="checkbox" name="remember"> Remember Me
		</label>
	</div>


	<div>
		<button type="submit">Login</button>
		<p><a href="{{ url('/password/email') }}">Forgot Your Password?</a></p>
	</div>

</form>

@endsection
