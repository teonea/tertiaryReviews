@extends('app')

@section('content')

<h1>List a Course</h1>
<hr />
<h2>Insert your course into our database</h2>

<p>Listing your course will allow it to be reviewed and will help others on their path of finding the right course.</p>

{!! Form::open(['action' => 'CoursesController@store']) !!}
	
	@include('courses.form')

	<div>
		{!! Form::submit('List Course') !!}
	</div>

{!! Form::close() !!}

@include('errors.list')

@stop