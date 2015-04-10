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
			'title' => 'required|min:3',
			'courseType' => 'required|min:30',
			'favouriteAspects' => 'required|min:50',
			'leastFavouriteAspects' => 'required|min:50',
			'courseReview' => 'required|min:100'
		];
	}

}
