@extends('app')

@section('content')

<h1>Edit Reviews / {{ $review->title }} </h1>

<hr />

{!! Form::model($review, ['method' => 'PATCH', 'action' => 'ReviewsController@update', $review->id]) !!}
	
	@include('reviews.form')

	<div>
		{!! Form::submit('Edit Review') !!}
	</div>

{!! Form::close() !!}

@include('errors.list')

@stop