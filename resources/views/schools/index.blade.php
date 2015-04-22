@extends('app')

@section('content')


<h1>{!! link_to('schools', 'Tertiary Education Providers') !!}</h1>

<hr />

{!! $schools->render() !!}

<ul class="item-list">

	@foreach ($schools as $school)
	<li><a href="{{ url('/schools', $school->id) }}">{{ $school->schoolName }}</a>

	@if(Auth::check())
		<div class="item-delete">
			<h4 class="delete-list-item">
				{!! link_to_action('SchoolsController@edit', 'Edit', $school->id) !!} / 
				{!! Form::open(['method' => 'DELETE', 'route' => ['schools.destroy', $school->id]]) !!}
				{!! Form::submit('Delete') !!}
				{!! Form::close() !!}
			</h4>
		</div>
	@endif

	</li>
	<hr />
	@endforeach
</ul>

{!! $schools->render() !!}

@stop