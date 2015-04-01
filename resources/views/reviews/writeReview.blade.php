@extends('app')

@section('page-wrapper')

<h1>Write a Review</h1>

{!! Form::open(['url' => 'reviews']) !!}

<div>
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, ['class' => 'insert-css-class']) !!}
</div>
	



{!! Form::close() !!}

@stop