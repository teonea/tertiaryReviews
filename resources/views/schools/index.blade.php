@extends('app')

@section('content')


<h1>{!! link_to('schools', 'Tertiary Education Providers') !!}</h1>

<hr />

<ul class="item-list">
	@foreach ($schools as $school)
	<li><a href="{{ url('/schools', $school->id) }}">{{ $school->schoolName }}</a></li>
	<hr />
	@endforeach
</ul>


{!! $schools->render() !!}

@stop