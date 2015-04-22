@extends('app')

@section('content')

<h1>Edit User Details / {{ Auth::user()->name }} </h1>

<hr />

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', Auth::user()->id]]) !!}
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div>
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null) !!}
	</div>

	<div>
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email', null) !!}
	</div>

	<input type="hidden" name="password" value="{{ Auth::user()->password }}">

	<div>
		{!! Form::submit('Edit Details') !!}
	</div>

{!! Form::close() !!}

@include('errors.list')

@stop