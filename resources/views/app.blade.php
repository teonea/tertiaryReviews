<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="{{ $description }}">
	<meta name="keywords" content="{{ $keywords }}">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
	<link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
	<link rel="stylesheet" href="{{ asset('/css/responsive-nav.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/responsive-styles.css') }}"/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' />
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('/css/starrr.min.css') }}">
	<title>Tertiary Reviews - {{ $page }}</title>
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
			<p><a href="https://twitter.com/TertiaryReviews" target="_blank"><i class="fa fa-twitter"></i></a></p>
		</nav>

		@if(Session::has('flash_message'))
		<div class="notification_msg">
			<div class="success-msg fail-msg">
				<p>
					{{ Session::get('flash_message') }}
					<button type="button" class="close">&times;</button>
				</p>
			</div>
		</div>
			
		@endif

		@if(Auth::check())
		<div id="login-name">
			<p><sub>Logged in as:</sub><br /><a href="{!! URL::to('user') !!}">{{ Auth::user()->name }}</a></p>
		</div>
		@endif
		

		<a href="#00" class="scrollToTop"><i class="fa fa-chevron-up fa-5x"></i></a>

		<div class="content">
			@yield('content')
			<div class="push"></div>
		</div>
    
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

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset('/js/responsive-nav.js') }}"></script>
	<script src="{{ asset('/js/scrollToTop.js') }}"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  	<script src="{{ asset('/js/starrr.min.js') }}"></script>
  	<script src="{{ asset('/js/scripts.js') }}"></script>
  	<script type="text/javascript">
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-39205841-5', 'dobtco.github.io');
	    ga('send', 'pageview');
	</script>

</body>
</html>