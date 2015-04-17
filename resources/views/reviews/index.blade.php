@extends('app')

@section('content')


<h1>{!! link_to('reviews', 'Reviews') !!}</h1>

<hr />

@foreach ($reviews as $review)

<h2><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h2>
<p>{{ $review->courseType }}</p>

<hr />

@endforeach

{!! $reviews->render() !!}

@stop