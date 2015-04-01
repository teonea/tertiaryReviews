@extends('app')

@section('content')

<h1>Contact</h1>
<hr />
<h2>Get in Touch</h2>

<div class="half">
	<p>Want to collaborate? Found an issue with the website? Just want to say hello? Let us know...</p>
	<form>
		<input type="text" placeholder="First Name" />
		<input type="email" placeholder="Last Name" />
		<input type="text" placeholder="Email" />
		<textarea rows="10" placeholder="Write us a message" ></textarea>
		<input type="checkbox" /><span>I agree to the Terms &amp; Conditions</span>
		<input type="submit" value="Send Enquiry" />
	</form>
</div>

<div class="half">
	<p>Is it super duper important? Get in touch directly...</p>
	<ul>
		<li><i class="fa fa-envelope-o"></i>hannahteonea@gmail.com</li>
		<li><i class="fa fa-mobile"></i>0224156049</li>
		<li><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i></li>
	</ul>
</div>

@stop