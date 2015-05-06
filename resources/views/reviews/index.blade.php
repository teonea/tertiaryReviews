@extends('app')

@section('content')


<h1>{!! link_to('reviews', 'Reviews') !!}</h1>

<hr />

<h2>Browse by Review</h2>

@if ($reviews->count())
<p>Below are our most recently posted reviews. You can also search for reviews.</p>
@else
<p>We haven't got any reviews listed. You can post a review <span class="pink b">{!! link_to('reviews/create', 'here') !!}.</span></p>
@endif



@if ($reviews->count())
	
	@include('search.index')

	@if($query == true)
		<h2>Results for <span class="pink">'{{ $query }}'</span></h2>
	@endif

	{!! str_replace('/?', '?', $reviews->render()) !!}

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

	{!! str_replace('/?', '?', $reviews->render()) !!}

@else
	@if($query == true)
		<p>No results for <span class="b">'{{ $query }}'</span>.</p>
	@endif	
@endif


@stop