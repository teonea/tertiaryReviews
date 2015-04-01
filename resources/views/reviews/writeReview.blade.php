@extends('app')

@section('content')

<h1>Write a Review</h1>
<hr />
<h2>Tell us about your experience</h2>

<p>We want to know your honest opinion of your tertiary study experience. Include anything you wish you could have known before enrolling for your course.</p>

{!! Form::open(['url' => 'reviews']) !!}
	
	<div>
	    {!! Form::label('name', 'Tertiary Education Provider', $attributes = ['class' => 'wr-form']) !!}
	    {!! form::select('$schools->$schoolName') !!}
	</div>

	<div>
	    {!! Form::label('name', 'Subject') !!}
	    {!! form::select('$subject->$subjectTitle') !!}
	</div>

	<div>
	    {!! Form::label('name', 'Course') !!}
	    {!! form::select('$courses->$courseName') !!}
	</div>

	<div>
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, $attributes = ['placeholder' => 'Title of your Review']) !!}
	</div>

	<div>
		{!! Form::label('courseType', 'Course Type') !!}
		{!! Form::textarea('courseType', null, $attributes = ['placeholder' => 'Was it a large or small class? Was it practical? How many lessons per week?', 'rows' => '6']) !!}
	</div>

	<div>
		{!! Form::label('favouriteAspects', 'Favourite Aspects') !!}
		{!! Form::textarea('favouriteAspects', null, $attributes = ['placeholder' => 'What did you like most about your course?', 'rows' => '10']) !!}
	</div>

	<div>
		{!! Form::label('LeastFavouriteAspects', 'Least Favourite Aspects') !!}
		{!! Form::textarea('LeastFavouriteAspects', null, $attributes = ['placeholder' => 'What did you like least about your course?', 'rows' => '10']) !!}
	</div>

	<div>
		{!! Form::label('overallReview', 'Overall Review') !!}
		{!! Form::textarea('overallReview', null, $attributes = ['placeholder' => 'Is it what you expected? What would you have wanted to know before enrolling for your course? Did classes run on time? How was the social atmosphere?', 'rows' => '12']) !!}
	</div>

	<div>
		{!! Form::submit('Post Review') !!}
	</div>



{!! Form::close() !!}

@stop