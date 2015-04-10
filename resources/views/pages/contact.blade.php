@extends('app')

@section('content')

<h1>Contact</h1>
<hr />
<h2>Get in Touch</h2>

<div class="half">

	<p>Want to collaborate? Found an issue with the website? Just want to say hello? Let us know...</p>

	{!! Form::open(['url' => 'contact']) !!}

		<div>
			{!! Form::text('firstName', null, $attributes = ['placeholder' => 'First Name']) !!}
		</div>

		<div>
			{!! Form::text('lastName', null, $attributes = ['placeholder' => 'Last Name']) !!}
		</div>

		<div>
			{!! Form::email('email', null, $attributes = ['placeholder' => 'Email']) !!}
		</div>

		<div>
			{!! Form::textarea('enquiry', null, $attributes = ['placeholder' => 'How can we help?', 'rows' => '10']) !!}
		</div>

		<div>
			{!! Form::submit('Send Enquiry') !!}
		</div>

	{!! Form::close() !!}

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