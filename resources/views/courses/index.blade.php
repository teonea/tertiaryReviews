@extends('app')

@section('content')


<h1>{!! link_to('courses', 'Courses') !!}</h1>

<hr />

<ul class="item-list">
	@foreach ($courses as $course)
	<li><a href="{{ url('/courses', $course->id) }}">{{ $course->courseName }}</a></li>
	<hr />
	@endforeach
</ul>

{!! $courses->render() !!}

@stop