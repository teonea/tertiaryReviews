@extends('app')

@section('content')

<h1>{!! link_to('courses', 'Courses') !!} / <a href="{{ url('/schools', $course->school_id) }}">{{ $course->getSchoolName() }}</a> / {{ $course->courseName }}</h1>

<hr />

<h2>{{ $course->courseName }} <span class="smaller light">({{ $course->getSubjectName() }})</span></h2>



	


@if (count($course->review) >= 1)

	<h3>Course Rating Totals</h3>
	<ul class="rating-ul">
		<li class="b">Overall Rating: <span class="pink">{{ $course->overallRatingAverage() }}%</span></li>
		<li>Facilities Rating: <span class="pink">{{ $course->facilitiesRatingAverage() }}%</span></li>
		<li>Clarity Rating: <span class="pink">{{ $course->clarityRatingAverage() }}%</span></li>
		<li>Helpfulness Rating: <span class="pink">{{ $course->helpfulnessRatingAverage() }}%</span></li>
		<li>Job Prospects Rating: <span class="pink">{{ $course->jobProspectsRatingAverage() }}%</span></li>
	</ul>

    <p>Below are the unbiased, honest reviews listed for <span class="b">{{ $course->courseName }}</span> which is offered at <span class="b">{{ $course->getSchoolName() }}</span>.</p>

    {!! $reviews->render() !!}

	@foreach ($course->review as $review)

	<div class="review">
		<h1><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h1>
		<h3>Tertiary Education Provider:  <span class="b">{{ $review->getSchoolName() }}</span></h3>	
		<h3>Subject:  <span class="b">{{ $review->getSubjectName() }}</span></h3>
		<h3>Course:  <span class="b">{{ $review->course->courseName }}</span></h3>
		<h3>Region:  <span class="b">{{ $review->school->regionName }}</span></h3>
		<h3>Posted: <span class="b">{{ $review->created_at->format('d/m/Y') }}</span></h3>
		
		<div class="review-paragraphs">
			<h4>Course Type</h4>
			<p>{{ $review->courseType }}</p>
			<h4>Favourite Aspects</h4>
			<p>{{ $review->favouriteAspects }}</p>
			<h4>Least Favourite Aspects</h4>
			<p>{{ $review->leastFavouriteAspects }}</p>
			<h4>Overall Review</h4>
			<p>{{ $review->courseReview }}</p>
		</div>

		<ul class="rating-ul review-paragraphs">
			<li>
				<div class="star-rating-div">
					<label for="facilitiesRating">Facilities: <span class="light smaller">Did your place of study provide all of the equipment/amenities you needed?</span></label>
				</div>
				<?php  for($i=0; $i<$review->facilitiesRating; $i++)
					{ echo '<i class="fa-star fa" style="color: #ffd119"></i>'; 
				}  ?>
			</li>
			<li>
				<div class="star-rating-div">
					<label for="clarityRating">Clarity: <span class="light smaller">Clarity of Course Content and Assignments</span></label>
				</div>
				<?php  for($i=0; $i<$review->clarityRating; $i++)
					{ echo '<i class="fa-star fa" style="color: #ffd119"></i>'; 
				}  ?>
			</li>
			<li>
				<div class="star-rating-div star-form">
					<label for="helpfulnessRating">Helpfulness: <span class="light smaller">Was your lecturer/tutor very helpful?</span></label>
				</div>
				<?php  for($i=0; $i<$review->helpfulnessRating; $i++)
					{ echo '<i class="fa-star fa" style="color: #ffd119"></i>'; 
				}  ?>
			</li>
			<li>
				<div class="star-rating-div">
					<label for="jobProspectsRating">Job Prospects: <span class="light smaller">Job Prospects: Industry Links? How hirable are you now?</span></label>
				</div>
				<?php  for($i=0; $i<$review->jobProspectsRating; $i++)
					{ echo '<i class="fa-star fa" style="color: #ffd119"></i>'; 
				}  ?>
			</li>
			<li>
				<div class="star-rating-div">
					<label for="overallRating">Overall: <span class="light smaller">What rating do you think your course deserves?</span></label>
				</div>
				<?php  for($i=0; $i<$review->overallRating; $i++)
					{ echo '<i class="fa-star fa" style="color: #ffd119"></i>'; 
				}  ?>
			</li>
		</ul>

		<!-- <ul class="rating-ul">
			<li>Facilities Rating: <div class='starrr no-touch' data-rating='{{ $review->facilitiesRating }}'></div></li>
			<li>Clarity Rating: <div class='starrr no-touch' data-rating='{{ $review->clarityRating }}'></div></li>
			<li>Helpfulness Rating: <div class='starrr no-touch' data-rating='{{ $review->helpfulnessRating }}'></div></li>
			<li>Job Prospects Rating: <div class='starrr no-touch' data-rating='{{ $review->jobProspectsRating }}'</li>
			<li>Overall Rating: <div class='starrr no-touch' data-rating='{{ $review->overallRating }}'</li>
		</ul> -->
	</div>

	<hr />
	@endforeach
@else
    <h4>Sorry, we do not have any reviews listed for this course.</h4>
    <h4>Have you taken this course? We would love for you to take the time to <span class="pink b">{!! link_to('reviews/create', 'Write a Review.') !!}</span></h4>

    <p>View {{ $course->getSchoolName() }} other {!! link_to_action('SchoolsController@showcourses', 'courses', $course->school_id) !!}.</p>
@endif

@if(Auth::check())
	<div class="show-delete item-delete">
		<h4 class="delete-list-item">
			{!! link_to_action('CoursesController@edit', 'Edit', $course->id) !!} / 
			{!! Form::open(['method' => 'DELETE', 'route' => ['courses.destroy', $course->id]]) !!}
			{!! Form::submit('Delete') !!}
			{!! Form::close() !!}
		</h4>
	</div>
@endif

@stop