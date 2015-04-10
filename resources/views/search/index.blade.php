@extends('app')

@section('content')


<h1>Search</h1>

<hr />

{!! Form::open(['url' => 'searchResults']) !!}
	
	<div>
		{!! Form::text('search', null, $attributes = ['placeholder' => 'Enter keywords']) !!}
	</div>

	<div>
	    {!! form::select('$region->$regionName', $attributes = ['placeholder' => '- Select Region -']) !!}
	</div>

	<div>
	    {!! form::select('$subject->$subjectTitle', $attributes = ['placeholder' => '- Field of Study -']) !!}
	</div>

	<div>
		{!! Form::submit('Search') !!}
	</div>

{!! Form::close() !!}

@stop