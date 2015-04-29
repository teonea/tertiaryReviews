@extends('app')

@section('content')

<h1>List a School</h1>
<hr />

@if(Auth::check())
	
	<h2>Insert a school into the database</h2>

	@if (count($errors) > 0)
		<p class="error b">Whoops! The form was not validated, please check your errors.</p>
		@include('errors.list')
	@endif

	{!! Form::open(['action' => 'SchoolsController@store', 'class' => 'wr-form']) !!}
		
	@include('schools.form')

	<div>
		{!! Form::submit('Post School') !!}
	</div>

	{!! Form::close() !!}

@else

	<p>Only admin users are able to list schools. If we are missing a school in our database please let us know {!! link_to('contact', 'here') !!}.</p>	

@endif

@stop