@extends('app')

@section('content')


<h1>{!! link_to('reviews', 'Reviews') !!}</h1>

<hr />

@if (count($reviews) >= 1)

	{!! $reviews->render() !!}

	@foreach ($reviews as $review)

	<h2><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h2>
	<p>{{ $review->courseType }}</p>
	<hr />

	@endforeach

	{!! $reviews->render() !!}

@else
	
	<p>Sorry, we currently have no reviews listed. You can post a review {!! link_to('reviews/create', 'here') !!}.</p>

@endif

@stop