@extends('app')

@section('content')

<h1>{!! link_to('courses', 'Courses') !!} / {{ $course->getSchoolName() }} / {{ $course->courseName }}</h1>

<hr />

<h2>{{ $course->courseName }}</h2>

@stop