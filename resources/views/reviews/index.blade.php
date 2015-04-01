@extends('app')

@section('content')


<h1>Reviews</h1>

@foreach ($reviews as $review)

<h2><a href="{{ url('/reviews', $review->id) }}">{{ $review->title }}</a></h2>
<p>{{ $review->courseType }}</p>

@endforeach


@stop