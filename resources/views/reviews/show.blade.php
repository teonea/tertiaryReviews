@extends('app')

@section('content')

<h1>{!! link_to('reviews', 'Reviews') !!} / {{ $review->title }}</h1>

<hr />

<div class="review">
	<h2>{{ $review->title }}</h2>
	<h3>Tertiary Education Provider:  <span class="b">{{ $review->getSchoolName() }}</span></h3>	
	<h3>Subject:  <span class="b">{{ $review->getSubjectName() }}</span></h3>
	<h3>Course:  <span class="b">{{ $review->course->courseName }}</span></h3>
	<h3>Posted: <span class="b">{{ $review->created_at->format('d/m/Y') }}</span></h3>

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

	@if(Auth::check())
		<div class="show-delete item-delete">
			<h4 class="delete-list-item">
				{!! link_to_action('ReviewsController@edit', 'Edit', $review->id) !!} / 
				{!! Form::open(['method' => 'DELETE', 'route' => ['reviews.destroy', $review->id]]) !!}
				{!! Form::submit('Delete') !!}
				{!! Form::close() !!}
			</h4>
		</div>
	@endif

</div>
	
@stop