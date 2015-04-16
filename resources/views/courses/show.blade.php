@extends('app')

@section('content')

<h1>{!! link_to('courses', 'Courses') !!} / {{ $course->getSchoolName() }} / {{ $course->courseName }}</h1>

<hr />

<h2>{{ $course->courseName }}</h2>

<p>Below are the unbiased, honest reviews listed for <span class="b">{{ $course->courseName }}</span> which is offered at <span class="b">{{ $course->getSchoolName() }}</span>.</p>

@foreach ($course->review as $review)
<div class="review">
	<h1><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h1>
	<h3>Tertiary Education Provider:  <span class="b">{{ $review->getSchoolName() }}</span></h3>	
	<h3>Subject:  <span class="b">{{ $review->getSubjectName() }}</span></h3>
	<h3>Course:  <span class="b">{{ $review->course->courseName }}</span></h3>
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

<hr />
@endforeach


@stop