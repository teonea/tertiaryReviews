@extends('app')

@section('content')

<h1>List a School</h1>
<hr />
<h2>Insert a school into the database</h2>

{!! Form::open(['action' => 'SchoolsController@store']) !!}
	
@include('schools.form')

<div>
	{!! Form::submit('Post School') !!}
</div>

{!! Form::close() !!}


@include('errors.list')


@stop