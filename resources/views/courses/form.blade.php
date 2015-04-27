<div>
    {!! Form::label('school_id', 'Tertiary Education Provider') !!}
    {!! form::select('school_id', $school, null) !!}
</div>

<div>
    {!! Form::label('subject_id', 'Subject') !!}
    {!! form::select('subject_id', $subject, null) !!}
</div>

<div>
	{!! Form::label('courseName', 'Course Name') !!}
	{!! Form::text('courseName', null, $attributes = ['placeholder' => 'The official name/title of your course']) !!}
</div>

<div>
	{!! Form::checkbox('terms', 1, null) !!}
	<label for="terms">I agree to the {!! link_to('termsAndConditions', 'Terms') !!}</label>
</div>