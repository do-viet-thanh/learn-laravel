<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
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
        $ruleUsername = request('username') ? 'unique:users' : '';

        $rules = [
            'email' => 'required|unique:users,email',
            'username' => "$ruleUsername|max:255",
            'password' => ['required', 'min:6', 'confirmed'],
            'avatar' => 'bail|nullable|mimes:jpeg,jpg,png,gif|max:4096', // 4096kb = 4 MB,
        ];

        return $rules;
    }
}
