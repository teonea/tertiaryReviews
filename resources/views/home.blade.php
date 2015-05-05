@extends('app')

@section('content')

<div class="half">
	<p id="welcome-msg">
		Making the decision on which tertiary education course to study that much easier.
		<span class="pink">{!! link_to('reviews', 'Read Reviews.') !!}</span>
	</p>
</div>

<div class="twitter-feed">
	<a class="twitter-timeline" href="https://twitter.com/TertiaryReviews" data-widget-id="592796352339386368">Tweets by @TertiaryReviews</a>
</div>

@endsection
