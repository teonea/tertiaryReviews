@extends('app')

@section('content')

<h1>Register another Admin</h1>

<hr />

@if (count($errors) > 0)
	<p class="error b">Whoops! There were some problems with your input.</p>
	@include('errors.list')
@endif

<form role="form" method="POST" action="{{ url('/auth/register') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div>
		<label for="name">Name</label>
		<input type="text" name="name" value="{{ old('name') }}">
	</div>

	<div>
		<label for="email">E-Mail Address</label>
		<input type="email" name="email" value="{{ old('email') }}">
	</div>

	<div>
		<label for="password">Password</label>
		<input type="password" name="password">
	</div>

	<div>
		<label for="password_confirmation">Confirm Password</label>
		<input type="password" name="password_confirmation">
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Register</button>
	</div>

</form>

@endsection
