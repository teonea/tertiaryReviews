@extends('app')

@section('content')

<h1>Write a Review</h1>
<hr />
<h2>Tell us about your experience</h2>

<p>We want to know your honest opinion of your tertiary study experience. Include anything you wish you could have known before enrolling for your course.</p>

{!! Form::open(['url' => 'reviews']) !!}

	@include('reviews.form')

	<div>
		{!! Form::submit('Post Review') !!}
	</div>


{!! Form::close() !!}




@stop

