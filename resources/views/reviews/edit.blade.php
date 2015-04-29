@extends('app')

@section('content')

<h1>Edit Reviews / {{ $review->title }} </h1>

<hr />

@include('errors.list')

{!! Form::model($review, ['method' => 'PATCH', 'action' => ['ReviewsController@update', $review->id]]) !!}
	
	@include('reviews.form')

	<div>
		{!! Form::submit('Edit Review') !!}
	</div>

{!! Form::close() !!}

@stop