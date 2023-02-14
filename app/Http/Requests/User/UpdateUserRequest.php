<?php namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request {

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
                    'status' => 'required',
                    'email' => 'required|email|unique:users,email,' . $this->input('email') . ',email|max:100',
                    'password' => 'nullable|min:6|confirmed',
                    'password_confirmation' => 'nullable|min:6',
                    'photo' => 'image'
		];
	}
}
