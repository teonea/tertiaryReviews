<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SchoolRequest extends Request {

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
			'schoolName' => 'required|min:3|max:200',
			'schoolPhone' => 'min:7',
			'schoolWebsite' => 'required|min:6|max:200',
			'regionName' => 'required|min:3|max:100'
		];
	}

}
