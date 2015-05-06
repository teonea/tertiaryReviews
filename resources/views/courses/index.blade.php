@extends('app')

@section('content')


<h1>{!! link_to('courses', 'Courses') !!}</h1>

<hr />

<h2>Browse by Course</h2>

@include('search.index')

@if ($courses->count())

	@if($query == true)
	<h2>Results for <span class="pink">'{{ $query }}'</span></h2>
	@endif

	{!! str_replace('/?', '?', $courses->render()) !!}
	
	<ul class="item-list">
		@foreach ($courses as $course)
		<li><a href="{{ url('/courses', $course->id) }}">{{ $course->courseName }}</a>
			@if(Auth::check())
				<div class="item-delete">
					<h4 class="delete-list-item">
						{!! link_to_action('CoursesController@edit', 'Edit', $course->id) !!} / 
						{!! Form::open(['method' => 'DELETE', 'route' => ['courses.destroy', $course->id]]) !!}
						{!! Form::submit('Delete') !!}
						{!! Form::close() !!}
					</h4>
				</div>
			@endif
			<hr />
		</li>
		@endforeach
	</ul>

@else
	
	@if($query == true)
		<p>No results for <span class="b">'{{ $query }}'</span>. Try to search specifically.</p>
	@endif
	<p>You can list your course {!! link_to('courses/create', 'here') !!} if it is missing.</p>

@endif

{!! str_replace('/?', '?', $courses->render()) !!}

@stop