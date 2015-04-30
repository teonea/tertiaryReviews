@extends('app')

@section('content')

<h1>Write a Review</h1>
<hr />
<h2>Tell us about your experience</h2>

@if (count($errors) > 0)
	<p class="error b">Whoops! The form was not validated, please check your errors.</p>
	@include('errors.list')
@endif

<p>We want to know your honest opinion of your tertiary study experience. Include anything you wish you could have known before enrolling for your course. All reviews are anonymous.</p>

{!! Form::open(['url' => 'ReviewsController@store', 'class' => 'wr-form']) !!}
	
@include('reviews.form')

<div>
	{!! Form::submit('Post Review') !!}
</div>

{!! Form::close() !!}

@stop