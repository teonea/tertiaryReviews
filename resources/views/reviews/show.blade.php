@extends('app')

@section('content')

<h1>{!! link_to('reviews', 'Reviews') !!} / {{ $review->title }}</h1>

<hr />

<div class="individual-review">
	
	<h2>{{ $review->title }}</h2>

	<p>What school, what course???</p>

	<p>{{ $review->courseType }}</p>
	<p>{{ $review->favouriteAspects }}</p>
	<p>{{ $review->leastFavouriteAspects }}</p>
	<p>{{ $review->courseReview }}</p>

	<ul>
		<li>{{ $review->facilitiesRating }}</li>
		<li>{{ $review->clarityRating }}</li>
		<li>{{ $review->helpfulnessRating }}</li>
		<li>{{ $review->jobProspectsRating }}</li>
		<li>{{ $review->overallRating }}</li>
	</ul>
	
</div>
	
	<p>{{ $review->created_at }}</p>

	<p>Read more reviews on (schools) (course)</p>

@stop