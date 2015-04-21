@extends('app')

@section('content')


<h1>{!! link_to('schools', 'Tertiary Education Providers') !!}</h1>

<hr />

<ul class="item-list">
	@foreach ($schools as $school)
	<li><a href="{{ url('/schools', $school->id) }}">{{ $school->schoolName }}</a>

	@if(Auth::check())
		<a href="{{ url('/schools/destroy', $school->id) }}"><i class="fa fa-times delete-list-item"></i></a>
		<a href="{{ url('/schools/edit', $school->id) }}"><i class="fa fa-pencil delete-list-item"></i></a>
	@endif

	</li>
	<hr />
	@endforeach
</ul>


{!! $schools->render() !!}

@stop