@extends('app')

@section('content')

<h1>{!! link_to('schools', 'Tertiary Education Providers') !!} / {{ $school->schoolName }}</h1>

<hr />

<h2>{{ $school->schoolName }}</h2>

<ul class="school-show">
	<li class="pink b"><a href="{{ $school->schoolWebsite }}" target="_blank">{{ $school->schoolWebsite }}</a></li>
	<li>{{ $school->schoolPhone }}</li>
	<li>{{ $school->schoolFax }}</li>
	<li>{{ $school->schoolStreet }}</li>
	<li>{{ $school->schoolSuburb }}</li>
	<li>{{ $school->schoolCity }}</li>
	<li>{{ $school->regionName }}</li>
</ul>


<h4 id="view-courses">{!! link_to_action('SchoolsController@showcourses', 'View Courses', $school->id) !!}</h4>

@if(Auth::check())
	<div class="show-delete item-delete">
		<h4 class="delete-list-item">
			{!! link_to_action('SchoolsController@edit', 'Edit', $school->id) !!} / 
			{!! Form::open(['method' => 'DELETE', 'route' => ['schools.destroy', $school->id]]) !!}
			{!! Form::submit('Delete') !!}
			{!! Form::close() !!}
		</h4>
	</div>
@endif

@stop