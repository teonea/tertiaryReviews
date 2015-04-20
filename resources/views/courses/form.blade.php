<div>
    {!! Form::label('schoolName', 'Tertiary Education Provider', $attributes = ['class' => 'wr-form']) !!}
    {!! form::select('school_id', $school, null) !!}
</div>

<div>
    {!! Form::label('name', 'Subject') !!}
    {!! form::select('subject_id', $subject, null) !!}
</div>

<div>
	{!! Form::label('courseName', 'Course Name') !!}
	{!! Form::text('courseName', null, $attributes = ['placeholder' => 'The official name/title of your course']) !!}
</div>