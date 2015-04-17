@extends('app')

@section('content')


<h1>Search</h1>

<hr />

{!! Form::open(['method' => 'GET']) !!}
	
	<div>
		{!! Form::input('search', 'q', null, $attributes = ['placeholder' => 'Enter Keywords']) !!}
	</div>

{!! Form::close() !!}

@stop