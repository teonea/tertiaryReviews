@extends('app')

@section('content')

<h1>Delete School / {!! link_to('schools/{id}', $school->schoolName ) !!}</h1>

<hr />

<h2>Are you sure you want to delete {{$school->schoolName}}</h2>


@stop