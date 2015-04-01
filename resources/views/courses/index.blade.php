@extends('app')

@section('page-wrapper')


<h1>Courses</h1>

@foreach ($courses as $course)

<h2><a href="{{ url('/courses', $course->id) }}">{{ $course->title }}</a></h2>

@endforeach


@stop