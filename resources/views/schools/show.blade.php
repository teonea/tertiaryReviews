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
	<li>{{ $school->schoolPostCode }}</li>
</ul>


<h4>{!! link_to_action('SchoolsController@showcourses', 'View Courses', $school->id) !!}</h4>


@stop