@extends('app')

@section('content')

<h1>{!! link_to('schools', 'Tertiary Education Providers') !!} / {!! link_to('schools/{id}', $school->schoolName ) !!} / Courses</h1>

<hr />

<ul class="item-list">
	@foreach ($school->courses as $course)
	<li><a href="{{ url('/courses', $course->id) }}">{{ $course->courseName }}</a></li>
	<hr />
	@endforeach
</ul>





@stop