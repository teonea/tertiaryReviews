<div>
    {!! Form::label('schoolName', 'Tertiary Education Provider', $attributes = ['class' => 'wr-form']) !!}
    {!! form::select('school_id', $school, null) !!}
</div>

<div>
    {!! Form::label('name', 'Subject') !!}
    {!! form::select('subject_id', $subject, null) !!}
</div>

<div>
    {!! Form::label('name', 'Course') !!}
    {!! form::select('course_id', $course, null) !!}
</div>

<div>
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, $attributes = ['placeholder' => 'Title of your Review']) !!}
</div>

<div>
	{!! Form::label('courseType', 'Course Type') !!}
	{!! Form::textarea('courseType', null, $attributes = ['placeholder' => 'Was it a large or small class? Was it practical? How many lessons per week?', 'rows' => '6']) !!}
</div>

<div>
	{!! Form::label('favouriteAspects', 'Favourite Aspects') !!}
	{!! Form::textarea('favouriteAspects', null, $attributes = ['placeholder' => 'What did you like most about your course?', 'rows' => '10']) !!}
</div>

<div>
	{!! Form::label('leastFavouriteAspects', 'Least Favourite Aspects') !!}
	{!! Form::textarea('leastFavouriteAspects', null, $attributes = ['placeholder' => 'What did you like least about your course?', 'rows' => '10']) !!}
</div>

<div>
	{!! Form::label('courseReview', 'Overall Review') !!}
	{!! Form::textarea('courseReview', null, $attributes = ['placeholder' => 'Is it what you expected? What would you have wanted to know before enrolling for your course? Did classes run on time? How was the social atmosphere?', 'rows' => '12']) !!}
</div>

<div>
	{!! Form::label('facilitiesRating', 'Facilities Rating') !!}
	{!! Form::input('number', 'facilitiesRating', null) !!}
</div>
<div>
	{!! Form::label('clarityRating', 'Clarity Rating') !!}
	{!! Form::input('number', 'clarityRating', null) !!}
</div>
<div>
	{!! Form::label('helpfulnessRating', 'Helpfulness Rating') !!}
	{!! Form::input('number', 'helpfulnessRating', null) !!}
</div>
<div>
	{!! Form::label('jobProspectsRating', 'Job Prospects Rating') !!}
	{!! Form::input('number', 'jobProspectsRating', null) !!}
</div>
<div>
	{!! Form::label('overallRating', 'Overall Rating') !!}
	{!! Form::input('number', 'overallRating', null) !!}
</div>