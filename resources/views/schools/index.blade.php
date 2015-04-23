@extends('app')

@section('content')


<h1>{!! link_to('schools', 'Tertiary Education Providers') !!}</h1>

<hr />

<h2>Browse by School</h2>

@include('search.index')


@if ($schools->count())
	
	<h2>Results for <span class="pink">'{{ $query }}'</span></h2>

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

@else
	<p>No results for <span class="b">'{{ $query }}'</span>. Try to search specifically.</p>
	<p>If your school is missing please contact us {!! link_to('contact', 'here') !!}.</p>
@endif

{!! $schools->render() !!}

@stop