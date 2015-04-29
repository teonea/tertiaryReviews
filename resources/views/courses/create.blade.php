@extends('app')

@section('content')

<h1>List a Course</h1>
<hr />
<h2>Insert your course into our database</h2>

@if (count($errors) > 0)
	<p class="error b">Whoops! The form was not validated, please check your errors.</p>
	@include('errors.list')
@endif

<p>Listing your course will allow it to be reviewed and will help others on their path of finding the right course.</p>

{!! Form::open(['action' => 'CoursesController@store']) !!}
	
	@include('courses.form')

	<div>
		{!! Form::submit('List Course') !!}
	</div>

{!! Form::close() !!}

@stop