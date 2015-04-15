@extends('app')

@section('content')

<h1>{!! link_to('reviews', 'Reviews') !!} / {{ $review->title }}</h1>

<hr />

	<h2>{{ $review->title }}</h2>


<h3>Tertiary Education Provider: {{ $review->getSchoolName() }}</h3>

	
	<h3>Course: <span>{{ $review->course->courseName }}</span></h3>

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
	

	<h4>{!! link_to_action('CoursesController@show', 'Read more reviews on this course here', $review->course_id) !!}</h4>
	<h4>{!! link_to_action('SchoolsController@show', 'Check out this school here', $review->school_id) !!}</h4>

@stop