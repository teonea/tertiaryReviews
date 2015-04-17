@extends('app')

@section('content')

<p id="welcome-msg">
	Making the decision on which tertiary education course to study that much easier.
	<span class="pink">{!! link_to('reviews', 'Read Reviews.') !!}</span>
</p>

@endsection
