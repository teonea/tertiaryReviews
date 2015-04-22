@extends('app')

@section('content')


<h1>{!! link_to('courses', 'Courses') !!}</h1>

<hr />

<h2>Search by Course</h2>

{!! Form::open(['method' => 'GET']) !!}
	
	<div>
		{!! Form::input('search', 'q', null, $attributes = ['placeholder' => 'Enter Keywords']) !!}
	</div>

{!! Form::close() !!}


@if (count($courses) >= 1)
	
	{!! $courses->render() !!}

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
		</li>
		<hr />
		@endforeach
	</ul>

@else
	
	<p>Sorry, we currently have no course listings. {!! link_to('courses/create', 'here') !!}.</p>

@endif




{!! $courses->render() !!}

@stop