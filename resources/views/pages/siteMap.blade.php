@extends('app')

@section('content')

<h1>Site Map</h1>
<hr />

<ul class="sitemap-ul rating-ul">
	<li>{!! link_to('home', 'Home') !!}</li>
	<li>{!! link_to('courses', 'Courses') !!}</li>
		<ul>
			<li>{!! link_to('courses/create', 'List a Course') !!}</li>
		</ul>
	<li>{!! link_to('reviews', 'Reviews') !!}</li>
		<ul>
			<li>{!! link_to('reviews/create', 'Write a Review') !!}</li>
		</ul>
	<li>{!! link_to('schools', 'Schools') !!}</li>
	<li>{!! link_to('about', 'About') !!}</li>
	<li>{!! link_to('contact', 'Contact') !!}</li>
	<li>{!! link_to('auth/login', 'Login') !!}</li>
	<li>{!! link_to('user', 'Admin View') !!}</li>
	<li>{!! link_to('privacyPolicy', 'Privacy Policy') !!}</li>
	<li>{!! link_to('termsAndConditions', 'Terms and Conditions') !!}</li>
</ul>

@stop