<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReviewRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

		return [
			'school_id' => 'required',
			'course_id' => 'required',
			'subject_id' => 'required',
			'title' => 'required|min:3',
			'courseType' => 'required|min:30',
			'favouriteAspects' => 'required|min:50',
			'leastFavouriteAspects' => 'required|min:50',
			'courseReview' => 'required|min:100',
			'facilitiesRating' => 'integer|required|min:1|max:5',
			'clarityRating' => 'integer|required|min:1|max:5',
			'helpfulnessRating' => 'integer|required|min:1|max:5',
			'jobProspectsRating' => 'integer|required|min:1|max:5',
			'overallRating' => 'integer|required|min:1|max:5',
			'terms' => 'required',
			'g-recaptcha-response' => 'required|recaptcha'
		];
	}

}
