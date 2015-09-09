<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class postRequest extends Request {

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
            'slug' => 'required|max:60',
            'user_id' => 'required',
            'post_type' => 'required',
            'title' => 'required|max:70',
            'label' => 'required|max:70',
            'body' => 'required',
		];
	}

}
