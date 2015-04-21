<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
	<link rel="shortcut icon" href="http://www.example.com/myicon.ico"/>
	<link rel="stylesheet" href="{{ asset('/css/responsive-nav.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/responsive-styles.css') }}"/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>

	<div class="page-wrapper">

		<nav class="nav-collapse">
			<a href="{!! URL::to('home') !!}"><img src="{{ asset('/img/logo.png') }}" alt="Tertiary Reviews"></a>
			<ul>
				<li>{!! link_to('home', 'Home') !!}</li>
				<li class="dropdown">
					<a href="{!! URL::to('courses') !!}" class="dropdown-toggle">Courses</a>
					<ul>
						<li>{!! link_to('courses/create', 'List a Course') !!}</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="{!! URL::to('schools') !!}" class="dropdown-toggle">Schools</a>
					<ul>
						<li>{!! link_to('schools/create', 'List a School') !!}</li>
					</ul>
				<li>{!! link_to('reviews', 'Reviews') !!}</li>
				<li>{!! link_to('reviews/create', 'Write a Review') !!}</li>
			</ul>
			<p><a href="{{ url('search') }}"><i class="fa fa-search"></i></a></p>
		</nav>

		@if(Auth::check())
		<div id="login-name">
			<p><a href="{!! URL::to('user') !!}">{{ Auth::user()->name }}</a></p>
		</div>
		@endif
		

		<a href="#00" class="scrollToTop"><i class="fa fa-chevron-up fa-5x"></i></a>

		<div class="content">
			@yield('content')
		</div>
    
		<footer>
			<ul>
				<li>Copyright &copy; 2015</li>
				@if(Auth::check())
					<li>{!! link_to('auth/logout', 'Log Out') !!}</li>
				@else
					<li>{!! link_to('auth/login', 'Log In') !!}</li>
				@endif
				<li>{!! link_to('about', 'About') !!}</li>
				<li>{!! link_to('contact', 'Contact') !!}</li>
				<li>{!! link_to('sitemap', 'Site Map') !!}</li>
				<li>{!! link_to('termsAndConditions', 'Terms &amp; Conditions') !!}</li>
				<li>{!! link_to('privacyPolicy', 'Privacy Policy') !!}</li>
			</ul>
		</footer>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset('/js/responsive-nav.js') }}"></script>
	<script src="{{ asset('/js/scrollToTop.js') }}"></script>

</body>
</html>