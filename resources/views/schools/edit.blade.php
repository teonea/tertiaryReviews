@extends('app')

@section('content')

<h1>Edit Schools / {{ $school->schoolName }} </h1>

<hr />

{!! Form::model($school, ['method' => 'PATCH', 'action' => ['SchoolsController@update', $school->id]]) !!}
	
	@include('schools.form')

	<div>
		{!! Form::submit('Edit School') !!}
	</div>

{!! Form::close() !!}

@include('errors.list')

@stop