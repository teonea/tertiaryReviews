@extends('app')

@section('content')

<h1>{!! link_to('reviews', 'Reviews') !!} / {{ $review->title }}</h1>

<hr />

<div class="review">
	<h2>{{ $review->title }}</h2>
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