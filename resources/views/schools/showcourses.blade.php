@extends('app')

@section('content')

<h1>{!! link_to('schools', 'Tertiary Education Providers') !!} / <a href="{{ url('/schools', $school->id) }}">{{ $school->schoolName }}</a> / Courses</h1>

<hr />
	
<h2>{{ $school->schoolName }} Courses</h2>

@if (count($school->courses) >= 1)
	<h3>Search for a course offered at <span class="b">{{ $school->schoolName }}</span>.</h3>
	@include('search.index')
@else 
	<h3>No courses listed for {{ $school->schoolName }}, you can list a course <span class="b pink">{!! link_to('courses/create', 'here') !!}</span>.</h3>
@endif

@if ($school->courses->count())
	
	@if($query == true)
	<h2>Results for <span class="pink">'{{ $query }}'</span></h2>
	@endif

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

	@if (count($school->courses) >= 1)
	
@endif

@else
	@if (count($school->courses) >= 1)
		<p>No results for <span class="b">'{{ $query }}'</span>. Try to search specifically.</p>
	@endif
	<p>If your school or course is missing please contact us {!! link_to('contact', 'here') !!}.</p>
@endif

@stop