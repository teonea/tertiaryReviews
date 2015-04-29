@extends('app')

@section('content')

<h1>Edit Course / {{ $course->title }} </h1>

<hr />

@include('errors.list')

{!! Form::model($course, ['method' => 'PATCH', 'action' => ['CoursesController@update', $course->id]]) !!}
	
	@include('courses.form')

	<div>
		{!! Form::submit('Edit Course') !!}
	</div>

{!! Form::close() !!}

@stop