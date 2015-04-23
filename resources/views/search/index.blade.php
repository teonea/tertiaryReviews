{!! Form::open(['method' => 'GET']) !!}
	
	{!! Form::input('search', 'q', null, $attributes = ['placeholder' => 'Enter Keywords']) !!}

{!! Form::close() !!}
