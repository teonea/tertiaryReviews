@extends('app')

@section('content')


<h1>Schools</h1>

@foreach ($schools as $school)

<h2><a href="{{ url('/schools', $school->id) }}">{{ $school->title }}</a></h2>

@endforeach

@stop