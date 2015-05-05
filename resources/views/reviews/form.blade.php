<div>
	<label for="school_id">School</label>
	<select name="school_id" id="school_id">
		<option>- Select your school -</option>
		@foreach($schools as $school)
			<option value="{{ $school->id }}">{{ $school->schoolName }}</option>
		@endforeach
	</select>
</div>

<div>
	<label for="subject_id">Subjects</label>
	<select name="subject_id" id="subject_id">
		<option>- Select your Subject -</option>
		@foreach($subjects as $subject)
			<option value="{{ $subject->id }}">{{ $subject->subjectName }}</option>
		@endforeach
	</select>
</div>

<div>
	<label for="course_id">Courses</label>
	<select name="course_id" id="course_id">
		
		<option value="">- Select your Subject First -</option>
	</select>
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

<div class="star-form">
	<label for="facilitiesRating">Facilities: <span class="light smaller">Did your place of study provide all of the equipment/amenities you needed?</span></label>
	<div class='starrr' data-numstars='5' data-connected-input='facilitiesRating'></div>
    {!! Form::input('number', 'facilitiesRating', null, $attributes = ['min' => '1', 'max' => '5']) !!}
</div>

<div class="star-form">
	<label for="clarityRating">Clarity: <span class="light smaller">Clarity of Course Content and Assignments</span></label>
	<div class='starrr' data-numstars='5' data-connected-input='clarityRating'></div>
	{!! Form::input('number', 'clarityRating', null) !!}
</div>

<div class="star-form">
	<label for="helpfulnessRating">Helpfulness: <span class="light smaller">Was your lecturer/tutor very helpful?</span></label>
	<div class='starrr' data-numstars='5' data-connected-input='helpfulnessRating'></div>
	{!! Form::input('number', 'helpfulnessRating', null) !!}
</div>

<div class="star-form">
	<label for="jobProspectsRating">Job Prospects: <span class="light smaller">Job Prospects: Industry Links? How hirable are you now?</span></label>
	<div class='starrr' data-numstars='5' data-connected-input='jobProspectsRating'></div>
	{!! Form::input('number', 'jobProspectsRating', null) !!}
</div>

<div class="star-form">
	<label for="overallRating">Overall: <span class="light smaller">What rating do you think your course deserves?</span></label>
	<div class='starrr' data-numstars='5' data-connected-input='overallRating'></div>
	{!! Form::input('number', 'overallRating', null) !!}
</div>

<div class="checbox-div">
	{!! Form::checkbox('terms', 1, null, $attributes = ['class' => 'checkbox']) !!}
	<label for="terms" class="checkbox-label">I agree to the {!! link_to('termsAndConditions', 'Terms and Conditions') !!}</label>
</div>

<div class="g-recaptcha" data-sitekey="6LcKBgYTAAAAAHiw6_rJLIktwGMq7wYTnYKhG9Ba"></div>