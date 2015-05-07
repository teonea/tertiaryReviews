<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class CourseRequest extends Request {

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
			'subject_id' => 'required',
			'courseName' => 'required|min:3|max:300',
			'terms' => 'required',
			'g-recaptcha-response' => 'required|recaptcha'
		];
	}

}
