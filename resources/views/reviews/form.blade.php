<div>
    {!! Form::label('school_id', 'Tertiary Education Provider') !!}
    {!! form::select('school_id', $school, null) !!}
</div>

<div>
    {!! Form::label('subject_id', 'Subject') !!}
    {!! form::select('subject_id', $subject, null) !!}
</div>

<div>
    {!! Form::label('course_id', 'Course') !!}
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
	<div class='starrr' data-numstars='5' data-connected-input='facilitiesRating'></div>
    {!! Form::input('hidden', 'facilitiesRating', 'null') !!}</p>
</div>

<div>
	{!! Form::label('clarityRating', 'Clarity Rating') !!}
	<div class='starrr' data-numstars='5' data-connected-input='clarityRating'></div>
	{!! Form::input('hidden', 'clarityRating', null) !!}
</div>

<div>
	{!! Form::label('helpfulnessRating', 'Helpfulness Rating') !!}
	<div class='starrr' data-numstars='5' data-connected-input='helpfulnessRating'></div>
	{!! Form::input('hidden', 'helpfulnessRating', null) !!}
</div>

<div>
	{!! Form::label('jobProspectsRating', 'Job Prospects Rating') !!}
	<div class='starrr' data-numstars='5' data-connected-input='jobProspectsRating'></div>
	{!! Form::input('hidden', 'jobProspectsRating', null) !!}
</div>

<div>
	{!! Form::label('overallRating', 'Overall Rating') !!}
	<div class='starrr' data-numstars='5' data-connected-input='overallRating'></div>
	{!! Form::input('hidden', 'overallRating', null) !!}
</div>

<div>
	{!! Form::checkbox('terms', 1, null) !!}
	<label for="terms">I agree to the {!! link_to('termsAndConditions', 'Terms') !!}</label>
</div>
