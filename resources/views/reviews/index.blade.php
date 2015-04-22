@extends('app')

@section('content')


<h1>{!! link_to('reviews', 'Reviews') !!}</h1>

<hr />

@if (count($reviews) >= 1)

	{!! $reviews->render() !!}

	@foreach ($reviews as $review)

	<h2>
		<a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a>
		@if(Auth::check())
			<div class="item-delete">
				<h4 class="delete-list-item">
					{!! link_to_action('ReviewsController@edit', 'Edit', $review->id) !!} / 
					{!! Form::open(['method' => 'DELETE', 'route' => ['reviews.destroy', $review->id]]) !!}
					{!! Form::submit('Delete') !!}
					{!! Form::close() !!}
				</h4>
			</div>
		@endif
	</h2>
	<p>{{ $review->courseType }}</p>
	<hr />

	@endforeach

	{!! $reviews->render() !!}

@else
	
	<p>Sorry, we currently have no reviews listed. You can post a review {!! link_to('reviews/create', 'here') !!}.</p>

@endif

@stop