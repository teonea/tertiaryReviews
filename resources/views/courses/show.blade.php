@extends('app')

@section('content')

<h1>{!! link_to('courses', 'Courses') !!} / {{ $course->getSchoolName() }} / {{ $course->courseName }}</h1>

<hr />

<h2>{{ $course->courseName }}</h2>

<p>Below are the unbiased, honest reviews listed for {{ $course->courseName }} which is offered at {{ $course->getSchoolName() }}</p>

@foreach ($course->review as $review)
<h3><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h3>
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
<hr />
@endforeach


@stop