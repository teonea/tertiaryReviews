@extends('app')

@section('content')

<h1>{!! link_to('reviews', 'Reviews') !!} / {{ $review->title }}</h1>

<hr />

	<h2>{{ $review->title }}</h2>

	<h4>{!! link_to_action('CoursesController@show', 'View Course', $review->course_id) !!}</h4>
	<h4>Course: <span>{{ $review->getCourseName() }}</span></h4>

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
	

	
	<p>{{ $review->created_at }}</p>

	<p>Read more reviews on (schools) (course)</p>

@stop