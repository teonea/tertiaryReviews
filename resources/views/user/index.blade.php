@extends('app')

@section('content')

<h1>Admin</h1>

<hr />

<h2>Welcome {{ Auth::user()->name }}</h2>


<p>{{ Auth::user()->name }}<br />{{ Auth::user()->email }}<br />Member Since: {{ Auth::user()->created_at->format('d/m/Y') }}</p>

<h4>You are able to edit and/or delete {!! link_to('schools', 'schools') !!}, {!! link_to('courses', 'courses') !!} and {!! link_to('reviews', 'reviews') !!}.</h4>

<h4>{!! link_to_action('UserController@edit', 'Edit your own details', Auth::user()->id) !!}</h4>

<h4>{!! link_to('auth/register', 'Register another Admin') !!}</h4>

<p>{!! link_to('auth/logout', 'Logout') !!}</p>

@endsection