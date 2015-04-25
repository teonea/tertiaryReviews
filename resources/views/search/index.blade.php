{!! Form::open(['method' => 'GET', 'class' => 'search']) !!}
	
	{!! Form::input('search', 'q', null, $attributes = ['placeholder' => 'Enter Keywords']) !!}

{!! Form::close() !!}
