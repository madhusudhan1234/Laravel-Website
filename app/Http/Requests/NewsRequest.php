<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request {

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
            'news_title' => 'required|min:10',
            'news_body' => 'required|min:20|max:150',
		];
	}

}
