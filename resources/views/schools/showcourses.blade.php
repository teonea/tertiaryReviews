@extends('app')

@section('content')

<h1>{!! link_to('schools', 'Tertiary Education Providers') !!} / {!! link_to('schools/{id}', $school->schoolName ) !!} / Courses</h1>

<hr />
	
<h2>{{ $school->schoolName }} Courses</h2>

<h3>Below are the courses listed for <span class="b">{{ $school->schoolName }}</span>.</h3>

{!! $data->render() !!}

@if (count($school->courses) >= 1)

	<ul class="item-list">
		@foreach ($school->courses as $course)
		<li><a href="{{ url('/courses', $course->id) }}">{{ $course->courseName }}</a><hr /></li>
		@endforeach
	</ul>

@else

    <h4>Sorry, we do not have any courses listed for {{ $school->schoolName }}.</h4>
    <h4>Have you taken a course at {{ $school->schoolName }}? We would love for you to take the time to <span class="pink b">{!! link_to('reviews/create', 'Create a Course Listing') !!}.</span></h4>

@endif

{!! $data->render() !!}

@stop