@extends('app')

@section('content')

<h1>Reset Password</h1>

<hr />

@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif


@if (count($errors) > 0)
	<p class="error b">Whoops! There were some problems with your input.</p>
	@include('errors.list')
@endif


<form role="form" method="POST" action="{{ url('/password/email') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div>
		<label for="email">E-Mail Address</label>
		<input type="email" name="email" value="{{ old('email') }}">
	</div>

	<div>
		<button type="submit">Send Password Reset Link</button>
	</div>

</form>


@endsection
