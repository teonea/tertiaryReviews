@extends('app')

@section('content')

<h1>Admin</h1>

<hr />

<h2>Welcome {{ Auth::user()->name }}</h2>


	<p>{{ Auth::user()->name }}<br />{{ Auth::user()->email }}<br />Member Since: {{ Auth::user()->created_at->format('d/m/Y') }}</p>
	



<h4>You are able to edit and/or delete {!! link_to('schools', 'schools') !!}, {!! link_to('courses', 'courses') !!} and {!! link_to('reviews', 'reviews') !!}.</h4>

<h4>{!! link_to('user/edit', 'Edit your own details') !!}</h4>

<h4>{!! link_to('auth/register', 'Register another Admin') !!}</h4>



@endsection